#!/usr/bin/env python3
r"""
Re-apply the hand-maintained fixes on top of OpenAPI Generator output.

The SDK under lib/ is regenerated with:

    docker run --rm \
      -v "$PWD/openapi.json":/spec/openapi.json:ro -v "$PWD":/local \
      openapitools/openapi-generator-cli:v7.14.0 generate \
      -i /spec/openapi.json -g php -o /local \
      --additional-properties=invokerPackage=InpostApi,artifactVersion=<version>

The generator overwrites the *Api classes, so the fixes below must be re-applied
after every regeneration. composer.json and lib/Adapter/** are protected via
.openapi-generator-ignore and are NOT touched here.

This script is idempotent — safe to run multiple times.

Fixes (see git history for the original commits):
  * Guzzle 5.x compatibility (commit 70114aed): wire Guzzle5CompatibleTrait into
    every *Api class and route the synchronous send() through it.
  * Guzzle 5.x JSON (commit 27b9d1d8): Guzzle 5 has no \GuzzleHttp\Utils::jsonEncode,
    so use the native json_encode().
  * post_code regex (commit eae659a6): obsolete since spec 1.7.x dropped the pattern,
    kept as a defensive no-op in case a future spec reintroduces it.
  * Lenient response deserialization: ObjectSerializer::deserialize() assigned every
    property through the model setter, and generated setters validate the spec
    constraints (minimum, maxLength, enum ...). The API returns data that violates its
    own spec (e.g. delivery.price.amount = 0 vs Money.amount minimum 0.01, a 12-char
    Address.flat vs maxLength 10), so one such order made the whole order list
    unreadable. Responses are now stored via ArrayAccess (no setter validation);
    request models are still validated by the setters / valid() as before.
"""
import glob
import os
import re
import sys

ROOT = os.path.dirname(os.path.dirname(os.path.abspath(__file__)))


def read(path):
    with open(path, encoding="utf-8") as fh:
        return fh.read()


def write(path, content):
    with open(path, "w", encoding="utf-8") as fh:
        fh.write(content)


def patch_api_classes():
    changed = []
    for path in sorted(glob.glob(os.path.join(ROOT, "lib", "Api", "*.php"))):
        src = read(path)
        orig = src

        # Guzzle 5.x trait wiring (idempotent: skip if already present).
        if "Adapter\\Guzzle5CompatibleTrait" not in src:
            src = src.replace(
                "use InpostApi\\ObjectSerializer;",
                "use InpostApi\\ObjectSerializer;\n"
                "use InpostApi\\Adapter\\Guzzle5CompatibleTrait;",
                1,
            )
            src = re.sub(
                r"^(class \w+\n\{\n)",
                r"\1    use Guzzle5CompatibleTrait;\n\n",
                src,
                count=1,
                flags=re.M,
            )

        # Route synchronous sends through the compat trait (async is left alone).
        src = src.replace(
            "$this->client->send($request, $options)",
            "$this->sendCompatibleRequest($request, $options)",
        )

        # Guzzle 5.x has no Utils::jsonEncode.
        src = src.replace("\\GuzzleHttp\\Utils::jsonEncode(", "json_encode(")

        if src != orig:
            write(path, src)
            changed.append(os.path.relpath(path, ROOT))
    return changed


def patch_post_code_regex():
    # Defensive no-op unless a future spec reintroduces the ambiguous pattern.
    old = '"/^[a-zA-Z\\d- ]{3,10}$/", ObjectSerializer::toString('
    new = '"/^[a-zA-Z\\d \\-]{3,10}$/", ObjectSerializer::toString('
    changed = []
    for path in sorted(glob.glob(os.path.join(ROOT, "lib", "Model", "*.php"))):
        src = read(path)
        if old in src:
            write(path, src.replace(old, new))
            changed.append(os.path.relpath(path, ROOT))
    return changed


def patch_object_serializer():
    path = os.path.join(ROOT, "lib", "ObjectSerializer.php")
    src = read(path)
    orig = src
    marker = "// Responses are stored without setter validation"
    if marker not in src:
        src = src.replace(
            "                    if ($instance::isNullable($property)) {\n"
            "                        $instance->$propertySetter(null);\n"
            "                    }",
            "                    if ($instance::isNullable($property)) {\n"
            "                        $instance[$property] = null;\n"
            "                    }",
            1,
        )
        src = src.replace(
            "                    $instance->$propertySetter(self::deserialize($propertyValue, $type, null));",
            "                    " + marker + ": the API does not always honour\n"
            "                    // the spec constraints the generated setters enforce (see apply-patches.py).\n"
            "                    $instance[$property] = self::deserialize($propertyValue, $type, null);",
            1,
        )
    if src != orig:
        write(path, src)
        return [os.path.relpath(path, ROOT)]
    return []


def main():
    api = patch_api_classes()
    models = patch_post_code_regex()
    serializer = patch_object_serializer()
    for rel in api:
        print("patched (api):   " + rel)
    for rel in models:
        print("patched (model): " + rel)
    for rel in serializer:
        print("patched (serializer): " + rel)
    print("done: %d api file(s), %d model file(s) patched." % (len(api), len(models)))
    return 0


if __name__ == "__main__":
    sys.exit(main())

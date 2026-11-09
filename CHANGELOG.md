# Changelog

## [2.0.0] - 2026-11-09

SDK regenerated from the InPost von Halsky API specification **1.7.1** (was 1.2.0).

### Breaking changes
- `OrdersApi::getOrdersV1()` / `getOrdersV1WithHttpInfo()` / `getOrdersV1Async*()`: two new optional
  parameters. `$payment_status` comes after `$order_status`, `$updated_at_gte` comes after `$sort`.
  Code that passes `$limit`, `$offset` or `$sort` by position must be updated:
  ```php
  // 1.x
  $api->getOrdersV1($orgId, $lang, $status, $limit, $offset, $sort);
  // 2.x
  $api->getOrdersV1($orgId, $lang, $status, null, $limit, $offset, $sort);
  ```
- Models follow spec 1.7.1 (new and renamed fields and enums). Check the models you use in `docs/Model`.

### Added
- `OrganizationsApi` and `PriceProgramApi`.
- New offer and order endpoints from spec 1.7.1. `postOrdersRefuseByIdV1` is deprecated.

### Changed
- Responses are deserialized leniently. Values outside the spec (for example `delivery.price.amount = 0`
  or a longer `Address.flat`) no longer make the whole response fail.
- `scripts/apply-patches.py` re-applies the hand fixes after a regeneration (Guzzle 5
  compatibility, `json_encode`, multipart filename of offer attachments, lenient deserialization).

## [1.0.0]

First public release (API specification 1.2.0).

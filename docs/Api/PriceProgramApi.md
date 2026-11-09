# InpostApi\PriceProgramApi

All URIs are relative to https://stage-api.inpost-group.com/inpsa, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getCampaignDeclarationsV1()**](PriceProgramApi.md#getCampaignDeclarationsV1) | **GET** /v1/organizations/{organizationId}/campaigns/declarations | Lists current Offer declarations of an Organization |
| [**getCampaignsCommandsByIdV1()**](PriceProgramApi.md#getCampaignsCommandsByIdV1) | **GET** /v1/organizations/{organizationId}/campaigns/commands/{commandId} | Price Program Declaration Command Status |
| [**getOfferCampaignDeclarationsV1()**](PriceProgramApi.md#getOfferCampaignDeclarationsV1) | **GET** /v1/organizations/{organizationId}/offers/{offerId}/campaigns/declarations | Returns the current declarations for an Offer |
| [**postCampaignDeclarationsV1()**](PriceProgramApi.md#postCampaignDeclarationsV1) | **POST** /v1/organizations/{organizationId}/campaigns/declarations | Sets price program declarations for a batch of Offers |


## `getCampaignDeclarationsV1()`

```php
getCampaignDeclarationsV1($organization_id, $accept_language, $limit, $offset, $offer_ids): \InpostApi\Model\OfferCampaignDeclarationsList
```

Lists current Offer declarations of an Organization

Lists current offer declarations of an organization.  Returns the current declaration per Offer, paginated by Offer. Only Offers with a declaration are returned.  **Required scope(s):** `api:offers:read`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = InpostApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new InpostApi\Api\PriceProgramApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = 0cd818aa-bd74-4094-bc91-14c520cfed62; // string | Organization (shop/brand, org level 2) identifier, which defines context on platform.
$accept_language = en; // string | A two-letter code of the user's preferred language compliant with ISO 639.
$limit = 10; // int | Maximal size of the page.
$offset = 10; // int | Numeric offset of the first element provided.
$offer_ids = array('offer_ids_example'); // string[] | Narrow the result to the given Offers.

try {
    $result = $apiInstance->getCampaignDeclarationsV1($organization_id, $accept_language, $limit, $offset, $offer_ids);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PriceProgramApi->getCampaignDeclarationsV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_id** | **string**| Organization (shop/brand, org level 2) identifier, which defines context on platform. | |
| **accept_language** | **string**| A two-letter code of the user&#39;s preferred language compliant with ISO 639. | [optional] |
| **limit** | **int**| Maximal size of the page. | [optional] [default to 10] |
| **offset** | **int**| Numeric offset of the first element provided. | [optional] [default to 0] |
| **offer_ids** | [**string[]**](../Model/string.md)| Narrow the result to the given Offers. | [optional] |

### Return type

[**\InpostApi\Model\OfferCampaignDeclarationsList**](../Model/OfferCampaignDeclarationsList.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCampaignsCommandsByIdV1()`

```php
getCampaignsCommandsByIdV1($organization_id, $command_id, $accept_language): \InpostApi\Model\CampaignDeclarationCommandStatusDetails
```

Price Program Declaration Command Status

Allows to check price program declaration Command status and its details.  **Required scope(s):** `api:offers:read`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = InpostApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new InpostApi\Api\PriceProgramApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = 0cd818aa-bd74-4094-bc91-14c520cfed62; // string | Organization (shop/brand, org level 2) identifier, which defines context on platform.
$command_id = fee2efad-cc6b-4644-bec2-b73d46db44a5; // string | Identifier of Command object.
$accept_language = en; // string | A two-letter code of the user's preferred language compliant with ISO 639.

try {
    $result = $apiInstance->getCampaignsCommandsByIdV1($organization_id, $command_id, $accept_language);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PriceProgramApi->getCampaignsCommandsByIdV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_id** | **string**| Organization (shop/brand, org level 2) identifier, which defines context on platform. | |
| **command_id** | **string**| Identifier of Command object. | |
| **accept_language** | **string**| A two-letter code of the user&#39;s preferred language compliant with ISO 639. | [optional] |

### Return type

[**\InpostApi\Model\CampaignDeclarationCommandStatusDetails**](../Model/CampaignDeclarationCommandStatusDetails.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getOfferCampaignDeclarationsV1()`

```php
getOfferCampaignDeclarationsV1($organization_id, $offer_id, $accept_language): \InpostApi\Model\OfferCampaignDeclarations
```

Returns the current declarations for an Offer

Returns the current declarations for an offer.  Returns the current declaration of the Offer's participation in the price program. The `declaration` field is absent when the Offer has no declaration.  **Required scope(s):** `api:offers:read`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = InpostApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new InpostApi\Api\PriceProgramApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = 0cd818aa-bd74-4094-bc91-14c520cfed62; // string | Organization (shop/brand, org level 2) identifier, which defines context on platform.
$offer_id = 4dc669aa-6de6-46ab-8d72-c3fe2a0f0710; // string | Identifier of Offer object.
$accept_language = en; // string | A two-letter code of the user's preferred language compliant with ISO 639.

try {
    $result = $apiInstance->getOfferCampaignDeclarationsV1($organization_id, $offer_id, $accept_language);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PriceProgramApi->getOfferCampaignDeclarationsV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_id** | **string**| Organization (shop/brand, org level 2) identifier, which defines context on platform. | |
| **offer_id** | **string**| Identifier of Offer object. | |
| **accept_language** | **string**| A two-letter code of the user&#39;s preferred language compliant with ISO 639. | [optional] |

### Return type

[**\InpostApi\Model\OfferCampaignDeclarations**](../Model/OfferCampaignDeclarations.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postCampaignDeclarationsV1()`

```php
postCampaignDeclarationsV1($organization_id, $offer_campaign_declaration_proposal, $accept_language): \InpostApi\Model\CampaignDeclarationCommandDetails[]
```

Sets price program declarations for a batch of Offers

Declares participation (opt-in / opt-out) for a batch of Offers in the InPost Attractive Prices program. Declarations apply program-wide and remain in effect going forward. Records are immutable: each accepted Command creates a new declaration record with a new `declarationId`.  Processing is asynchronous. The response contains one Command per Offer; check the status of an individual Command via `GET /v1/organizations/{organizationId}/campaigns/commands/{commandId}`.  **Required scope(s):** `api:offers:write`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = InpostApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new InpostApi\Api\PriceProgramApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = 0cd818aa-bd74-4094-bc91-14c520cfed62; // string | Organization (shop/brand, org level 2) identifier, which defines context on platform.
$offer_campaign_declaration_proposal = array(new \InpostApi\Model\OfferCampaignDeclarationProposal()); // \InpostApi\Model\OfferCampaignDeclarationProposal[] | Batch of Offer participation declarations (opt-in/opt-out) to set.
$accept_language = en; // string | A two-letter code of the user's preferred language compliant with ISO 639.

try {
    $result = $apiInstance->postCampaignDeclarationsV1($organization_id, $offer_campaign_declaration_proposal, $accept_language);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PriceProgramApi->postCampaignDeclarationsV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_id** | **string**| Organization (shop/brand, org level 2) identifier, which defines context on platform. | |
| **offer_campaign_declaration_proposal** | [**\InpostApi\Model\OfferCampaignDeclarationProposal[]**](../Model/OfferCampaignDeclarationProposal.md)| Batch of Offer participation declarations (opt-in/opt-out) to set. | |
| **accept_language** | **string**| A two-letter code of the user&#39;s preferred language compliant with ISO 639. | [optional] |

### Return type

[**\InpostApi\Model\CampaignDeclarationCommandDetails[]**](../Model/CampaignDeclarationCommandDetails.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

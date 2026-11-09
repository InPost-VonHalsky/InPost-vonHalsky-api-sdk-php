# InpostApi\OffersApi

All URIs are relative to https://stage-api.inpost-group.com/inpsa, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getOffersByIdV1()**](OffersApi.md#getOffersByIdV1) | **GET** /v1/organizations/{organizationId}/offers/{offerId} | Get Offer details |
| [**getOffersCommandsByIdV1()**](OffersApi.md#getOffersCommandsByIdV1) | **GET** /v1/organizations/{organizationId}/offers/commands/{commandId} | Offers Command Status |
| [**getOffersDepositTypesV1()**](OffersApi.md#getOffersDepositTypesV1) | **GET** /v1/offers/deposit-types | List Deposit Types |
| [**getOffersEventsV1()**](OffersApi.md#getOffersEventsV1) | **GET** /v1/organizations/{organizationId}/offers/events | Lists Offers Events |
| [**getOffersHintV1()**](OffersApi.md#getOffersHintV1) | **GET** /v1/organizations/{organizationId}/offers/hint | Hint product info, gpsr info and category |
| [**getOffersV1()**](OffersApi.md#getOffersV1) | **GET** /v1/organizations/{organizationId}/offers | Lists Offers |
| [**patchOfferAttributesByIdV1()**](OffersApi.md#patchOfferAttributesByIdV1) | **PATCH** /v1/organizations/{organizationId}/offers/{offerId}/attributes | Patch Offer attributes |
| [**patchOffersByIdV1()**](OffersApi.md#patchOffersByIdV1) | **PATCH** /v1/organizations/{organizationId}/offers/{offerId} | Partially update Offer |
| [**patchUpdateOfferPricesBatchV1()**](OffersApi.md#patchUpdateOfferPricesBatchV1) | **PATCH** /v1/organizations/{organizationId}/offers/prices | Batch Update Offer Price |
| [**patchUpdateOfferStocksBatchV1()**](OffersApi.md#patchUpdateOfferStocksBatchV1) | **PATCH** /v1/organizations/{organizationId}/offers/stocks | Batch Update Offer Stock |
| [**postBatchOffersV1()**](OffersApi.md#postBatchOffersV1) | **POST** /v1/organizations/{organizationId}/offers/batch | Batch Offer creation |
| [**postOffersCloseByOfferIdV1()**](OffersApi.md#postOffersCloseByOfferIdV1) | **POST** /v1/organizations/{organizationId}/offers/{offerId}/close | Close Offer |
| [**postOffersReopenByOfferIdV1()**](OffersApi.md#postOffersReopenByOfferIdV1) | **POST** /v1/organizations/{organizationId}/offers/{offerId}/reopen | Reopen Offer |
| [**postOffersV1()**](OffersApi.md#postOffersV1) | **POST** /v1/organizations/{organizationId}/offers | Create new Offer |


## `getOffersByIdV1()`

```php
getOffersByIdV1($organization_id, $offer_id, $accept_language): \InpostApi\Model\OfferDetails
```

Get Offer details

Returns Offer details.  **Required scope(s):** `api:offers:read`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = InpostApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new InpostApi\Api\OffersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = 0cd818aa-bd74-4094-bc91-14c520cfed62; // string | Organization (shop/brand, org level 2) identifier, which defines context on platform.
$offer_id = 4dc669aa-6de6-46ab-8d72-c3fe2a0f0710; // string | Identifier of Offer object.
$accept_language = en; // string | A two-letter code of the user's preferred language compliant with ISO 639.

try {
    $result = $apiInstance->getOffersByIdV1($organization_id, $offer_id, $accept_language);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OffersApi->getOffersByIdV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_id** | **string**| Organization (shop/brand, org level 2) identifier, which defines context on platform. | |
| **offer_id** | **string**| Identifier of Offer object. | |
| **accept_language** | **string**| A two-letter code of the user&#39;s preferred language compliant with ISO 639. | [optional] |

### Return type

[**\InpostApi\Model\OfferDetails**](../Model/OfferDetails.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getOffersCommandsByIdV1()`

```php
getOffersCommandsByIdV1($organization_id, $command_id, $accept_language): \InpostApi\Model\OfferCommandStatusDetails
```

Offers Command Status

Allows to check Offer Command status and its details.  **Required scope(s):** `api:offers:read`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = InpostApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new InpostApi\Api\OffersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = 0cd818aa-bd74-4094-bc91-14c520cfed62; // string | Organization (shop/brand, org level 2) identifier, which defines context on platform.
$command_id = fee2efad-cc6b-4644-bec2-b73d46db44a5; // string | Identifier of Command object.
$accept_language = en; // string | A two-letter code of the user's preferred language compliant with ISO 639.

try {
    $result = $apiInstance->getOffersCommandsByIdV1($organization_id, $command_id, $accept_language);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OffersApi->getOffersCommandsByIdV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_id** | **string**| Organization (shop/brand, org level 2) identifier, which defines context on platform. | |
| **command_id** | **string**| Identifier of Command object. | |
| **accept_language** | **string**| A two-letter code of the user&#39;s preferred language compliant with ISO 639. | [optional] |

### Return type

[**\InpostApi\Model\OfferCommandStatusDetails**](../Model/OfferCommandStatusDetails.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getOffersDepositTypesV1()`

```php
getOffersDepositTypesV1($accept_language): \InpostApi\Model\OffersDepositTypes
```

List Deposit Types

Lists all Deposit Types.  **Required scope(s):** No additional scope required (authentication only).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = InpostApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new InpostApi\Api\OffersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accept_language = en; // string | A two-letter code of the user's preferred language compliant with ISO 639.

try {
    $result = $apiInstance->getOffersDepositTypesV1($accept_language);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OffersApi->getOffersDepositTypesV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **accept_language** | **string**| A two-letter code of the user&#39;s preferred language compliant with ISO 639. | [optional] |

### Return type

[**\InpostApi\Model\OffersDepositTypes**](../Model/OffersDepositTypes.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getOffersEventsV1()`

```php
getOffersEventsV1($organization_id, $accept_language, $until_id, $event_type, $limit): \InpostApi\Model\OffersEvents
```

Lists Offers Events

Lists Offers Events for specific context. Events are sorted from newest.  **Required scope(s):** `api:offers:read`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = InpostApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new InpostApi\Api\OffersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = 0cd818aa-bd74-4094-bc91-14c520cfed62; // string | Organization (shop/brand, org level 2) identifier, which defines context on platform.
$accept_language = en; // string | A two-letter code of the user's preferred language compliant with ISO 639.
$until_id = 4dc669aa-6de6-46ab-8d72-c3fe2a0f0711; // string | Use this parameter to fetch events occurring before a specific event ID. Events with the specified ID or newer are excluded from the response.
$event_type = array(new \InpostApi\Model\\InpostApi\Model\OfferEventType()); // \InpostApi\Model\OfferEventType[] | Offer Event Type as query param.
$limit = 10; // int | Maximal size of the Offer Events list.

try {
    $result = $apiInstance->getOffersEventsV1($organization_id, $accept_language, $until_id, $event_type, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OffersApi->getOffersEventsV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_id** | **string**| Organization (shop/brand, org level 2) identifier, which defines context on platform. | |
| **accept_language** | **string**| A two-letter code of the user&#39;s preferred language compliant with ISO 639. | [optional] |
| **until_id** | **string**| Use this parameter to fetch events occurring before a specific event ID. Events with the specified ID or newer are excluded from the response. | [optional] |
| **event_type** | [**\InpostApi\Model\OfferEventType[]**](../Model/\InpostApi\Model\OfferEventType.md)| Offer Event Type as query param. | [optional] |
| **limit** | **int**| Maximal size of the Offer Events list. | [optional] [default to 100] |

### Return type

[**\InpostApi\Model\OffersEvents**](../Model/OffersEvents.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getOffersHintV1()`

```php
getOffersHintV1($organization_id, $accept_language, $limit, $offset, $ean, $mpn, $name): \InpostApi\Model\Hints
```

Hint product info, gpsr info and category

Allows to map product.  **Required scope(s):** `api:offers:read`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = InpostApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new InpostApi\Api\OffersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = 0cd818aa-bd74-4094-bc91-14c520cfed62; // string | Organization (shop/brand, org level 2) identifier, which defines context on platform.
$accept_language = en; // string | A two-letter code of the user's preferred language compliant with ISO 639.
$limit = 10; // int | Maximal size of the page.
$offset = 10; // int | Numeric offset of the first element provided.
$ean = 8720955282284; // string | EAN number of the product you are looking for.
$mpn = 107001; // string | The manufacturer's product number of the item you are looking for.
$name = Souza! Opaska liliowa Star; // string | Name of the product you are looking for.

try {
    $result = $apiInstance->getOffersHintV1($organization_id, $accept_language, $limit, $offset, $ean, $mpn, $name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OffersApi->getOffersHintV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_id** | **string**| Organization (shop/brand, org level 2) identifier, which defines context on platform. | |
| **accept_language** | **string**| A two-letter code of the user&#39;s preferred language compliant with ISO 639. | [optional] |
| **limit** | **int**| Maximal size of the page. | [optional] [default to 10] |
| **offset** | **int**| Numeric offset of the first element provided. | [optional] [default to 0] |
| **ean** | **string**| EAN number of the product you are looking for. | [optional] |
| **mpn** | **string**| The manufacturer&#39;s product number of the item you are looking for. | [optional] |
| **name** | **string**| Name of the product you are looking for. | [optional] |

### Return type

[**\InpostApi\Model\Hints**](../Model/Hints.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getOffersV1()`

```php
getOffersV1($organization_id, $accept_language, $offer_status, $limit, $offset, $sort): \InpostApi\Model\Offers
```

Lists Offers

Lists current Offers.  **Required scope(s):** `api:offers:read`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = InpostApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new InpostApi\Api\OffersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = 0cd818aa-bd74-4094-bc91-14c520cfed62; // string | Organization (shop/brand, org level 2) identifier, which defines context on platform.
$accept_language = en; // string | A two-letter code of the user's preferred language compliant with ISO 639.
$offer_status = array(new \InpostApi\Model\\InpostApi\Model\OfferStatus()); // \InpostApi\Model\OfferStatus[] | Offer Status as query param.
$limit = 10; // int | Maximal size of the page.
$offset = 10; // int | Numeric offset of the first element provided.
$sort = ["-updatedAt"]; // \InpostApi\Model\OfferSort[] | The results' sorting Offer. No prefix in the value means ascending order. A '-' prefix means descending order. If not provided, results will typically be sorted by creation time in descending order by default.

try {
    $result = $apiInstance->getOffersV1($organization_id, $accept_language, $offer_status, $limit, $offset, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OffersApi->getOffersV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_id** | **string**| Organization (shop/brand, org level 2) identifier, which defines context on platform. | |
| **accept_language** | **string**| A two-letter code of the user&#39;s preferred language compliant with ISO 639. | [optional] |
| **offer_status** | [**\InpostApi\Model\OfferStatus[]**](../Model/\InpostApi\Model\OfferStatus.md)| Offer Status as query param. | [optional] |
| **limit** | **int**| Maximal size of the page. | [optional] [default to 10] |
| **offset** | **int**| Numeric offset of the first element provided. | [optional] [default to 0] |
| **sort** | [**\InpostApi\Model\OfferSort[]**](../Model/\InpostApi\Model\OfferSort.md)| The results&#39; sorting Offer. No prefix in the value means ascending order. A &#39;-&#39; prefix means descending order. If not provided, results will typically be sorted by creation time in descending order by default. | [optional] |

### Return type

[**\InpostApi\Model\Offers**](../Model/Offers.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `patchOfferAttributesByIdV1()`

```php
patchOfferAttributesByIdV1($organization_id, $offer_id, $offer_attributes_patch, $accept_language): \InpostApi\Model\OfferCommandDetails
```

Patch Offer attributes

Partially updates attributes of a specific Offer. Supports `upsert` (add or overwrite by attribute id) and `remove` (delete by attribute id) operations in a single call. An empty request body results in no changes.  **Required scope(s):** `api:offers:write`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = InpostApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new InpostApi\Api\OffersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = 0cd818aa-bd74-4094-bc91-14c520cfed62; // string | Organization (shop/brand, org level 2) identifier, which defines context on platform.
$offer_id = 4dc669aa-6de6-46ab-8d72-c3fe2a0f0710; // string | Identifier of Offer object.
$offer_attributes_patch = new \InpostApi\Model\OfferAttributesPatch(); // \InpostApi\Model\OfferAttributesPatch | Attribute patch operations to apply.
$accept_language = en; // string | A two-letter code of the user's preferred language compliant with ISO 639.

try {
    $result = $apiInstance->patchOfferAttributesByIdV1($organization_id, $offer_id, $offer_attributes_patch, $accept_language);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OffersApi->patchOfferAttributesByIdV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_id** | **string**| Organization (shop/brand, org level 2) identifier, which defines context on platform. | |
| **offer_id** | **string**| Identifier of Offer object. | |
| **offer_attributes_patch** | [**\InpostApi\Model\OfferAttributesPatch**](../Model/OfferAttributesPatch.md)| Attribute patch operations to apply. | |
| **accept_language** | **string**| A two-letter code of the user&#39;s preferred language compliant with ISO 639. | [optional] |

### Return type

[**\InpostApi\Model\OfferCommandDetails**](../Model/OfferCommandDetails.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `patchOffersByIdV1()`

```php
patchOffersByIdV1($organization_id, $offer_id, $offer_patch, $accept_language): \InpostApi\Model\OfferDetails
```

Partially update Offer

Partially updates Offer.  **Required scope(s):** `api:offers:write`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = InpostApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new InpostApi\Api\OffersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = 0cd818aa-bd74-4094-bc91-14c520cfed62; // string | Organization (shop/brand, org level 2) identifier, which defines context on platform.
$offer_id = 4dc669aa-6de6-46ab-8d72-c3fe2a0f0710; // string | Identifier of Offer object.
$offer_patch = new \InpostApi\Model\OfferPatch(); // \InpostApi\Model\OfferPatch | Filled Offer Proposal object with new values.
$accept_language = en; // string | A two-letter code of the user's preferred language compliant with ISO 639.

try {
    $result = $apiInstance->patchOffersByIdV1($organization_id, $offer_id, $offer_patch, $accept_language);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OffersApi->patchOffersByIdV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_id** | **string**| Organization (shop/brand, org level 2) identifier, which defines context on platform. | |
| **offer_id** | **string**| Identifier of Offer object. | |
| **offer_patch** | [**\InpostApi\Model\OfferPatch**](../Model/OfferPatch.md)| Filled Offer Proposal object with new values. | |
| **accept_language** | **string**| A two-letter code of the user&#39;s preferred language compliant with ISO 639. | [optional] |

### Return type

[**\InpostApi\Model\OfferDetails**](../Model/OfferDetails.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/merge-patch+json`
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `patchUpdateOfferPricesBatchV1()`

```php
patchUpdateOfferPricesBatchV1($organization_id, $offer_price_patch_item, $accept_language): \InpostApi\Model\OfferCommandDetails[]
```

Batch Update Offer Price

Updates price for multiple Offers in a single request.  **Required scope(s):** `api:offers:write`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = InpostApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new InpostApi\Api\OffersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = 0cd818aa-bd74-4094-bc91-14c520cfed62; // string | Organization (shop/brand, org level 2) identifier, which defines context on platform.
$offer_price_patch_item = array(new \InpostApi\Model\OfferPricePatchItem()); // \InpostApi\Model\OfferPricePatchItem[] | List of price updates. Each item contains offerId and price payload.
$accept_language = en; // string | A two-letter code of the user's preferred language compliant with ISO 639.

try {
    $result = $apiInstance->patchUpdateOfferPricesBatchV1($organization_id, $offer_price_patch_item, $accept_language);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OffersApi->patchUpdateOfferPricesBatchV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_id** | **string**| Organization (shop/brand, org level 2) identifier, which defines context on platform. | |
| **offer_price_patch_item** | [**\InpostApi\Model\OfferPricePatchItem[]**](../Model/OfferPricePatchItem.md)| List of price updates. Each item contains offerId and price payload. | |
| **accept_language** | **string**| A two-letter code of the user&#39;s preferred language compliant with ISO 639. | [optional] |

### Return type

[**\InpostApi\Model\OfferCommandDetails[]**](../Model/OfferCommandDetails.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `patchUpdateOfferStocksBatchV1()`

```php
patchUpdateOfferStocksBatchV1($organization_id, $offer_stock_patch_item, $accept_language): \InpostApi\Model\OfferCommandDetails[]
```

Batch Update Offer Stock

Updates stock for multiple Offers in a single request.  **Required scope(s):** `api:offers:write`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = InpostApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new InpostApi\Api\OffersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = 0cd818aa-bd74-4094-bc91-14c520cfed62; // string | Organization (shop/brand, org level 2) identifier, which defines context on platform.
$offer_stock_patch_item = array(new \InpostApi\Model\OfferStockPatchItem()); // \InpostApi\Model\OfferStockPatchItem[] | List of stock updates. Each item contains offerId and stock payload.
$accept_language = en; // string | A two-letter code of the user's preferred language compliant with ISO 639.

try {
    $result = $apiInstance->patchUpdateOfferStocksBatchV1($organization_id, $offer_stock_patch_item, $accept_language);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OffersApi->patchUpdateOfferStocksBatchV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_id** | **string**| Organization (shop/brand, org level 2) identifier, which defines context on platform. | |
| **offer_stock_patch_item** | [**\InpostApi\Model\OfferStockPatchItem[]**](../Model/OfferStockPatchItem.md)| List of stock updates. Each item contains offerId and stock payload. | |
| **accept_language** | **string**| A two-letter code of the user&#39;s preferred language compliant with ISO 639. | [optional] |

### Return type

[**\InpostApi\Model\OfferCommandDetails[]**](../Model/OfferCommandDetails.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postBatchOffersV1()`

```php
postBatchOffersV1($organization_id, $offer_proposal, $accept_language): \InpostApi\Model\OfferCreated[]
```

Batch Offer creation

Create new offers in batch.  **Required scope(s):** `api:offers:write`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = InpostApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new InpostApi\Api\OffersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = 0cd818aa-bd74-4094-bc91-14c520cfed62; // string | Organization (shop/brand, org level 2) identifier, which defines context on platform.
$offer_proposal = array(new \InpostApi\Model\OfferProposal()); // \InpostApi\Model\OfferProposal[] | Batch offers definition.
$accept_language = en; // string | A two-letter code of the user's preferred language compliant with ISO 639.

try {
    $result = $apiInstance->postBatchOffersV1($organization_id, $offer_proposal, $accept_language);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OffersApi->postBatchOffersV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_id** | **string**| Organization (shop/brand, org level 2) identifier, which defines context on platform. | |
| **offer_proposal** | [**\InpostApi\Model\OfferProposal[]**](../Model/OfferProposal.md)| Batch offers definition. | |
| **accept_language** | **string**| A two-letter code of the user&#39;s preferred language compliant with ISO 639. | [optional] |

### Return type

[**\InpostApi\Model\OfferCreated[]**](../Model/OfferCreated.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postOffersCloseByOfferIdV1()`

```php
postOffersCloseByOfferIdV1($organization_id, $offer_id, $accept_language): \InpostApi\Model\CommandDetails
```

Close Offer

Closes Offer, changes Offer state to CLOSED.  **Required scope(s):** `api:offers:write`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = InpostApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new InpostApi\Api\OffersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = 0cd818aa-bd74-4094-bc91-14c520cfed62; // string | Organization (shop/brand, org level 2) identifier, which defines context on platform.
$offer_id = 4dc669aa-6de6-46ab-8d72-c3fe2a0f0710; // string | Identifier of Offer object.
$accept_language = en; // string | A two-letter code of the user's preferred language compliant with ISO 639.

try {
    $result = $apiInstance->postOffersCloseByOfferIdV1($organization_id, $offer_id, $accept_language);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OffersApi->postOffersCloseByOfferIdV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_id** | **string**| Organization (shop/brand, org level 2) identifier, which defines context on platform. | |
| **offer_id** | **string**| Identifier of Offer object. | |
| **accept_language** | **string**| A two-letter code of the user&#39;s preferred language compliant with ISO 639. | [optional] |

### Return type

[**\InpostApi\Model\CommandDetails**](../Model/CommandDetails.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postOffersReopenByOfferIdV1()`

```php
postOffersReopenByOfferIdV1($organization_id, $offer_id, $accept_language): \InpostApi\Model\CommandDetails
```

Reopen Offer

Reopens Offer, changes Offer state.  **Required scope(s):** `api:offers:write`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = InpostApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new InpostApi\Api\OffersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = 0cd818aa-bd74-4094-bc91-14c520cfed62; // string | Organization (shop/brand, org level 2) identifier, which defines context on platform.
$offer_id = 4dc669aa-6de6-46ab-8d72-c3fe2a0f0710; // string | Identifier of Offer object.
$accept_language = en; // string | A two-letter code of the user's preferred language compliant with ISO 639.

try {
    $result = $apiInstance->postOffersReopenByOfferIdV1($organization_id, $offer_id, $accept_language);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OffersApi->postOffersReopenByOfferIdV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_id** | **string**| Organization (shop/brand, org level 2) identifier, which defines context on platform. | |
| **offer_id** | **string**| Identifier of Offer object. | |
| **accept_language** | **string**| A two-letter code of the user&#39;s preferred language compliant with ISO 639. | [optional] |

### Return type

[**\InpostApi\Model\CommandDetails**](../Model/CommandDetails.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postOffersV1()`

```php
postOffersV1($organization_id, $offer_proposal, $accept_language): \InpostApi\Model\OfferCreated
```

Create new Offer

Creates new Offer with provided proposals of Offer and Product.  **Required scope(s):** `api:offers:write`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = InpostApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new InpostApi\Api\OffersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = 0cd818aa-bd74-4094-bc91-14c520cfed62; // string | Organization (shop/brand, org level 2) identifier, which defines context on platform.
$offer_proposal = new \InpostApi\Model\OfferProposal(); // \InpostApi\Model\OfferProposal | Offer definition.
$accept_language = en; // string | A two-letter code of the user's preferred language compliant with ISO 639.

try {
    $result = $apiInstance->postOffersV1($organization_id, $offer_proposal, $accept_language);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OffersApi->postOffersV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_id** | **string**| Organization (shop/brand, org level 2) identifier, which defines context on platform. | |
| **offer_proposal** | [**\InpostApi\Model\OfferProposal**](../Model/OfferProposal.md)| Offer definition. | |
| **accept_language** | **string**| A two-letter code of the user&#39;s preferred language compliant with ISO 639. | [optional] |

### Return type

[**\InpostApi\Model\OfferCreated**](../Model/OfferCreated.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

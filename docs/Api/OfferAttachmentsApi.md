# InpostApi\OfferAttachmentsApi

All URIs are relative to https://stage-api.inpost-group.com/inpsa, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**deleteOffersAttachmentsByOfferIdAndAttachmentIdV1()**](OfferAttachmentsApi.md#deleteOffersAttachmentsByOfferIdAndAttachmentIdV1) | **DELETE** /v1/organizations/{organizationId}/offers/{offerId}/attachments/{attachmentId} | Delete Offer Attachment |
| [**getOffersAttachmentsByOfferIdAndAttachmentIdV1()**](OfferAttachmentsApi.md#getOffersAttachmentsByOfferIdAndAttachmentIdV1) | **GET** /v1/organizations/{organizationId}/offers/{offerId}/attachments/{attachmentId} | Download Offer Attachment |
| [**getOffersAttachmentsByOfferIdV1()**](OfferAttachmentsApi.md#getOffersAttachmentsByOfferIdV1) | **GET** /v1/organizations/{organizationId}/offers/{offerId}/attachments | Get Offer Attachments |
| [**postOffersAttachmentsByOfferIdV1()**](OfferAttachmentsApi.md#postOffersAttachmentsByOfferIdV1) | **POST** /v1/organizations/{organizationId}/offers/{offerId}/attachments | Create Attachment for Offer |


## `deleteOffersAttachmentsByOfferIdAndAttachmentIdV1()`

```php
deleteOffersAttachmentsByOfferIdAndAttachmentIdV1($organization_id, $offer_id, $attachment_id, $accept_language)
```

Delete Offer Attachment

Allows to delete Attachment.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = InpostApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new InpostApi\Api\OfferAttachmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = 0cd818aa-bd74-4094-bc91-14c520cfed62; // string | Organization (shop/brand, org level 2) identifier, which defines context on platform.
$offer_id = 4dc669aa-6de6-46ab-8d72-c3fe2a0f0710; // string | Identifier of Offer object.
$attachment_id = 4dc669aa-6de6-46ab-8d72-c3fe2a0f0710; // string | Attachment identifier.
$accept_language = en; // string | A two-letter code of the user's preferred language compliant with ISO 639.

try {
    $apiInstance->deleteOffersAttachmentsByOfferIdAndAttachmentIdV1($organization_id, $offer_id, $attachment_id, $accept_language);
} catch (Exception $e) {
    echo 'Exception when calling OfferAttachmentsApi->deleteOffersAttachmentsByOfferIdAndAttachmentIdV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_id** | **string**| Organization (shop/brand, org level 2) identifier, which defines context on platform. | |
| **offer_id** | **string**| Identifier of Offer object. | |
| **attachment_id** | **string**| Attachment identifier. | |
| **accept_language** | **string**| A two-letter code of the user&#39;s preferred language compliant with ISO 639. | [optional] |

### Return type

void (empty response body)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getOffersAttachmentsByOfferIdAndAttachmentIdV1()`

```php
getOffersAttachmentsByOfferIdAndAttachmentIdV1($organization_id, $offer_id, $attachment_id, $accept_language): \SplFileObject
```

Download Offer Attachment

Downloading of the Attachment.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = InpostApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new InpostApi\Api\OfferAttachmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = 0cd818aa-bd74-4094-bc91-14c520cfed62; // string | Organization (shop/brand, org level 2) identifier, which defines context on platform.
$offer_id = 4dc669aa-6de6-46ab-8d72-c3fe2a0f0710; // string | Identifier of Offer object.
$attachment_id = 4dc669aa-6de6-46ab-8d72-c3fe2a0f0710; // string | Attachment identifier.
$accept_language = en; // string | A two-letter code of the user's preferred language compliant with ISO 639.

try {
    $result = $apiInstance->getOffersAttachmentsByOfferIdAndAttachmentIdV1($organization_id, $offer_id, $attachment_id, $accept_language);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OfferAttachmentsApi->getOffersAttachmentsByOfferIdAndAttachmentIdV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_id** | **string**| Organization (shop/brand, org level 2) identifier, which defines context on platform. | |
| **offer_id** | **string**| Identifier of Offer object. | |
| **attachment_id** | **string**| Attachment identifier. | |
| **accept_language** | **string**| A two-letter code of the user&#39;s preferred language compliant with ISO 639. | [optional] |

### Return type

**\SplFileObject**

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/octed-stream`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getOffersAttachmentsByOfferIdV1()`

```php
getOffersAttachmentsByOfferIdV1($organization_id, $offer_id, $accept_language, $limit, $offset): \InpostApi\InpostApiModel\Attachments
```

Get Offer Attachments

Allows to browse Attachments for specified Offer.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = InpostApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new InpostApi\Api\OfferAttachmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = 0cd818aa-bd74-4094-bc91-14c520cfed62; // string | Organization (shop/brand, org level 2) identifier, which defines context on platform.
$offer_id = 4dc669aa-6de6-46ab-8d72-c3fe2a0f0710; // string | Identifier of Offer object.
$accept_language = en; // string | A two-letter code of the user's preferred language compliant with ISO 639.
$limit = 10; // int | Maximal size of the page.
$offset = 10; // int | Numeric offset of the first element provided.

try {
    $result = $apiInstance->getOffersAttachmentsByOfferIdV1($organization_id, $offer_id, $accept_language, $limit, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OfferAttachmentsApi->getOffersAttachmentsByOfferIdV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_id** | **string**| Organization (shop/brand, org level 2) identifier, which defines context on platform. | |
| **offer_id** | **string**| Identifier of Offer object. | |
| **accept_language** | **string**| A two-letter code of the user&#39;s preferred language compliant with ISO 639. | [optional] |
| **limit** | **int**| Maximal size of the page. | [optional] [default to 10] |
| **offset** | **int**| Numeric offset of the first element provided. | [optional] [default to 0] |

### Return type

[**\InpostApi\InpostApiModel\Attachments**](../Model/Attachments.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postOffersAttachmentsByOfferIdV1()`

```php
postOffersAttachmentsByOfferIdV1($organization_id, $offer_id, $attachment_type, $accept_language, $file): \InpostApi\InpostApiModel\CommandDetails
```

Create Attachment for Offer

Allows to create new Attachments.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = InpostApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new InpostApi\Api\OfferAttachmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = 0cd818aa-bd74-4094-bc91-14c520cfed62; // string | Organization (shop/brand, org level 2) identifier, which defines context on platform.
$offer_id = 4dc669aa-6de6-46ab-8d72-c3fe2a0f0710; // string | Identifier of Offer object.
$attachment_type = new \InpostApi\InpostApiModel\\InpostApi\InpostApiModel\AttachmentType(); // \InpostApi\InpostApiModel\AttachmentType | Attachment Type as query param.
$accept_language = en; // string | A two-letter code of the user's preferred language compliant with ISO 639.
$file = '/path/to/file.txt'; // \SplFileObject | File payload.

try {
    $result = $apiInstance->postOffersAttachmentsByOfferIdV1($organization_id, $offer_id, $attachment_type, $accept_language, $file);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OfferAttachmentsApi->postOffersAttachmentsByOfferIdV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_id** | **string**| Organization (shop/brand, org level 2) identifier, which defines context on platform. | |
| **offer_id** | **string**| Identifier of Offer object. | |
| **attachment_type** | [**\InpostApi\InpostApiModel\AttachmentType**](../Model/.md)| Attachment Type as query param. | |
| **accept_language** | **string**| A two-letter code of the user&#39;s preferred language compliant with ISO 639. | [optional] |
| **file** | **\SplFileObject****\SplFileObject**| File payload. | [optional] |

### Return type

[**\InpostApi\InpostApiModel\CommandDetails**](../Model/CommandDetails.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `multipart/form-data`
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

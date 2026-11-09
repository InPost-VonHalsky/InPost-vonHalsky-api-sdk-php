# InpostApi\OrganizationsApi

All URIs are relative to https://stage-api.inpost-group.com/inpsa, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getOrganizationsV1()**](OrganizationsApi.md#getOrganizationsV1) | **GET** /v1/organizations | Browse Organizations |


## `getOrganizationsV1()`

```php
getOrganizationsV1($accept_language): \InpostApi\Model\Organization[]
```

Browse Organizations

Returns active organizations available for integration.  **Required scope(s):** No additional scope required (authentication only).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = InpostApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new InpostApi\Api\OrganizationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accept_language = en; // string | A two-letter code of the user's preferred language compliant with ISO 639.

try {
    $result = $apiInstance->getOrganizationsV1($accept_language);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrganizationsApi->getOrganizationsV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **accept_language** | **string**| A two-letter code of the user&#39;s preferred language compliant with ISO 639. | [optional] |

### Return type

[**\InpostApi\Model\Organization[]**](../Model/Organization.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

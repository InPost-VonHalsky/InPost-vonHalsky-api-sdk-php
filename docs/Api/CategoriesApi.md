# InpostApi\CategoriesApi

All URIs are relative to https://stage-api.inpost-group.com/inpsa, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getCategoriesAttributesByCategoryIdV1()**](CategoriesApi.md#getCategoriesAttributesByCategoryIdV1) | **GET** /v1/categories/{categoryId}/attributes | Get Category Attributes |
| [**getCategoriesByIdV1()**](CategoriesApi.md#getCategoriesByIdV1) | **GET** /v1/categories/{categoryId} | Get Category details |
| [**getCategoriesV1()**](CategoriesApi.md#getCategoriesV1) | **GET** /v1/categories | Browse Category tree |


## `getCategoriesAttributesByCategoryIdV1()`

```php
getCategoriesAttributesByCategoryIdV1($category_id, $accept_language): \InpostApi\Model\AttributeDefinition[]
```

Get Category Attributes

Returns all Attributes (required and optional) for specified Category.  **Required scope(s):** `api:categories:read`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = InpostApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new InpostApi\Api\CategoriesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$category_id = d8ec11ce-12ba-4fb7-be9a-249e679f4e67; // string | Category ID identifier as path param.
$accept_language = en; // string | A two-letter code of the user's preferred language compliant with ISO 639.

try {
    $result = $apiInstance->getCategoriesAttributesByCategoryIdV1($category_id, $accept_language);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CategoriesApi->getCategoriesAttributesByCategoryIdV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **category_id** | **string**| Category ID identifier as path param. | |
| **accept_language** | **string**| A two-letter code of the user&#39;s preferred language compliant with ISO 639. | [optional] |

### Return type

[**\InpostApi\Model\AttributeDefinition[]**](../Model/AttributeDefinition.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCategoriesByIdV1()`

```php
getCategoriesByIdV1($category_id, $accept_language, $depth): \InpostApi\Model\CategoryDetailed
```

Get Category details

Returns all details for specified Category.  **Required scope(s):** `api:categories:read`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = InpostApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new InpostApi\Api\CategoriesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$category_id = d8ec11ce-12ba-4fb7-be9a-249e679f4e67; // string | Category ID identifier as path param.
$accept_language = en; // string | A two-letter code of the user's preferred language compliant with ISO 639.
$depth = 1; // int | Subtree nodes depth, how many descendants levels will be returned.

try {
    $result = $apiInstance->getCategoriesByIdV1($category_id, $accept_language, $depth);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CategoriesApi->getCategoriesByIdV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **category_id** | **string**| Category ID identifier as path param. | |
| **accept_language** | **string**| A two-letter code of the user&#39;s preferred language compliant with ISO 639. | [optional] |
| **depth** | **int**| Subtree nodes depth, how many descendants levels will be returned. | [optional] [default to 1] |

### Return type

[**\InpostApi\Model\CategoryDetailed**](../Model/CategoryDetailed.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCategoriesV1()`

```php
getCategoriesV1($accept_language, $category_id, $depth): \InpostApi\Model\Category[]
```

Browse Category tree

Allows browsing the category tree with specified depth level.  **Required scope(s):** `api:categories:read`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = InpostApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new InpostApi\Api\CategoriesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accept_language = en; // string | A two-letter code of the user's preferred language compliant with ISO 639.
$category_id = d8ec11ce-12ba-4fb7-be9a-249e679f4e67; // string | Category ID identifier as query param.
$depth = 1; // int | Subtree nodes depth, how many descendants levels will be returned.

try {
    $result = $apiInstance->getCategoriesV1($accept_language, $category_id, $depth);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CategoriesApi->getCategoriesV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **accept_language** | **string**| A two-letter code of the user&#39;s preferred language compliant with ISO 639. | [optional] |
| **category_id** | **string**| Category ID identifier as query param. | [optional] |
| **depth** | **int**| Subtree nodes depth, how many descendants levels will be returned. | [optional] [default to 1] |

### Return type

[**\InpostApi\Model\Category[]**](../Model/Category.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

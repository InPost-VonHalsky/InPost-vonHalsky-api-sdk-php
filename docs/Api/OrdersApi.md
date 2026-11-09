# InpostApi\OrdersApi

All URIs are relative to https://stage-api.inpost-group.com/inpsa, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**acceptReturnV1()**](OrdersApi.md#acceptReturnV1) | **POST** /v1/organizations/{organizationId}/returns/{returnId}/accept | Accept Return |
| [**getClaimByIdV1()**](OrdersApi.md#getClaimByIdV1) | **GET** /v1/organizations/{organizationId}/orders/{orderId}/claims/{claimId} | Get single claim details |
| [**getClaimsForOrganizationV1()**](OrdersApi.md#getClaimsForOrganizationV1) | **GET** /v1/organizations/{organizationId}/claims | Get list of organization claims |
| [**getOrdersByIdV1()**](OrdersApi.md#getOrdersByIdV1) | **GET** /v1/organizations/{organizationId}/orders/{orderId} | Get Order details |
| [**getOrdersClaimTypesDictionaryV1()**](OrdersApi.md#getOrdersClaimTypesDictionaryV1) | **GET** /v1/orders/claim-types | Get claim types dictionary |
| [**getOrdersCommandsByIdV1()**](OrdersApi.md#getOrdersCommandsByIdV1) | **GET** /v1/organizations/{organizationId}/orders/commands/{commandId} | Orders Command Status |
| [**getOrdersDeliveryMethodsV1()**](OrdersApi.md#getOrdersDeliveryMethodsV1) | **GET** /v1/orders/delivery-methods | List Delivery Methods |
| [**getOrdersDeliveryMethodsV2()**](OrdersApi.md#getOrdersDeliveryMethodsV2) | **GET** /v2/orders/delivery-methods | List Delivery Methods |
| [**getOrdersEventsV1()**](OrdersApi.md#getOrdersEventsV1) | **GET** /v1/organizations/{organizationId}/orders/events | Lists Orders Events |
| [**getOrdersV1()**](OrdersApi.md#getOrdersV1) | **GET** /v1/organizations/{organizationId}/orders | Lists Orders |
| [**getReturnByIdV1()**](OrdersApi.md#getReturnByIdV1) | **GET** /v1/organizations/{organizationId}/returns/{returnId} | Get single return details |
| [**getReturnsByOrderIdV1()**](OrdersApi.md#getReturnsByOrderIdV1) | **GET** /v1/organizations/{organizationId}/orders/{orderId}/returns | Get returns for specific order |
| [**getReturnsForOrganizationV1()**](OrdersApi.md#getReturnsForOrganizationV1) | **GET** /v1/organizations/{organizationId}/returns | Get all returns for organization |
| [**partialRefundClaimV1()**](OrdersApi.md#partialRefundClaimV1) | **POST** /v1/organizations/{organizationId}/orders/{orderId}/claims/{claimId}/partial-refund | Resolve claim with partial refund |
| [**postOrdersAcceptByIdV1()**](OrdersApi.md#postOrdersAcceptByIdV1) | **POST** /v1/organizations/{organizationId}/orders/{orderId}/accept | Accept Order |
| [**postOrdersRefundByOrderIdV1()**](OrdersApi.md#postOrdersRefundByOrderIdV1) | **POST** /v1/organizations/{organizationId}/orders/{orderId}/refund | Refund Order payment |
| [**postOrdersRefuseByIdV1()**](OrdersApi.md#postOrdersRefuseByIdV1) | **POST** /v1/organizations/{organizationId}/orders/{orderId}/refuse | Refuse Order |
| [**refundClaimV1()**](OrdersApi.md#refundClaimV1) | **POST** /v1/organizations/{organizationId}/orders/{orderId}/claims/{claimId}/refund | Resolve claim with full refund |
| [**rejectClaimV1()**](OrdersApi.md#rejectClaimV1) | **POST** /v1/organizations/{organizationId}/orders/{orderId}/claims/{claimId}/reject | Reject claim |
| [**rejectReturnV1()**](OrdersApi.md#rejectReturnV1) | **POST** /v1/organizations/{organizationId}/returns/{returnId}/reject | Reject Return |


## `acceptReturnV1()`

```php
acceptReturnV1($organization_id, $return_id, $accept_language): \InpostApi\Model\SuccessResponse
```

Accept Return

Marks Return as Accepted - organization accepts the return request.  **Required scope(s):** `api:orders:write`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = InpostApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new InpostApi\Api\OrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = 0cd818aa-bd74-4094-bc91-14c520cfed62; // string | Organization (shop/brand, org level 2) identifier, which defines context on platform.
$return_id = 'return_id_example'; // string | Unique identifier of the return.
$accept_language = en; // string | A two-letter code of the user's preferred language compliant with ISO 639.

try {
    $result = $apiInstance->acceptReturnV1($organization_id, $return_id, $accept_language);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrdersApi->acceptReturnV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_id** | **string**| Organization (shop/brand, org level 2) identifier, which defines context on platform. | |
| **return_id** | **string**| Unique identifier of the return. | |
| **accept_language** | **string**| A two-letter code of the user&#39;s preferred language compliant with ISO 639. | [optional] |

### Return type

[**\InpostApi\Model\SuccessResponse**](../Model/SuccessResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getClaimByIdV1()`

```php
getClaimByIdV1($organization_id, $order_id, $claim_id, $accept_language): \InpostApi\Model\ClaimResponse
```

Get single claim details

Retrieve detailed information about a specific claim using its unique identifier.  **Required scope(s):** `api:orders:read`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = InpostApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new InpostApi\Api\OrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = 0cd818aa-bd74-4094-bc91-14c520cfed62; // string | Organization (shop/brand, org level 2) identifier, which defines context on platform.
$order_id = example-d8ec11ce; // string | Identifier of Order object.
$claim_id = 123e4567-e89b-12d3-a456-426614174000; // string | Unique identifier of the Claim.
$accept_language = en; // string | A two-letter code of the user's preferred language compliant with ISO 639.

try {
    $result = $apiInstance->getClaimByIdV1($organization_id, $order_id, $claim_id, $accept_language);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrdersApi->getClaimByIdV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_id** | **string**| Organization (shop/brand, org level 2) identifier, which defines context on platform. | |
| **order_id** | **string**| Identifier of Order object. | |
| **claim_id** | **string**| Unique identifier of the Claim. | |
| **accept_language** | **string**| A two-letter code of the user&#39;s preferred language compliant with ISO 639. | [optional] |

### Return type

[**\InpostApi\Model\ClaimResponse**](../Model/ClaimResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getClaimsForOrganizationV1()`

```php
getClaimsForOrganizationV1($organization_id, $accept_language, $customer_email, $customer_phone_number, $resolution, $states, $submission_date_from, $submission_date_to, $limit, $offset, $sort): \InpostApi\Model\ClaimListResponse
```

Get list of organization claims

Retrieve a list of claims for a specific organization with optional filtering parameters.  **Required scope(s):** `api:orders:read`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = InpostApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new InpostApi\Api\OrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = 0cd818aa-bd74-4094-bc91-14c520cfed62; // string | Organization (shop/brand, org level 2) identifier, which defines context on platform.
$accept_language = en; // string | A two-letter code of the user's preferred language compliant with ISO 639.
$customer_email = 'customer_email_example'; // string | Customer email for filtering.
$customer_phone_number = 'customer_phone_number_example'; // string | Customer phone number for filtering.
$resolution = array(new \InpostApi\Model\\InpostApi\Model\ResolutionQuery()); // \InpostApi\Model\ResolutionQuery[] | List of complaint resolution to filter. Multiple values allowed.
$states = array(new \InpostApi\Model\\InpostApi\Model\RequestedClaimState()); // \InpostApi\Model\RequestedClaimState[] | List of complaint states to filter. Multiple values allowed.
$submission_date_from = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | Start date for the complaint filing date filter.
$submission_date_to = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | End date for the complaint submission date filter.
$limit = 10; // int | Maximal size of the page.
$offset = 10; // int | Numeric offset of the first element provided.
$sort = ["submission_date"]; // \InpostApi\Model\ClaimSort[] | Field to sort by. Default is submission_date. Available options: expires_at, -expires_at, state, -state, submission_date, -submission_date.

try {
    $result = $apiInstance->getClaimsForOrganizationV1($organization_id, $accept_language, $customer_email, $customer_phone_number, $resolution, $states, $submission_date_from, $submission_date_to, $limit, $offset, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrdersApi->getClaimsForOrganizationV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_id** | **string**| Organization (shop/brand, org level 2) identifier, which defines context on platform. | |
| **accept_language** | **string**| A two-letter code of the user&#39;s preferred language compliant with ISO 639. | [optional] |
| **customer_email** | **string**| Customer email for filtering. | [optional] |
| **customer_phone_number** | **string**| Customer phone number for filtering. | [optional] |
| **resolution** | [**\InpostApi\Model\ResolutionQuery[]**](../Model/\InpostApi\Model\ResolutionQuery.md)| List of complaint resolution to filter. Multiple values allowed. | [optional] |
| **states** | [**\InpostApi\Model\RequestedClaimState[]**](../Model/\InpostApi\Model\RequestedClaimState.md)| List of complaint states to filter. Multiple values allowed. | [optional] |
| **submission_date_from** | **\DateTime**| Start date for the complaint filing date filter. | [optional] |
| **submission_date_to** | **\DateTime**| End date for the complaint submission date filter. | [optional] |
| **limit** | **int**| Maximal size of the page. | [optional] [default to 10] |
| **offset** | **int**| Numeric offset of the first element provided. | [optional] [default to 0] |
| **sort** | [**\InpostApi\Model\ClaimSort[]**](../Model/\InpostApi\Model\ClaimSort.md)| Field to sort by. Default is submission_date. Available options: expires_at, -expires_at, state, -state, submission_date, -submission_date. | [optional] |

### Return type

[**\InpostApi\Model\ClaimListResponse**](../Model/ClaimListResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getOrdersByIdV1()`

```php
getOrdersByIdV1($organization_id, $order_id, $accept_language): \InpostApi\Model\Order
```

Get Order details

Retrieve comprehensive details about an Order, including purchased Offers, customer data, Order status, payment information, shipping and billing details.  **Required scope(s):** `api:orders:read`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = InpostApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new InpostApi\Api\OrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = 0cd818aa-bd74-4094-bc91-14c520cfed62; // string | Organization (shop/brand, org level 2) identifier, which defines context on platform.
$order_id = example-d8ec11ce; // string | Identifier of Order object.
$accept_language = en; // string | A two-letter code of the user's preferred language compliant with ISO 639.

try {
    $result = $apiInstance->getOrdersByIdV1($organization_id, $order_id, $accept_language);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrdersApi->getOrdersByIdV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_id** | **string**| Organization (shop/brand, org level 2) identifier, which defines context on platform. | |
| **order_id** | **string**| Identifier of Order object. | |
| **accept_language** | **string**| A two-letter code of the user&#39;s preferred language compliant with ISO 639. | [optional] |

### Return type

[**\InpostApi\Model\Order**](../Model/Order.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getOrdersClaimTypesDictionaryV1()`

```php
getOrdersClaimTypesDictionaryV1($accept_language): \InpostApi\Model\ClaimTypes
```

Get claim types dictionary

Retrieve a list of available claim types with localized descriptions.  **Required scope(s):** `api:orders:read`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = InpostApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new InpostApi\Api\OrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accept_language = en; // string | A two-letter code of the user's preferred language compliant with ISO 639.

try {
    $result = $apiInstance->getOrdersClaimTypesDictionaryV1($accept_language);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrdersApi->getOrdersClaimTypesDictionaryV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **accept_language** | **string**| A two-letter code of the user&#39;s preferred language compliant with ISO 639. | [optional] |

### Return type

[**\InpostApi\Model\ClaimTypes**](../Model/ClaimTypes.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getOrdersCommandsByIdV1()`

```php
getOrdersCommandsByIdV1($organization_id, $command_id, $accept_language): \InpostApi\Model\CommandDetails
```

Orders Command Status

Allows to check Order Command status and its details.  **Required scope(s):** `api:orders:read`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = InpostApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new InpostApi\Api\OrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = 0cd818aa-bd74-4094-bc91-14c520cfed62; // string | Organization (shop/brand, org level 2) identifier, which defines context on platform.
$command_id = fee2efad-cc6b-4644-bec2-b73d46db44a5; // string | Identifier of Command object.
$accept_language = en; // string | A two-letter code of the user's preferred language compliant with ISO 639.

try {
    $result = $apiInstance->getOrdersCommandsByIdV1($organization_id, $command_id, $accept_language);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrdersApi->getOrdersCommandsByIdV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_id** | **string**| Organization (shop/brand, org level 2) identifier, which defines context on platform. | |
| **command_id** | **string**| Identifier of Command object. | |
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

## `getOrdersDeliveryMethodsV1()`

```php
getOrdersDeliveryMethodsV1($accept_language): \InpostApi\Model\DeliveryMethodType[]
```

List Delivery Methods

Lists all Delivery Methods. Deprecated - it is suggested to use newer version of this endpoint.  **Required scope(s):** No additional scope required (authentication only).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = InpostApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new InpostApi\Api\OrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accept_language = en; // string | A two-letter code of the user's preferred language compliant with ISO 639.

try {
    $result = $apiInstance->getOrdersDeliveryMethodsV1($accept_language);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrdersApi->getOrdersDeliveryMethodsV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **accept_language** | **string**| A two-letter code of the user&#39;s preferred language compliant with ISO 639. | [optional] |

### Return type

[**\InpostApi\Model\DeliveryMethodType[]**](../Model/DeliveryMethodType.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getOrdersDeliveryMethodsV2()`

```php
getOrdersDeliveryMethodsV2($accept_language): \InpostApi\Model\DeliveryMethod[]
```

List Delivery Methods

Lists all Delivery Methods.  **Required scope(s):** No additional scope required (authentication only).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = InpostApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new InpostApi\Api\OrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accept_language = en; // string | A two-letter code of the user's preferred language compliant with ISO 639.

try {
    $result = $apiInstance->getOrdersDeliveryMethodsV2($accept_language);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrdersApi->getOrdersDeliveryMethodsV2: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **accept_language** | **string**| A two-letter code of the user&#39;s preferred language compliant with ISO 639. | [optional] |

### Return type

[**\InpostApi\Model\DeliveryMethod[]**](../Model/DeliveryMethod.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getOrdersEventsV1()`

```php
getOrdersEventsV1($organization_id, $accept_language, $until_id, $event_type, $limit): \InpostApi\Model\OrdersEvents
```

Lists Orders Events

Lists Orders Events. Events are sorted from newest.  **Required scope(s):** `api:orders:read`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = InpostApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new InpostApi\Api\OrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = 0cd818aa-bd74-4094-bc91-14c520cfed62; // string | Organization (shop/brand, org level 2) identifier, which defines context on platform.
$accept_language = en; // string | A two-letter code of the user's preferred language compliant with ISO 639.
$until_id = 4dc669aa-6de6-46ab-8d72-c3fe2a0f0711; // string | Use this parameter to fetch events occurring before a specific event ID. Events with the specified ID or newer are excluded from the response.
$event_type = array(new \InpostApi\Model\\InpostApi\Model\OrderEventType()); // \InpostApi\Model\OrderEventType[] | Order Event Type as query param.
$limit = 10; // int | Maximal size of the Order Events list.

try {
    $result = $apiInstance->getOrdersEventsV1($organization_id, $accept_language, $until_id, $event_type, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrdersApi->getOrdersEventsV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_id** | **string**| Organization (shop/brand, org level 2) identifier, which defines context on platform. | |
| **accept_language** | **string**| A two-letter code of the user&#39;s preferred language compliant with ISO 639. | [optional] |
| **until_id** | **string**| Use this parameter to fetch events occurring before a specific event ID. Events with the specified ID or newer are excluded from the response. | [optional] |
| **event_type** | [**\InpostApi\Model\OrderEventType[]**](../Model/\InpostApi\Model\OrderEventType.md)| Order Event Type as query param. | [optional] |
| **limit** | **int**| Maximal size of the Order Events list. | [optional] [default to 100] |

### Return type

[**\InpostApi\Model\OrdersEvents**](../Model/OrdersEvents.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getOrdersV1()`

```php
getOrdersV1($organization_id, $accept_language, $order_status, $payment_status, $limit, $offset, $sort, $updated_at_gte): \InpostApi\Model\Orders
```

Lists Orders

Lists Orders for specific context.  **Required scope(s):** `api:orders:read`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = InpostApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new InpostApi\Api\OrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = 0cd818aa-bd74-4094-bc91-14c520cfed62; // string | Organization (shop/brand, org level 2) identifier, which defines context on platform.
$accept_language = en; // string | A two-letter code of the user's preferred language compliant with ISO 639.
$order_status = array(new \InpostApi\Model\\InpostApi\Model\OrderStatus()); // \InpostApi\Model\OrderStatus[] | Order Status as query param.
$payment_status = array(new \InpostApi\Model\\InpostApi\Model\OrderPaymentStatus()); // \InpostApi\Model\OrderPaymentStatus[] | Order Payment Status as a query param. If the parameter is not provided, the default value will be PAID. To retrieve all orders, both PAID and NOT_PAID parameters should be specified.
$limit = 10; // int | Maximal size of the page.
$offset = 10; // int | Numeric offset of the first element provided.
$sort = ["-updatedAt"]; // \InpostApi\Model\OrderSort[] | The results' sorting Order. No prefix in the value means ascending order. A '-' prefix means descending order. If not provided, results will typically be sorted by creation time in descending order by default.
$updated_at_gte = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | Filter orders updated at or after the given timestamp.

try {
    $result = $apiInstance->getOrdersV1($organization_id, $accept_language, $order_status, $payment_status, $limit, $offset, $sort, $updated_at_gte);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrdersApi->getOrdersV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_id** | **string**| Organization (shop/brand, org level 2) identifier, which defines context on platform. | |
| **accept_language** | **string**| A two-letter code of the user&#39;s preferred language compliant with ISO 639. | [optional] |
| **order_status** | [**\InpostApi\Model\OrderStatus[]**](../Model/\InpostApi\Model\OrderStatus.md)| Order Status as query param. | [optional] |
| **payment_status** | [**\InpostApi\Model\OrderPaymentStatus[]**](../Model/\InpostApi\Model\OrderPaymentStatus.md)| Order Payment Status as a query param. If the parameter is not provided, the default value will be PAID. To retrieve all orders, both PAID and NOT_PAID parameters should be specified. | [optional] |
| **limit** | **int**| Maximal size of the page. | [optional] [default to 10] |
| **offset** | **int**| Numeric offset of the first element provided. | [optional] [default to 0] |
| **sort** | [**\InpostApi\Model\OrderSort[]**](../Model/\InpostApi\Model\OrderSort.md)| The results&#39; sorting Order. No prefix in the value means ascending order. A &#39;-&#39; prefix means descending order. If not provided, results will typically be sorted by creation time in descending order by default. | [optional] |
| **updated_at_gte** | **\DateTime**| Filter orders updated at or after the given timestamp. | [optional] |

### Return type

[**\InpostApi\Model\Orders**](../Model/Orders.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getReturnByIdV1()`

```php
getReturnByIdV1($organization_id, $return_id, $accept_language): \InpostApi\Model\ModelReturn
```

Get single return details

Retrieve detailed information about a specific return.  **Required scope(s):** `api:orders:read`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = InpostApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new InpostApi\Api\OrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = 0cd818aa-bd74-4094-bc91-14c520cfed62; // string | Organization (shop/brand, org level 2) identifier, which defines context on platform.
$return_id = 'return_id_example'; // string | Unique identifier of the return.
$accept_language = en; // string | A two-letter code of the user's preferred language compliant with ISO 639.

try {
    $result = $apiInstance->getReturnByIdV1($organization_id, $return_id, $accept_language);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrdersApi->getReturnByIdV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_id** | **string**| Organization (shop/brand, org level 2) identifier, which defines context on platform. | |
| **return_id** | **string**| Unique identifier of the return. | |
| **accept_language** | **string**| A two-letter code of the user&#39;s preferred language compliant with ISO 639. | [optional] |

### Return type

[**\InpostApi\Model\ModelReturn**](../Model/ModelReturn.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getReturnsByOrderIdV1()`

```php
getReturnsByOrderIdV1($organization_id, $order_id, $accept_language, $status, $limit, $offset): \InpostApi\Model\ReturnList
```

Get returns for specific order

Retrieve all returns associated with a specific order.  **Required scope(s):** `api:orders:read`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = InpostApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new InpostApi\Api\OrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = 0cd818aa-bd74-4094-bc91-14c520cfed62; // string | Organization (shop/brand, org level 2) identifier, which defines context on platform.
$order_id = example-d8ec11ce; // string | Identifier of Order object.
$accept_language = en; // string | A two-letter code of the user's preferred language compliant with ISO 639.
$status = ["NEW","ACCEPTED","REJECTED"]; // \InpostApi\Model\ReturnStatus[] | Filter returns by status. Multiple values allowed.
$limit = 10; // int | Maximal size of the page.
$offset = 10; // int | Numeric offset of the first element provided.

try {
    $result = $apiInstance->getReturnsByOrderIdV1($organization_id, $order_id, $accept_language, $status, $limit, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrdersApi->getReturnsByOrderIdV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_id** | **string**| Organization (shop/brand, org level 2) identifier, which defines context on platform. | |
| **order_id** | **string**| Identifier of Order object. | |
| **accept_language** | **string**| A two-letter code of the user&#39;s preferred language compliant with ISO 639. | [optional] |
| **status** | [**\InpostApi\Model\ReturnStatus[]**](../Model/\InpostApi\Model\ReturnStatus.md)| Filter returns by status. Multiple values allowed. | [optional] |
| **limit** | **int**| Maximal size of the page. | [optional] [default to 10] |
| **offset** | **int**| Numeric offset of the first element provided. | [optional] [default to 0] |

### Return type

[**\InpostApi\Model\ReturnList**](../Model/ReturnList.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getReturnsForOrganizationV1()`

```php
getReturnsForOrganizationV1($organization_id, $accept_language, $status, $limit, $offset): \InpostApi\Model\ReturnList
```

Get all returns for organization

Retrieve all returns for the organization.  **Required scope(s):** `api:orders:read`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = InpostApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new InpostApi\Api\OrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = 0cd818aa-bd74-4094-bc91-14c520cfed62; // string | Organization (shop/brand, org level 2) identifier, which defines context on platform.
$accept_language = en; // string | A two-letter code of the user's preferred language compliant with ISO 639.
$status = ["NEW","ACCEPTED","REJECTED"]; // \InpostApi\Model\ReturnStatus[] | Filter returns by status. Multiple values allowed.
$limit = 10; // int | Maximal size of the page.
$offset = 10; // int | Numeric offset of the first element provided.

try {
    $result = $apiInstance->getReturnsForOrganizationV1($organization_id, $accept_language, $status, $limit, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrdersApi->getReturnsForOrganizationV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_id** | **string**| Organization (shop/brand, org level 2) identifier, which defines context on platform. | |
| **accept_language** | **string**| A two-letter code of the user&#39;s preferred language compliant with ISO 639. | [optional] |
| **status** | [**\InpostApi\Model\ReturnStatus[]**](../Model/\InpostApi\Model\ReturnStatus.md)| Filter returns by status. Multiple values allowed. | [optional] |
| **limit** | **int**| Maximal size of the page. | [optional] [default to 10] |
| **offset** | **int**| Numeric offset of the first element provided. | [optional] [default to 0] |

### Return type

[**\InpostApi\Model\ReturnList**](../Model/ReturnList.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `partialRefundClaimV1()`

```php
partialRefundClaimV1($organization_id, $order_id, $claim_id, $accept_language, $resolution_description): \InpostApi\Model\SuccessResponse
```

Resolve claim with partial refund

Resolve a claim with a partial refund. This operation processes a partial refund for the claim and can only be performed once per claim.  **Required scope(s):** `api:orders:write`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = InpostApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new InpostApi\Api\OrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = 0cd818aa-bd74-4094-bc91-14c520cfed62; // string | Organization (shop/brand, org level 2) identifier, which defines context on platform.
$order_id = example-d8ec11ce; // string | Identifier of Order object.
$claim_id = 123e4567-e89b-12d3-a456-426614174000; // string | Unique identifier of the Claim.
$accept_language = en; // string | A two-letter code of the user's preferred language compliant with ISO 639.
$resolution_description = new \InpostApi\Model\ResolutionDescription(); // \InpostApi\Model\ResolutionDescription

try {
    $result = $apiInstance->partialRefundClaimV1($organization_id, $order_id, $claim_id, $accept_language, $resolution_description);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrdersApi->partialRefundClaimV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_id** | **string**| Organization (shop/brand, org level 2) identifier, which defines context on platform. | |
| **order_id** | **string**| Identifier of Order object. | |
| **claim_id** | **string**| Unique identifier of the Claim. | |
| **accept_language** | **string**| A two-letter code of the user&#39;s preferred language compliant with ISO 639. | [optional] |
| **resolution_description** | [**\InpostApi\Model\ResolutionDescription**](../Model/ResolutionDescription.md)|  | [optional] |

### Return type

[**\InpostApi\Model\SuccessResponse**](../Model/SuccessResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postOrdersAcceptByIdV1()`

```php
postOrdersAcceptByIdV1($organization_id, $order_id, $accept_language): \InpostApi\Model\CommandDetails
```

Accept Order

Marks Order as Accepted - seller accepts to handle this Order.  **Required scope(s):** `api:orders:write`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = InpostApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new InpostApi\Api\OrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = 0cd818aa-bd74-4094-bc91-14c520cfed62; // string | Organization (shop/brand, org level 2) identifier, which defines context on platform.
$order_id = example-d8ec11ce; // string | Identifier of Order object.
$accept_language = en; // string | A two-letter code of the user's preferred language compliant with ISO 639.

try {
    $result = $apiInstance->postOrdersAcceptByIdV1($organization_id, $order_id, $accept_language);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrdersApi->postOrdersAcceptByIdV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_id** | **string**| Organization (shop/brand, org level 2) identifier, which defines context on platform. | |
| **order_id** | **string**| Identifier of Order object. | |
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

## `postOrdersRefundByOrderIdV1()`

```php
postOrdersRefundByOrderIdV1($organization_id, $order_id, $refund_request, $accept_language): \InpostApi\Model\RefundResponse
```

Refund Order payment

Refund Order payment.  **Required scope(s):** `api:orders:write`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = InpostApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new InpostApi\Api\OrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = 0cd818aa-bd74-4094-bc91-14c520cfed62; // string | Organization (shop/brand, org level 2) identifier, which defines context on platform.
$order_id = example-d8ec11ce; // string | Identifier of Order object.
$refund_request = new \InpostApi\Model\RefundRequest(); // \InpostApi\Model\RefundRequest | Amount which needs to be refunded. If request body is not provided then the whole Order is refunded.
$accept_language = en; // string | A two-letter code of the user's preferred language compliant with ISO 639.

try {
    $result = $apiInstance->postOrdersRefundByOrderIdV1($organization_id, $order_id, $refund_request, $accept_language);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrdersApi->postOrdersRefundByOrderIdV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_id** | **string**| Organization (shop/brand, org level 2) identifier, which defines context on platform. | |
| **order_id** | **string**| Identifier of Order object. | |
| **refund_request** | [**\InpostApi\Model\RefundRequest**](../Model/RefundRequest.md)| Amount which needs to be refunded. If request body is not provided then the whole Order is refunded. | |
| **accept_language** | **string**| A two-letter code of the user&#39;s preferred language compliant with ISO 639. | [optional] |

### Return type

[**\InpostApi\Model\RefundResponse**](../Model/RefundResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postOrdersRefuseByIdV1()`

```php
postOrdersRefuseByIdV1($organization_id, $order_id, $accept_language): \InpostApi\Model\CommandDetails
```

Refuse Order

Refuse and marks Order as refused, so it won't be processed by seller.  **Required scope(s):** `api:orders:write`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = InpostApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new InpostApi\Api\OrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = 0cd818aa-bd74-4094-bc91-14c520cfed62; // string | Organization (shop/brand, org level 2) identifier, which defines context on platform.
$order_id = example-d8ec11ce; // string | Identifier of Order object.
$accept_language = en; // string | A two-letter code of the user's preferred language compliant with ISO 639.

try {
    $result = $apiInstance->postOrdersRefuseByIdV1($organization_id, $order_id, $accept_language);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrdersApi->postOrdersRefuseByIdV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_id** | **string**| Organization (shop/brand, org level 2) identifier, which defines context on platform. | |
| **order_id** | **string**| Identifier of Order object. | |
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

## `refundClaimV1()`

```php
refundClaimV1($organization_id, $order_id, $claim_id, $accept_language, $resolution_description): \InpostApi\Model\SuccessResponse
```

Resolve claim with full refund

Resolve a claim with a full refund. This operation processes a complete refund for the claim and can only be performed once per claim.  **Required scope(s):** `api:orders:write`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = InpostApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new InpostApi\Api\OrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = 0cd818aa-bd74-4094-bc91-14c520cfed62; // string | Organization (shop/brand, org level 2) identifier, which defines context on platform.
$order_id = example-d8ec11ce; // string | Identifier of Order object.
$claim_id = 123e4567-e89b-12d3-a456-426614174000; // string | Unique identifier of the Claim.
$accept_language = en; // string | A two-letter code of the user's preferred language compliant with ISO 639.
$resolution_description = new \InpostApi\Model\ResolutionDescription(); // \InpostApi\Model\ResolutionDescription

try {
    $result = $apiInstance->refundClaimV1($organization_id, $order_id, $claim_id, $accept_language, $resolution_description);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrdersApi->refundClaimV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_id** | **string**| Organization (shop/brand, org level 2) identifier, which defines context on platform. | |
| **order_id** | **string**| Identifier of Order object. | |
| **claim_id** | **string**| Unique identifier of the Claim. | |
| **accept_language** | **string**| A two-letter code of the user&#39;s preferred language compliant with ISO 639. | [optional] |
| **resolution_description** | [**\InpostApi\Model\ResolutionDescription**](../Model/ResolutionDescription.md)|  | [optional] |

### Return type

[**\InpostApi\Model\SuccessResponse**](../Model/SuccessResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `rejectClaimV1()`

```php
rejectClaimV1($organization_id, $order_id, $claim_id, $accept_language, $resolution_description): \InpostApi\Model\SuccessResponse
```

Reject claim

Reject a claim after evaluation. This operation marks the claim as rejected and can only be performed once per claim.  **Required scope(s):** `api:orders:write`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = InpostApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new InpostApi\Api\OrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = 0cd818aa-bd74-4094-bc91-14c520cfed62; // string | Organization (shop/brand, org level 2) identifier, which defines context on platform.
$order_id = example-d8ec11ce; // string | Identifier of Order object.
$claim_id = 123e4567-e89b-12d3-a456-426614174000; // string | Unique identifier of the Claim.
$accept_language = en; // string | A two-letter code of the user's preferred language compliant with ISO 639.
$resolution_description = new \InpostApi\Model\ResolutionDescription(); // \InpostApi\Model\ResolutionDescription

try {
    $result = $apiInstance->rejectClaimV1($organization_id, $order_id, $claim_id, $accept_language, $resolution_description);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrdersApi->rejectClaimV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_id** | **string**| Organization (shop/brand, org level 2) identifier, which defines context on platform. | |
| **order_id** | **string**| Identifier of Order object. | |
| **claim_id** | **string**| Unique identifier of the Claim. | |
| **accept_language** | **string**| A two-letter code of the user&#39;s preferred language compliant with ISO 639. | [optional] |
| **resolution_description** | [**\InpostApi\Model\ResolutionDescription**](../Model/ResolutionDescription.md)|  | [optional] |

### Return type

[**\InpostApi\Model\SuccessResponse**](../Model/SuccessResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `rejectReturnV1()`

```php
rejectReturnV1($organization_id, $return_id, $accept_language): \InpostApi\Model\SuccessResponse
```

Reject Return

Marks Return as Rejected - organization rejects the return request.  **Required scope(s):** `api:orders:write`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = InpostApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new InpostApi\Api\OrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = 0cd818aa-bd74-4094-bc91-14c520cfed62; // string | Organization (shop/brand, org level 2) identifier, which defines context on platform.
$return_id = 'return_id_example'; // string | Unique identifier of the return.
$accept_language = en; // string | A two-letter code of the user's preferred language compliant with ISO 639.

try {
    $result = $apiInstance->rejectReturnV1($organization_id, $return_id, $accept_language);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrdersApi->rejectReturnV1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_id** | **string**| Organization (shop/brand, org level 2) identifier, which defines context on platform. | |
| **return_id** | **string**| Unique identifier of the return. | |
| **accept_language** | **string**| A two-letter code of the user&#39;s preferred language compliant with ISO 639. | [optional] |

### Return type

[**\InpostApi\Model\SuccessResponse**](../Model/SuccessResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

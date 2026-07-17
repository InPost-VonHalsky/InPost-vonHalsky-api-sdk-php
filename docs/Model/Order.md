# # Order

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | UUID identifier of resource. |
**organization_id** | **string** | UUID identifier of resource. |
**created_at** | **\DateTime** | Date Time value. |
**updated_at** | **\DateTime** | Date Time value. | [optional]
**status** | [**\InpostApi\InpostApiModel\OrderStatus**](OrderStatus.md) |  |
**customer** | [**\InpostApi\InpostApiModel\Customer**](Customer.md) |  | [optional]
**invoice** | [**\InpostApi\InpostApiModel\InvoiceDetails**](InvoiceDetails.md) |  | [optional]
**delivery** | [**\InpostApi\InpostApiModel\Delivery**](Delivery.md) |  |
**order_lines** | [**\InpostApi\InpostApiModel\OrderLineItem[]**](OrderLineItem.md) |  |
**final_price** | [**\InpostApi\InpostApiModel\Money**](Money.md) |  |
**payment_details** | [**\InpostApi\InpostApiModel\PaymentDetails**](PaymentDetails.md) |  |
**comment** | **string** |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)

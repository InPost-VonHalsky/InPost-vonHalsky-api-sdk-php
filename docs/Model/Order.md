# # Order

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | String identifier of resource. |
**organization_id** | **string** | UUID identifier of resource. |
**created_at** | **\DateTime** | Date Time value. |
**updated_at** | **\DateTime** | Date Time value. | [optional]
**status** | [**\InpostApi\Model\OrderStatus**](OrderStatus.md) |  |
**customer** | [**\InpostApi\Model\Customer**](Customer.md) |  | [optional]
**invoice** | [**\InpostApi\Model\InvoiceDetails**](InvoiceDetails.md) |  | [optional]
**delivery** | [**\InpostApi\Model\Delivery**](Delivery.md) |  |
**order_lines** | [**\InpostApi\Model\OrderLineItem[]**](OrderLineItem.md) |  |
**final_price** | [**\InpostApi\Model\Money**](Money.md) | Final price of the order including all discounts and delivery costs. |
**base_price** | [**\InpostApi\Model\Money**](Money.md) | Base price of the order without discounts and delivery costs. |
**promotion_price** | [**\InpostApi\Model\Money**](Money.md) | Price of the order with promotion applied without delivery costs. | [optional]
**payment_details** | [**\InpostApi\Model\PaymentDetails**](PaymentDetails.md) |  |
**comment** | **string** |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)

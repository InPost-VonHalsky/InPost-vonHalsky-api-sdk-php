# # ModelReturn

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | UUID identifier of resource. |
**order_id** | **string** | UUID identifier of resource. |
**client** | [**\InpostApi\InpostApiModel\Client**](Client.md) |  |
**return_reason** | [**\InpostApi\InpostApiModel\ReturnReason**](ReturnReason.md) |  | [optional]
**order_lines** | [**\InpostApi\InpostApiModel\LineItem[]**](LineItem.md) | Order line items. |
**tracking_number** | **string** | Tracking number identifier. | [optional]
**original_tracking_number** | **string** | Tracking number identifier. | [optional]
**status** | [**\InpostApi\InpostApiModel\ReturnStatus**](ReturnStatus.md) |  |
**created_at** | **\DateTime** | Date Time value. |
**expires_at** | **\DateTime** | Date Time value. | [optional]
**delivered_at** | **\DateTime** | Date Time value. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)

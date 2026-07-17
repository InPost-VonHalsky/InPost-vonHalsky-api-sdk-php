# # ClaimResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**claim_id** | **string** | UUID identifier of resource. |
**created_at** | **\DateTime** | Date Time value. |
**claimant** | [**\InpostApi\InpostApiModel\Claimant**](Claimant.md) |  |
**expires_at** | **\DateTime** | Date Time value. |
**order_lines** | [**\InpostApi\InpostApiModel\LineItem[]**](LineItem.md) |  |
**related_order** | [**\InpostApi\InpostApiModel\ClaimOrderDetails**](ClaimOrderDetails.md) |  |
**resolution** | [**\InpostApi\InpostApiModel\ClaimResolution**](ClaimResolution.md) |  | [optional]
**specification** | [**\InpostApi\InpostApiModel\ClaimSpecification**](ClaimSpecification.md) |  |
**state** | [**\InpostApi\InpostApiModel\ClaimState**](ClaimState.md) |  |
**updated_at** | **\DateTime** | Date Time value. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)

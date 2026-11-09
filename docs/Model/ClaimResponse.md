# # ClaimResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**claim_id** | **string** | UUID identifier of resource. |
**created_at** | **\DateTime** | Date Time value. |
**claimant** | [**\InpostApi\Model\Claimant**](Claimant.md) |  |
**expires_at** | **\DateTime** | Date Time value. |
**order_lines** | [**\InpostApi\Model\LineItem[]**](LineItem.md) |  |
**related_order** | [**\InpostApi\Model\ClaimOrderDetails**](ClaimOrderDetails.md) |  |
**resolution** | [**\InpostApi\Model\ClaimResolution**](ClaimResolution.md) |  | [optional]
**specification** | [**\InpostApi\Model\ClaimSpecification**](ClaimSpecification.md) |  |
**state** | [**\InpostApi\Model\ClaimState**](ClaimState.md) |  |
**updated_at** | **\DateTime** | Date Time value. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)

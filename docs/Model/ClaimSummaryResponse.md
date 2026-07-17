# # ClaimSummaryResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**claim_id** | **string** | UUID identifier of resource. |
**created_at** | **\DateTime** | Date Time value. |
**expires_at** | **\DateTime** | Date Time value. |
**related_order** | [**\InpostApi\InpostApiModel\ClaimOrderDetails**](ClaimOrderDetails.md) |  |
**state** | [**\InpostApi\InpostApiModel\ClaimState**](ClaimState.md) |  |
**claimant** | [**\InpostApi\InpostApiModel\ClaimantSummary**](ClaimantSummary.md) |  | [optional]
**resolution** | [**\InpostApi\InpostApiModel\ClaimResolution**](ClaimResolution.md) |  | [optional]
**specification** | [**\InpostApi\InpostApiModel\ClaimSpecificationSummary**](ClaimSpecificationSummary.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)

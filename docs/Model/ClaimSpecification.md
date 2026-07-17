# # ClaimSpecification

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**claim_type** | [**\InpostApi\InpostApiModel\ClaimType**](ClaimType.md) |  |
**issue_description** | **string** | Detailed description of the issue leading to the claim. |
**requested_resolution** | [**\InpostApi\InpostApiModel\RequestedResolution**](RequestedResolution.md) |  |
**partial_refund_percent** | **float** | Requested percentage of refund amount. Only applicable when requestedResolution is PARTIAL_REFUND. | [optional]
**supporting_documents** | [**\InpostApi\InpostApiModel\Attachment[]**](Attachment.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)

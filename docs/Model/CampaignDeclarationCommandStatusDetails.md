# # CampaignDeclarationCommandStatusDetails

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**command_id** | **string** | UUID identifier of resource. |
**status** | [**\InpostApi\Model\CommandStatus**](CommandStatus.md) |  |
**declaration_id** | **string** | Id of the created declaration record. Present only when status is SUCCESS. | [optional]
**errors** | [**\InpostApi\Model\CommandError[]**](CommandError.md) | List of errors that caused the Command to fail. Present only when status is FAILURE. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)

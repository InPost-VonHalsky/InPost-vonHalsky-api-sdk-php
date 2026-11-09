# # CommandError

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**field_name** | **string** | Name of the field that the error relates to. Absent when the error is general and not related to a specific field. | [optional]
**element_id** | **string** | UUID of the specific element within an array field (e.g. product.attributes, price.deposits) that caused the error. Absent when fieldName does not refer to such an array. | [optional]
**message** | **string** | Human-readable description of the error. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)

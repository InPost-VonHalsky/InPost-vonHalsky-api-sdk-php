# # CategoryDetailed

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | UUID identifier of resource. |
**leaf** | **bool** | Describes is this element is leaf (last element in category tree, which doesn&#39;t contain any children). |
**name** | **string** | Category name translated for requested locale (Accept-Language). |
**description** | **string** | An Category Description translated for requested locale (Accept-Language). |
**metadata** | **array<string,string>** | Map entry with string-key and string-value. | [optional]
**relations** | [**\InpostApi\InpostApiModel\CategoryRelationTuple[]**](CategoryRelationTuple.md) |  | [optional]
**children** | [**\InpostApi\InpostApiModel\CategoryDetailed[]**](CategoryDetailed.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)

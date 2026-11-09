# # AttributeDefinition

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | UUID identifier of resource. |
**type** | [**\InpostApi\Model\AttributeType**](AttributeType.md) |  |
**lang** | **string** | Language code of mix ISO 639 and ISO 3166. It&#39;s also possible in some circumstances that Country is marked as wildcard if its value doesn&#39;t matter, eg.: &#x60;en_*&#x60; or just &#x60;en&#x60;.  It&#39;s also possible to pass &#x60;null&#x60;, if sent data are general/universal: language and country doesn&#39;t matter (e.g. Producer name, which is might be same for all languages). | [optional]
**expected_value** | [**\InpostApi\Model\AttributeExpectedValueType**](AttributeExpectedValueType.md) |  |
**name** | **string** | Attribute name translated for requested locale (Accept-Language). |
**description** | **string** | An Attribute Definition Description translated for requested locale (Accept-Language). | [optional]
**dictionary** | [**\InpostApi\Model\AttributeDictionary**](AttributeDictionary.md) |  | [optional]
**unit_of_measure_details** | [**\InpostApi\Model\AttributeUnitOfMeasureDetails**](AttributeUnitOfMeasureDetails.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)

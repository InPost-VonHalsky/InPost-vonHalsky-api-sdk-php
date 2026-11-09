# # Manufacturer

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **string** |  |
**email** | **string** |  |
**phone** | **string** | Phone number with country prefix starting with &#x60;+&#x60; sign. | [optional]
**country_code** | **string** | Country code in ISO 3166-1 alpha-2 format. | [optional]
**address** | [**\InpostApi\Model\Address**](Address.md) |  | [optional]
**unstructured_address** | **string** | Address, pre formated, defined as single string. | [optional]
**responsible_person** | **string** | Responsible person. Deprecated - use responsiblePersonDetails instead. | [optional]
**responsible_person_details** | [**\InpostApi\Model\ResponsiblePerson**](ResponsiblePerson.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)

# # ProductHint

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**product_id** | **string** | UUID identifier of resource. | [optional]
**name** | **string** | Short name of the product. | [optional]
**description** | **string** | Product description. | [optional]
**brand** | **string** | Product brand. | [optional]
**category_id** | **string** | UUID identifier of resource. | [optional]
**attributes** | [**\InpostApi\InpostApiModel\AttributeValue[]**](AttributeValue.md) | Defined Values of Attributes related to Category. | [optional]
**model** | **string** |  | [optional]
**super_model** | **string** |  | [optional]
**manufacturer_product_number** | **string** | Manufacturer Product Number. | [optional]
**ean** | **string** | European Article Number / International Article Number. It can be assigned if not previously set. Once assigned, its value is fixed and cannot be changed. | [optional]
**dimension** | [**\InpostApi\InpostApiModel\Dimension**](Dimension.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)

# # ProductInfo

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **string** | Short name of the product. |
**description** | **string** | Product description. |
**brand** | **string** | Product brand. |
**category_id** | **string** | UUID identifier of resource. |
**attributes** | [**\InpostApi\Model\AttributeValue[]**](AttributeValue.md) | Defined Values of Attributes related to Category. | [optional]
**model** | **string** |  | [optional]
**super_model** | **string** |  | [optional]
**sku** | **string** | Stock Keeping Unit. | [optional]
**manufacturer_product_number** | **string** | Manufacturer Product Number. | [optional]
**ean** | **string** | European Article Number / International Article Number. It can be assigned if not previously set. Once assigned, its value is fixed and cannot be changed. | [optional]
**dimension** | [**\InpostApi\Model\Dimension**](Dimension.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)

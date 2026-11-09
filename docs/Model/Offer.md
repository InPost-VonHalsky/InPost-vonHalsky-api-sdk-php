# # Offer

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | UUID identifier of resource. |
**status** | [**\InpostApi\Model\OfferStatus**](OfferStatus.md) |  |
**external_id** | **string** | String identifier of resource. | [optional]
**product** | [**\InpostApi\Model\ProductInfo**](ProductInfo.md) |  |
**stock** | [**\InpostApi\Model\Stock**](Stock.md) |  |
**price** | [**\InpostApi\Model\OfferPriceTag**](OfferPriceTag.md) |  |
**promotion** | [**\InpostApi\Model\Promotion**](Promotion.md) | Upcoming or currently active promotion for the offer. Absent once the promotion has ended or been cancelled. | [optional] [readonly]
**gpsr** | [**\InpostApi\Model\GpsrInfo**](GpsrInfo.md) |  | [optional]
**shipping_time** | [**\InpostApi\Model\ShippingTime**](ShippingTime.md) |  | [optional]
**affiliation_product_url** | **string** | Affiliation Product URL. | [optional]
**images** | [**\InpostApi\Model\Image[]**](Image.md) |  | [optional]
**post_sale** | [**\InpostApi\Model\PostSale**](PostSale.md) |  | [optional]
**shipping_rate_id** | **string** | Identifier of the shipping-rates set used to determine delivery options for this Offer. | [optional]
**features** | [**\InpostApi\Model\Features**](Features.md) |  | [optional]
**price_program** | [**\InpostApi\Model\PriceProgram**](PriceProgram.md) |  | [optional]
**created_at** | **\DateTime** | Date Time value. | [optional]
**updated_at** | **\DateTime** | Date Time value. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)

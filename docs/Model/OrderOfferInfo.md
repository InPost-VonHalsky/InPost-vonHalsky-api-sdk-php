# # OrderOfferInfo

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**offer_id** | **string** | UUID identifier of resource. |
**product** | [**\InpostApi\Model\OrderProduct**](OrderProduct.md) |  |
**price** | [**\InpostApi\Model\Money**](Money.md) | Deprecated in favor of finalPrice. Product&#39;s price including discounts if they exist (is equal to basePrice if there is no promotion or price program). Includes both promotion and price program discounts. |
**final_price** | [**\InpostApi\Model\Money**](Money.md) | Product&#39;s price including discounts if they exist (is equal to basePrice if there is no promotion or price program). Includes both promotion and price program discounts. |
**base_price** | [**\InpostApi\Model\Money**](Money.md) | Product&#39;s price without discounts. |
**promotion_price** | [**\InpostApi\Model\Money**](Money.md) | Product&#39;s price with promotion applied. | [optional]
**program_price** | [**\InpostApi\Model\OrderOfferInfoProgramPrice**](OrderOfferInfoProgramPrice.md) |  | [optional]
**external_id** | **string** | String identifier of resource. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)

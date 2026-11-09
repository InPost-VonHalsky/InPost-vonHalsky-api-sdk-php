# # OfferPriceTag

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**gross_price** | [**\InpostApi\Model\Money**](Money.md) | Regular gross price of the item, excluding any active promotion. |
**promotion_price** | [**\InpostApi\Model\Money**](Money.md) | Discounted gross price while the offer&#39;s promotion is active. Absent when there is no promotion. | [optional] [readonly]
**final_price** | [**\InpostApi\Model\Money**](Money.md) | Final gross price displayed to buyers, after applying any active promotion or Attractive Price Program discount. | [optional] [readonly]
**deposits** | [**\InpostApi\Model\DepositPosition[]**](DepositPosition.md) | Product related deposits. | [optional]
**tax_rate_info** | **string** | Tax rate information. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)

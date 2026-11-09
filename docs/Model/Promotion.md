# # Promotion

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**start** | **\DateTime** | DateTime when the promotion starts. |
**end** | **\DateTime** | DateTime when the promotion ends. |
**status** | [**\InpostApi\Model\PromotionStatus**](PromotionStatus.md) |  |
**mode** | [**\InpostApi\Model\PromotionMode**](PromotionMode.md) | Defines how value is interpreted: a percentage discount, a fixed final price, or a discount amount. |
**value** | **float** | Promotion value, interpreted according to mode: a percentage discount, a fixed final price, or a discount amount. |
**is_visible** | **bool** | Whether the promotion is displayed to buyers as a discount (e.g. crossed-out regular price). When false, promotionPrice is still charged but shown as a regular price, typically to comply with Omnibus Directive pricing rules. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)

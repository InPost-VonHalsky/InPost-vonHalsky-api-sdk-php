# # Delivery

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**delivery_type** | [**\InpostApi\Model\DeliveryMethodType**](DeliveryMethodType.md) |  |
**parcels** | [**\InpostApi\Model\Parcel[]**](Parcel.md) |  |
**name** | **string** |  | [optional]
**delivery_point** | **string** |  | [optional]
**address** | [**\InpostApi\Model\Address**](Address.md) |  | [optional]
**email** | **string** |  | [optional]
**phone_number** | **string** | Phone number with country prefix starting with &#x60;+&#x60; sign. | [optional]
**price** | [**\InpostApi\Model\Money**](Money.md) |  | [optional]
**expected_delivery_date** | **\DateTime** | Date Time value. | [optional]
**courier_note** | **string** | Additional information for the courier provided by the customer. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)

# OpenAPIClient-php

Welcome to the Inpost VonHalsky API documentation.
This API serves as a powerful intermediary between merchants and Inpost VonHalsky shopping
platform, enabling seamless integration and management of e-commerce operations.

API is specifically designed to be used by integration platforms, which are next used
by sellers. Within API you will be able to create Offer and publish it on Inpost VonHalsky
Platform.

## Authentication
Access to API operations is restricted only for known integrators. For gathering
access token please refer to agreement policy manager.

## Language support
API by default provides messages and content in English (`en`) language.
You can manipulate this behavior by providing `Accept-Language` HTTP Header.

For incoming data which are lang-specific there are mostly defined separate
lang-related fields, which needs to be used for pass valid request.

## Key features
### Category Management
* List all available Categories within platform.
* Retrieve detailed information about specific Category and its Attributes.

### Offer Management
* Create (match) product Offers to showcase within platform.
* Update existing Offers to reflect changes in pricing or stock availability.
* Close or reopen Offers that are no longer available or relevant.

### Order Management
* List all Orders received through platform.
* Retrieve detailed information about individual Order.
* Pass invoices or shipments information to Offer.

## References
Please also read our Integration Guidelines which is separate document, it
describes common scenarios using this API.

This library is built based on the API documentation available at
[https://inpsa-api-portal.inpost-group.com/](https://inpsa-api-portal.inpost-group.com/).

## Support
In case of any problems or questions regarding this SDK or the API, please
contact us at [apiportal@inpost.pl](mailto:apiportal@inpost.pl).

## Related projects
The InPost von Halsky e-commerce modules use this SDK for communication with the API:

* Magento 2: [https://github.com/InPost-VonHalsky/InPost-vonHalsky-Magento](https://github.com/InPost-VonHalsky/InPost-vonHalsky-Magento) (uses SDK `^1.0`)
* PrestaShop 8: [https://github.com/InPost-VonHalsky/InPost-vonHalsky-PrestaShop](https://github.com/InPost-VonHalsky/InPost-vonHalsky-PrestaShop) (uses SDK `^2.0`)

## Versioning and maintenance policy
Each API operation (endpoint) is versioned with specific `/v<version>` path prefix,
for e.g.: `/v1/categories`, which increases only on breaking changes.

To familiarize yourself with the maintenance policy and details of the versioning rules, go to the API Portal,
Versioning and Maintenance section.

For more information, please visit [https://inpsa-api-portal.inpost-group.com/](https://inpsa-api-portal.inpost-group.com/).

## Installation & Usage

### Requirements

PHP 8.1 and later.

### Composer

Install the bindings via [Composer](https://getcomposer.org/):

```
composer require inpostapi/inpost-vonhalsky-api-sdk-php:^2.0
```

Version 2.0 contains breaking changes compared to 1.x, see [CHANGELOG.md](CHANGELOG.md).
Release 1.0.0 stays available for existing integrations.

### Manual Installation

Download the files and include `autoload.php`:

```php
<?php
require_once('/path/to/OpenAPIClient-php/vendor/autoload.php');
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



// Configure Bearer (JWT) authorization: bearerAuth
$config = InpostApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new InpostApi\Api\CategoriesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$category_id = d8ec11ce-12ba-4fb7-be9a-249e679f4e67; // string | Category ID identifier as path param.
$accept_language = en; // string | A two-letter code of the user's preferred language compliant with ISO 639.

try {
    $result = $apiInstance->getCategoriesAttributesByCategoryIdV1($category_id, $accept_language);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CategoriesApi->getCategoriesAttributesByCategoryIdV1: ', $e->getMessage(), PHP_EOL;
}

```

## API Endpoints

All URIs are relative to *https://stage-api.inpost-group.com/inpsa*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*CategoriesApi* | [**getCategoriesAttributesByCategoryIdV1**](docs/Api/CategoriesApi.md#getcategoriesattributesbycategoryidv1) | **GET** /v1/categories/{categoryId}/attributes | Get Category Attributes
*CategoriesApi* | [**getCategoriesByIdV1**](docs/Api/CategoriesApi.md#getcategoriesbyidv1) | **GET** /v1/categories/{categoryId} | Get Category details
*CategoriesApi* | [**getCategoriesV1**](docs/Api/CategoriesApi.md#getcategoriesv1) | **GET** /v1/categories | Browse Category tree
*OfferAttachmentsApi* | [**deleteOffersAttachmentsByOfferIdAndAttachmentIdV1**](docs/Api/OfferAttachmentsApi.md#deleteoffersattachmentsbyofferidandattachmentidv1) | **DELETE** /v1/organizations/{organizationId}/offers/{offerId}/attachments/{attachmentId} | Delete Offer Attachment
*OfferAttachmentsApi* | [**getOffersAttachmentsByOfferIdAndAttachmentIdV1**](docs/Api/OfferAttachmentsApi.md#getoffersattachmentsbyofferidandattachmentidv1) | **GET** /v1/organizations/{organizationId}/offers/{offerId}/attachments/{attachmentId} | Download Offer Attachment
*OfferAttachmentsApi* | [**getOffersAttachmentsByOfferIdV1**](docs/Api/OfferAttachmentsApi.md#getoffersattachmentsbyofferidv1) | **GET** /v1/organizations/{organizationId}/offers/{offerId}/attachments | Get Offer Attachments
*OfferAttachmentsApi* | [**postOffersAttachmentsByOfferIdV1**](docs/Api/OfferAttachmentsApi.md#postoffersattachmentsbyofferidv1) | **POST** /v1/organizations/{organizationId}/offers/{offerId}/attachments | Create Attachment for Offer
*OfferAttachmentsApi* | [**putAttachmentsPriorityByOfferIdV1**](docs/Api/OfferAttachmentsApi.md#putattachmentsprioritybyofferidv1) | **PUT** /v1/organizations/{organizationId}/offers/{offerId}/attachments/priority | Change display order of offer attachments.
*OffersApi* | [**getOffersByIdV1**](docs/Api/OffersApi.md#getoffersbyidv1) | **GET** /v1/organizations/{organizationId}/offers/{offerId} | Get Offer details
*OffersApi* | [**getOffersCommandsByIdV1**](docs/Api/OffersApi.md#getofferscommandsbyidv1) | **GET** /v1/organizations/{organizationId}/offers/commands/{commandId} | Offers Command Status
*OffersApi* | [**getOffersDepositTypesV1**](docs/Api/OffersApi.md#getoffersdeposittypesv1) | **GET** /v1/offers/deposit-types | List Deposit Types
*OffersApi* | [**getOffersEventsV1**](docs/Api/OffersApi.md#getofferseventsv1) | **GET** /v1/organizations/{organizationId}/offers/events | Lists Offers Events
*OffersApi* | [**getOffersHintV1**](docs/Api/OffersApi.md#getoffershintv1) | **GET** /v1/organizations/{organizationId}/offers/hint | Hint product info, gpsr info and category
*OffersApi* | [**getOffersV1**](docs/Api/OffersApi.md#getoffersv1) | **GET** /v1/organizations/{organizationId}/offers | Lists Offers
*OffersApi* | [**patchOfferAttributesByIdV1**](docs/Api/OffersApi.md#patchofferattributesbyidv1) | **PATCH** /v1/organizations/{organizationId}/offers/{offerId}/attributes | Patch Offer attributes
*OffersApi* | [**patchOffersByIdV1**](docs/Api/OffersApi.md#patchoffersbyidv1) | **PATCH** /v1/organizations/{organizationId}/offers/{offerId} | Partially update Offer
*OffersApi* | [**patchUpdateOfferPricesBatchV1**](docs/Api/OffersApi.md#patchupdateofferpricesbatchv1) | **PATCH** /v1/organizations/{organizationId}/offers/prices | Batch Update Offer Price
*OffersApi* | [**patchUpdateOfferStocksBatchV1**](docs/Api/OffersApi.md#patchupdateofferstocksbatchv1) | **PATCH** /v1/organizations/{organizationId}/offers/stocks | Batch Update Offer Stock
*OffersApi* | [**postBatchOffersV1**](docs/Api/OffersApi.md#postbatchoffersv1) | **POST** /v1/organizations/{organizationId}/offers/batch | Batch Offer creation
*OffersApi* | [**postOffersCloseByOfferIdV1**](docs/Api/OffersApi.md#postoffersclosebyofferidv1) | **POST** /v1/organizations/{organizationId}/offers/{offerId}/close | Close Offer
*OffersApi* | [**postOffersReopenByOfferIdV1**](docs/Api/OffersApi.md#postoffersreopenbyofferidv1) | **POST** /v1/organizations/{organizationId}/offers/{offerId}/reopen | Reopen Offer
*OffersApi* | [**postOffersV1**](docs/Api/OffersApi.md#postoffersv1) | **POST** /v1/organizations/{organizationId}/offers | Create new Offer
*OrdersApi* | [**acceptReturnV1**](docs/Api/OrdersApi.md#acceptreturnv1) | **POST** /v1/organizations/{organizationId}/returns/{returnId}/accept | Accept Return
*OrdersApi* | [**getClaimByIdV1**](docs/Api/OrdersApi.md#getclaimbyidv1) | **GET** /v1/organizations/{organizationId}/orders/{orderId}/claims/{claimId} | Get single claim details
*OrdersApi* | [**getClaimsForOrganizationV1**](docs/Api/OrdersApi.md#getclaimsfororganizationv1) | **GET** /v1/organizations/{organizationId}/claims | Get list of organization claims
*OrdersApi* | [**getOrdersByIdV1**](docs/Api/OrdersApi.md#getordersbyidv1) | **GET** /v1/organizations/{organizationId}/orders/{orderId} | Get Order details
*OrdersApi* | [**getOrdersClaimTypesDictionaryV1**](docs/Api/OrdersApi.md#getordersclaimtypesdictionaryv1) | **GET** /v1/orders/claim-types | Get claim types dictionary
*OrdersApi* | [**getOrdersCommandsByIdV1**](docs/Api/OrdersApi.md#getorderscommandsbyidv1) | **GET** /v1/organizations/{organizationId}/orders/commands/{commandId} | Orders Command Status
*OrdersApi* | [**getOrdersDeliveryMethodsV1**](docs/Api/OrdersApi.md#getordersdeliverymethodsv1) | **GET** /v1/orders/delivery-methods | List Delivery Methods
*OrdersApi* | [**getOrdersDeliveryMethodsV2**](docs/Api/OrdersApi.md#getordersdeliverymethodsv2) | **GET** /v2/orders/delivery-methods | List Delivery Methods
*OrdersApi* | [**getOrdersEventsV1**](docs/Api/OrdersApi.md#getorderseventsv1) | **GET** /v1/organizations/{organizationId}/orders/events | Lists Orders Events
*OrdersApi* | [**getOrdersV1**](docs/Api/OrdersApi.md#getordersv1) | **GET** /v1/organizations/{organizationId}/orders | Lists Orders
*OrdersApi* | [**getReturnByIdV1**](docs/Api/OrdersApi.md#getreturnbyidv1) | **GET** /v1/organizations/{organizationId}/returns/{returnId} | Get single return details
*OrdersApi* | [**getReturnsByOrderIdV1**](docs/Api/OrdersApi.md#getreturnsbyorderidv1) | **GET** /v1/organizations/{organizationId}/orders/{orderId}/returns | Get returns for specific order
*OrdersApi* | [**getReturnsForOrganizationV1**](docs/Api/OrdersApi.md#getreturnsfororganizationv1) | **GET** /v1/organizations/{organizationId}/returns | Get all returns for organization
*OrdersApi* | [**partialRefundClaimV1**](docs/Api/OrdersApi.md#partialrefundclaimv1) | **POST** /v1/organizations/{organizationId}/orders/{orderId}/claims/{claimId}/partial-refund | Resolve claim with partial refund
*OrdersApi* | [**postOrdersAcceptByIdV1**](docs/Api/OrdersApi.md#postordersacceptbyidv1) | **POST** /v1/organizations/{organizationId}/orders/{orderId}/accept | Accept Order
*OrdersApi* | [**postOrdersRefundByOrderIdV1**](docs/Api/OrdersApi.md#postordersrefundbyorderidv1) | **POST** /v1/organizations/{organizationId}/orders/{orderId}/refund | Refund Order payment
*OrdersApi* | [**postOrdersRefuseByIdV1**](docs/Api/OrdersApi.md#postordersrefusebyidv1) | **POST** /v1/organizations/{organizationId}/orders/{orderId}/refuse | Refuse Order
*OrdersApi* | [**refundClaimV1**](docs/Api/OrdersApi.md#refundclaimv1) | **POST** /v1/organizations/{organizationId}/orders/{orderId}/claims/{claimId}/refund | Resolve claim with full refund
*OrdersApi* | [**rejectClaimV1**](docs/Api/OrdersApi.md#rejectclaimv1) | **POST** /v1/organizations/{organizationId}/orders/{orderId}/claims/{claimId}/reject | Reject claim
*OrdersApi* | [**rejectReturnV1**](docs/Api/OrdersApi.md#rejectreturnv1) | **POST** /v1/organizations/{organizationId}/returns/{returnId}/reject | Reject Return
*OrganizationsApi* | [**getOrganizationsV1**](docs/Api/OrganizationsApi.md#getorganizationsv1) | **GET** /v1/organizations | Browse Organizations
*PriceProgramApi* | [**getCampaignDeclarationsV1**](docs/Api/PriceProgramApi.md#getcampaigndeclarationsv1) | **GET** /v1/organizations/{organizationId}/campaigns/declarations | Lists current Offer declarations of an Organization
*PriceProgramApi* | [**getCampaignsCommandsByIdV1**](docs/Api/PriceProgramApi.md#getcampaignscommandsbyidv1) | **GET** /v1/organizations/{organizationId}/campaigns/commands/{commandId} | Price Program Declaration Command Status
*PriceProgramApi* | [**getOfferCampaignDeclarationsV1**](docs/Api/PriceProgramApi.md#getoffercampaigndeclarationsv1) | **GET** /v1/organizations/{organizationId}/offers/{offerId}/campaigns/declarations | Returns the current declarations for an Offer
*PriceProgramApi* | [**postCampaignDeclarationsV1**](docs/Api/PriceProgramApi.md#postcampaigndeclarationsv1) | **POST** /v1/organizations/{organizationId}/campaigns/declarations | Sets price program declarations for a batch of Offers

## Models

- [Address](docs/Model/Address.md)
- [Attachment](docs/Model/Attachment.md)
- [AttachmentInfo](docs/Model/AttachmentInfo.md)
- [AttachmentPriority](docs/Model/AttachmentPriority.md)
- [AttachmentType](docs/Model/AttachmentType.md)
- [Attachments](docs/Model/Attachments.md)
- [AttributeDefinition](docs/Model/AttributeDefinition.md)
- [AttributeDictionary](docs/Model/AttributeDictionary.md)
- [AttributeDictionaryOption](docs/Model/AttributeDictionaryOption.md)
- [AttributeExpectedValueType](docs/Model/AttributeExpectedValueType.md)
- [AttributeRemoveOperation](docs/Model/AttributeRemoveOperation.md)
- [AttributeType](docs/Model/AttributeType.md)
- [AttributeUnitOfMeasureDetails](docs/Model/AttributeUnitOfMeasureDetails.md)
- [AttributeUpsertOperation](docs/Model/AttributeUpsertOperation.md)
- [AttributeValue](docs/Model/AttributeValue.md)
- [CampaignDeclarationCommandDetails](docs/Model/CampaignDeclarationCommandDetails.md)
- [CampaignDeclarationCommandStatusDetails](docs/Model/CampaignDeclarationCommandStatusDetails.md)
- [Category](docs/Model/Category.md)
- [CategoryDetailed](docs/Model/CategoryDetailed.md)
- [CategoryRelationTuple](docs/Model/CategoryRelationTuple.md)
- [CategoryRelationType](docs/Model/CategoryRelationType.md)
- [ClaimListResponse](docs/Model/ClaimListResponse.md)
- [ClaimOrderDetails](docs/Model/ClaimOrderDetails.md)
- [ClaimResolution](docs/Model/ClaimResolution.md)
- [ClaimResponse](docs/Model/ClaimResponse.md)
- [ClaimSort](docs/Model/ClaimSort.md)
- [ClaimSpecification](docs/Model/ClaimSpecification.md)
- [ClaimSpecificationSummary](docs/Model/ClaimSpecificationSummary.md)
- [ClaimState](docs/Model/ClaimState.md)
- [ClaimSummaryResponse](docs/Model/ClaimSummaryResponse.md)
- [ClaimType](docs/Model/ClaimType.md)
- [ClaimTypes](docs/Model/ClaimTypes.md)
- [Claimant](docs/Model/Claimant.md)
- [ClaimantSummary](docs/Model/ClaimantSummary.md)
- [ClaimsAttachmentType](docs/Model/ClaimsAttachmentType.md)
- [Client](docs/Model/Client.md)
- [CommandDetails](docs/Model/CommandDetails.md)
- [CommandError](docs/Model/CommandError.md)
- [CommandStatus](docs/Model/CommandStatus.md)
- [ComplaintPolicy](docs/Model/ComplaintPolicy.md)
- [Customer](docs/Model/Customer.md)
- [DeclaredParticipationMode](docs/Model/DeclaredParticipationMode.md)
- [Delivery](docs/Model/Delivery.md)
- [DeliveryMethod](docs/Model/DeliveryMethod.md)
- [DeliveryMethodType](docs/Model/DeliveryMethodType.md)
- [DepositLabel](docs/Model/DepositLabel.md)
- [DepositPosition](docs/Model/DepositPosition.md)
- [DepositType](docs/Model/DepositType.md)
- [Dimension](docs/Model/Dimension.md)
- [ErrorDetail](docs/Model/ErrorDetail.md)
- [ErrorResponse](docs/Model/ErrorResponse.md)
- [Features](docs/Model/Features.md)
- [GpsrInfo](docs/Model/GpsrInfo.md)
- [Hint](docs/Model/Hint.md)
- [Hints](docs/Model/Hints.md)
- [Image](docs/Model/Image.md)
- [InvoiceDetails](docs/Model/InvoiceDetails.md)
- [LineItem](docs/Model/LineItem.md)
- [Manual](docs/Model/Manual.md)
- [Manufacturer](docs/Model/Manufacturer.md)
- [ModelReturn](docs/Model/ModelReturn.md)
- [Money](docs/Model/Money.md)
- [Offer](docs/Model/Offer.md)
- [OfferAttributesPatch](docs/Model/OfferAttributesPatch.md)
- [OfferAttributesPatchOperationsInner](docs/Model/OfferAttributesPatchOperationsInner.md)
- [OfferCampaignDeclarationProposal](docs/Model/OfferCampaignDeclarationProposal.md)
- [OfferCampaignDeclarations](docs/Model/OfferCampaignDeclarations.md)
- [OfferCampaignDeclarationsList](docs/Model/OfferCampaignDeclarationsList.md)
- [OfferCommandDetails](docs/Model/OfferCommandDetails.md)
- [OfferCommandStatusDetails](docs/Model/OfferCommandStatusDetails.md)
- [OfferCreated](docs/Model/OfferCreated.md)
- [OfferDetails](docs/Model/OfferDetails.md)
- [OfferEvent](docs/Model/OfferEvent.md)
- [OfferEventData](docs/Model/OfferEventData.md)
- [OfferEventType](docs/Model/OfferEventType.md)
- [OfferInfo](docs/Model/OfferInfo.md)
- [OfferMetadata](docs/Model/OfferMetadata.md)
- [OfferParticipationDeclaration](docs/Model/OfferParticipationDeclaration.md)
- [OfferPatch](docs/Model/OfferPatch.md)
- [OfferPricePatchItem](docs/Model/OfferPricePatchItem.md)
- [OfferPriceTag](docs/Model/OfferPriceTag.md)
- [OfferProposal](docs/Model/OfferProposal.md)
- [OfferSort](docs/Model/OfferSort.md)
- [OfferStatus](docs/Model/OfferStatus.md)
- [OfferStockPatchItem](docs/Model/OfferStockPatchItem.md)
- [Offers](docs/Model/Offers.md)
- [OffersDepositTypes](docs/Model/OffersDepositTypes.md)
- [OffersEvents](docs/Model/OffersEvents.md)
- [Order](docs/Model/Order.md)
- [OrderEvent](docs/Model/OrderEvent.md)
- [OrderEventData](docs/Model/OrderEventData.md)
- [OrderEventType](docs/Model/OrderEventType.md)
- [OrderLineItem](docs/Model/OrderLineItem.md)
- [OrderOfferInfo](docs/Model/OrderOfferInfo.md)
- [OrderOfferInfoProgramPrice](docs/Model/OrderOfferInfoProgramPrice.md)
- [OrderPaymentStatus](docs/Model/OrderPaymentStatus.md)
- [OrderProduct](docs/Model/OrderProduct.md)
- [OrderSort](docs/Model/OrderSort.md)
- [OrderStatus](docs/Model/OrderStatus.md)
- [Orders](docs/Model/Orders.md)
- [OrdersEvents](docs/Model/OrdersEvents.md)
- [Organization](docs/Model/Organization.md)
- [OrganizationParent](docs/Model/OrganizationParent.md)
- [PackageStatus](docs/Model/PackageStatus.md)
- [Page](docs/Model/Page.md)
- [Parcel](docs/Model/Parcel.md)
- [Payment](docs/Model/Payment.md)
- [PaymentDetails](docs/Model/PaymentDetails.md)
- [PaymentType](docs/Model/PaymentType.md)
- [PostSale](docs/Model/PostSale.md)
- [PriceProgram](docs/Model/PriceProgram.md)
- [PriceTag](docs/Model/PriceTag.md)
- [Product](docs/Model/Product.md)
- [ProductHint](docs/Model/ProductHint.md)
- [ProductInfo](docs/Model/ProductInfo.md)
- [ProductInfoPatch](docs/Model/ProductInfoPatch.md)
- [ProductInfoProposal](docs/Model/ProductInfoProposal.md)
- [Promotion](docs/Model/Promotion.md)
- [PromotionMode](docs/Model/PromotionMode.md)
- [PromotionStatus](docs/Model/PromotionStatus.md)
- [RefundRequest](docs/Model/RefundRequest.md)
- [RefundResponse](docs/Model/RefundResponse.md)
- [RefundStatus](docs/Model/RefundStatus.md)
- [RejectionReason](docs/Model/RejectionReason.md)
- [RequestedClaimState](docs/Model/RequestedClaimState.md)
- [RequestedResolution](docs/Model/RequestedResolution.md)
- [ResolutionDescription](docs/Model/ResolutionDescription.md)
- [ResolutionQuery](docs/Model/ResolutionQuery.md)
- [ResponsiblePerson](docs/Model/ResponsiblePerson.md)
- [ReturnList](docs/Model/ReturnList.md)
- [ReturnPolicy](docs/Model/ReturnPolicy.md)
- [ReturnReason](docs/Model/ReturnReason.md)
- [ReturnStatus](docs/Model/ReturnStatus.md)
- [SchemasDeclaredParticipationMode](docs/Model/SchemasDeclaredParticipationMode.md)
- [ShippingTime](docs/Model/ShippingTime.md)
- [Stock](docs/Model/Stock.md)
- [StockUnit](docs/Model/StockUnit.md)
- [SuccessResponse](docs/Model/SuccessResponse.md)
- [ValidationError](docs/Model/ValidationError.md)

## Authorization

Authentication schemes defined for the API:
### bearerAuth

- **Type**: Bearer authentication (JWT)

## Tests

To run the tests, use:

```bash
composer install
vendor/bin/phpunit
```

## Author

[apiportal@inpost.pl](mailto:apiportal@inpost.pl)

## About this package

This PHP package is automatically generated by the [OpenAPI Generator](https://openapi-generator.tech) project:

- API version: `1.7.1`
- Package version: `2.0.0`
- Generator version: `7.14.0`
- Build package: `org.openapitools.codegen.languages.PhpClientCodegen`

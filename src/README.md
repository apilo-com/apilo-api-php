# OpenAPIClient-php

# Dokumentacja REST API dla Apilo
    Limit zapytań to 150req/min.
## Obsługa zasobów API
   Dla wszystkich zasobów niezwiązanych z procesem autoryzacji należy dołączyć
następujące nagłówki:

```
Accept: application/json
Content-Type: application/json
Authorization: Bearer access_token
```

   Dla każdego zapytania (również autoryzacyjnych) należy określić typ mediów (nagłówek
   Accept oraz Content-Type), będzie to zawsze application/json.
   Zarówno dla zapytań wysyłanych na serwer jak i danych zwracanych przez serwer
   stosowany jest format danych (payload) JSON. Należy odpowiednio dla zapytań enkodować
   dane do tego formatu oraz dla odpowiedzi dekodować dane tego formatu.

   Przesyłając dane do API:
   Pola opcjonalne można wypełnić lub przypisać im wartość null w przypadku zapytań
   POST/PUT lub nie przesyłać ich w przypadku filtrów GET.
   Pola obowiązkowe należy zawsze wypełnić właściwą wartością.
## Filtry dla list
Dla zasobów typu GET z listą wyników można stosować dodatkowe filtry manipulujące
wynikami. Parametry należy przekazać w URL zaraz za znakiem kończącym adres zasobu,
np. `.../api/orders/?limit=200`
Dla list dostępne są dwa ogólne filtry:

`int` `limit` - Limit zwracanych wyników (maksymalnie 2000)
`int` `offset` - Wskaźnik pozycji (0 - sam początek, 1 - pomija jeden rekord, 256 - pomija 256
    rekordów)
## Format daty
Daty dla przesyłanych wartości (filtry oraz przesyłane obiekty metodą POST/PUT)
stosowany jest format daty ISO 8601 w następującym formacie:
`DateTimeIso` `YYYY-MM-DDTHH-MM-SSZ`. W PHP jest to `DateTimeInterface::ATOM`.
Domyślnie w takim formacie stosowany jest czas zulu (trzeba uwzględnić przesunięcie
względem strefy czasowej). Czas Zulu można zastąpić lokalizacją strefy czasowej, np. w
przypadku Polski jest to +0200 w przypadku czasu letniego lub +0100 w przypadku czasu
podstawowego (przekazując strefę czasową w filtrze - parametr GET - należy pamiętać o
zakodowaniu znaku plusa, w przeciwnym wypadku zostanie zinterpretowany jako spacja).

`2024-09-12T08:16:32+02:00`



## Installation & Usage

### Requirements

PHP 7.4 and later.
Should also work with PHP 8.0.

### Composer

To install the bindings via [Composer](https://getcomposer.org/), add the following to `composer.json`:

```json
{
  "repositories": [
    {
      "type": "vcs",
      "url": "https://github.com/GIT_USER_ID/GIT_REPO_ID.git"
    }
  ],
  "require": {
    "GIT_USER_ID/GIT_REPO_ID": "*@dev"
  }
}
```

Then run `composer install`

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



// Configure HTTP basic authorization: BasicAuth
$config = Apilo\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Apilo\Api\AuthorizationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$authorization_request = new \Apilo\Model\AuthorizationRequest(); // \Apilo\Model\AuthorizationRequest | Obtaining access_token and refresh_token tokens

try {
    $result = $apiInstance->postRestAuthTokenpost($authorization_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuthorizationApi->postRestAuthTokenpost: ', $e->getMessage(), PHP_EOL;
}

```

## API Endpoints

All URIs are relative to  *https://ENDPOINT.apilo.com/* (ENDPOINT is an individual client address)

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*AuthorizationApi* | [**postRestAuthTokenpost**](docs/Api/AuthorizationApi.md#postrestauthtokenpost) | **POST** /rest/auth/token/ | Obtaining access_token and refresh_token tokens.
*ConnectionApi* | [**getRestIndexIndex**](docs/Api/ConnectionApi.md#getrestindexindex) | **GET** /rest/api/ | Connection test.
*ConnectionApi* | [**getRestIndexWhoami**](docs/Api/ConnectionApi.md#getrestindexwhoami) | **GET** /rest/api/whoami/ | Connection info.
*FinanceDocumentApi* | [**deleteRestFinanceDocumentsDocumentsDelete**](docs/Api/FinanceDocumentApi.md#deleterestfinancedocumentsdocumentsdelete) | **DELETE** /rest/api/finance/documents/{id}/documents/{idExternal}/ | Delete a document for accounting documents.
*FinanceDocumentApi* | [**getRestFinanceDocumentConfigsIndex**](docs/Api/FinanceDocumentApi.md#getrestfinancedocumentconfigsindex) | **GET** /rest/api/finance/document-configs/ | Get accounting document numbering series.
*FinanceDocumentApi* | [**getRestFinanceDocumentIndex**](docs/Api/FinanceDocumentApi.md#getrestfinancedocumentindex) | **GET** /rest/api/finance/documents/ | Get list of accounting documents.
*FinanceDocumentApi* | [**postRestFinanceDocumentsDocumentsCreate**](docs/Api/FinanceDocumentApi.md#postrestfinancedocumentsdocumentscreate) | **POST** /rest/api/finance/documents/{id}/documents/ | Create a document for accounting documents.
*MediaApi* | [**getRestMediaGet**](docs/Api/MediaApi.md#getrestmediaget) | **GET** /rest/api/media/{uuid}/ | Get media.
*MediaApi* | [**postRestMediaNew**](docs/Api/MediaApi.md#postrestmedianew) | **POST** /rest/api/media/ | Create new media attachment.
*OrderApi* | [**deleteRestOrderDocumentsDelete**](docs/Api/OrderApi.md#deleterestorderdocumentsdelete) | **DELETE** /rest/api/orders/{id}/documents/{document}/ | Delete document for given order.
*OrderApi* | [**deleteRestOrdersOrderTagDelete**](docs/Api/OrderApi.md#deleterestordersordertagdelete) | **DELETE** /rest/api/orders/{orderId}/tag/{tagId}/ | Delete order tag.
*OrderApi* | [**getRestDocumentsMap**](docs/Api/OrderApi.md#getrestdocumentsmap) | **GET** /rest/api/orders/documents/map/ | Get document types map.
*OrderApi* | [**getRestOrderDocumentsDetail**](docs/Api/OrderApi.md#getrestorderdocumentsdetail) | **GET** /rest/api/orders/{id}/documents/{document}/ | Order Document detail.
*OrderApi* | [**getRestOrderDocumentsIndex**](docs/Api/OrderApi.md#getrestorderdocumentsindex) | **GET** /rest/api/orders/{id}/documents/ | Get simple list of documents for given order.
*OrderApi* | [**getRestOrdersCarrierAccountMap**](docs/Api/OrderApi.md#getrestorderscarrieraccountmap) | **GET** /rest/api/orders/carrier-account/map/ | Get Carrier Account list.
*OrderApi* | [**getRestOrdersCarrierMap**](docs/Api/OrderApi.md#getrestorderscarriermap) | **GET** /rest/api/orders/carrier/map/ | Get list of Carrier.
*OrderApi* | [**getRestOrdersDetail**](docs/Api/OrderApi.md#getrestordersdetail) | **GET** /rest/api/orders/{id}/ | Get detailed order by given ID.
*OrderApi* | [**getRestOrdersIndex**](docs/Api/OrderApi.md#getrestordersindex) | **GET** /rest/api/orders/ | Get simple list of orders.
*OrderApi* | [**getRestOrdersOrderNoteList**](docs/Api/OrderApi.md#getrestordersordernotelist) | **GET** /rest/api/orders/{id}/note/ | Get order notes.
*OrderApi* | [**getRestOrdersOrderTagList**](docs/Api/OrderApi.md#getrestordersordertaglist) | **GET** /rest/api/orders/{orderId}/tag/ | Order tags list.
*OrderApi* | [**getRestOrdersPaymentMap**](docs/Api/OrderApi.md#getrestorderspaymentmap) | **GET** /rest/api/orders/payment/map/ | Get Payment types list.
*OrderApi* | [**getRestOrdersPlatformMap**](docs/Api/OrderApi.md#getrestordersplatformmap) | **GET** /rest/api/orders/platform/map/ | Get Platform list.
*OrderApi* | [**getRestOrdersRawMedia**](docs/Api/OrderApi.md#getrestordersrawmedia) | **GET** /rest/api/orders/{id}/media/{document}/ | Order Binary document.
*OrderApi* | [**getRestOrdersShipmentDetail**](docs/Api/OrderApi.md#getrestordersshipmentdetail) | **GET** /rest/api/orders/{id}/shipment/{shipment}/ | Shipment detail.
*OrderApi* | [**getRestOrdersShipmentList**](docs/Api/OrderApi.md#getrestordersshipmentlist) | **GET** /rest/api/orders/{id}/shipment/ | List of order shipments.
*OrderApi* | [**getRestOrdersShipmentStatusMap**](docs/Api/OrderApi.md#getrestordersshipmentstatusmap) | **GET** /rest/api/orders/shipment/status/map/ | Get shipment status map.
*OrderApi* | [**getRestOrdersStatusMap**](docs/Api/OrderApi.md#getrestordersstatusmap) | **GET** /rest/api/orders/status/map/ | Get order Status types list.
*OrderApi* | [**getRestOrdersTagList**](docs/Api/OrderApi.md#getrestorderstaglist) | **GET** /rest/api/orders/tag/map/ | Tag list.
*OrderApi* | [**postRestOrderDocumentsCreate**](docs/Api/OrderApi.md#postrestorderdocumentscreate) | **POST** /rest/api/orders/{id}/documents/ | Create document for order.
*OrderApi* | [**postRestOrdersCreate**](docs/Api/OrderApi.md#postrestorderscreate) | **POST** /rest/api/orders/ | Create a new order.
*OrderApi* | [**postRestOrdersOrderNoteCreate**](docs/Api/OrderApi.md#postrestordersordernotecreate) | **POST** /rest/api/orders/{id}/note/ | Add note to order.
*OrderApi* | [**postRestOrdersOrderTagCreate**](docs/Api/OrderApi.md#postrestordersordertagcreate) | **POST** /rest/api/orders/{orderId}/tag/ | Create order tag.
*OrderApi* | [**postRestOrdersPaymentCreate**](docs/Api/OrderApi.md#postrestorderspaymentcreate) | **POST** /rest/api/orders/{id}/payment/ | Add payment to Order.
*OrderApi* | [**postRestOrdersShipmentCreate**](docs/Api/OrderApi.md#postrestordersshipmentcreate) | **POST** /rest/api/orders/{id}/shipment/ | Add shipment to order.
*OrderApi* | [**putRestOrdersStatusChange**](docs/Api/OrderApi.md#putrestordersstatuschange) | **PUT** /rest/api/orders/{id}/status/ | Update order status.
*SaleApi* | [**getRestSaleAuctionIndex**](docs/Api/SaleApi.md#getrestsaleauctionindex) | **GET** /rest/api/sale/auction/ | Get auctions list.
*SaleApi* | [**getRestSaleIndex**](docs/Api/SaleApi.md#getrestsaleindex) | **GET** /rest/api/sale/ | Get list of sales channels.
*ShipmentApi* | [**getRestShipmentCarrierAccountMap**](docs/Api/ShipmentApi.md#getrestshipmentcarrieraccountmap) | **GET** /rest/api/shipping/carrier-account/map/ | Get Carrier Account list.
*ShipmentApi* | [**getRestShipmentCarrierDocumentIndex**](docs/Api/ShipmentApi.md#getrestshipmentcarrierdocumentindex) | **GET** /rest/api/shipping/carrier-document/ | Get list of shipment carrier documents.
*ShipmentApi* | [**getRestShipmentCarrierSendingMethods**](docs/Api/ShipmentApi.md#getrestshipmentcarriersendingmethods) | **GET** /rest/api/shipping/carrier-account/{id}/method/ | Get Carrier sending methods.
*ShipmentApi* | [**getRestShipmentDetails**](docs/Api/ShipmentApi.md#getrestshipmentdetails) | **GET** /rest/api/shipping/shipment/{id}/ | Get detailed shipment by given ID.
*ShipmentApi* | [**getRestShipmentInfoIndex**](docs/Api/ShipmentApi.md#getrestshipmentinfoindex) | **GET** /rest/api/shipping/shipment/info/ | Get list of shipments for given filters.
*ShipmentApi* | [**getRestShipmentOptions**](docs/Api/ShipmentApi.md#getrestshipmentoptions) | **GET** /rest/api/shipping/carrier-account/{carrierAccountId}/method/{method}/map/ | Get list of shipment option need to create new shipment.
*ShipmentApi* | [**getRestShipmentTracking**](docs/Api/ShipmentApi.md#getrestshipmenttracking) | **GET** /rest/api/shipping/shipment/tracking/ | Get a list of shipments tracking information for given filters.
*ShipmentApi* | [**postRestShipmentCarrierDocumentCreate**](docs/Api/ShipmentApi.md#postrestshipmentcarrierdocumentcreate) | **POST** /rest/api/shipping/carrier-document/ | Confirm shipment and order pickup.
*ShipmentApi* | [**postRestShipmentNewShipment**](docs/Api/ShipmentApi.md#postrestshipmentnewshipment) | **POST** /rest/api/shipping/shipment/ | Creates a new shipment from the submitted data.
*ShipmentApi* | [**postRestShipmentPickupDateProposal**](docs/Api/ShipmentApi.md#postrestshipmentpickupdateproposal) | **POST** /rest/api/shipping/pickup-date-proposal/ | Get shipment pick up date proposal.
*WarehouseApi* | [**deleteRestWarehousePriceCalculatedDelete**](docs/Api/WarehouseApi.md#deleterestwarehousepricecalculateddelete) | **DELETE** /rest/api/warehouse/price-calculated/{product}/{price}/ | Delete price.
*WarehouseApi* | [**deleteRestWarehouseProductAttributeDelete**](docs/Api/WarehouseApi.md#deleterestwarehouseproductattributedelete) | **DELETE** /rest/api/warehouse/product/attributes/ | Product Attributes Delete.
*WarehouseApi* | [**deleteRestWarehouseProductDelete**](docs/Api/WarehouseApi.md#deleterestwarehouseproductdelete) | **DELETE** /rest/api/warehouse/product/{id}/ | Delete Product.
*WarehouseApi* | [**getRestWarehouseAttributeIndex**](docs/Api/WarehouseApi.md#getrestwarehouseattributeindex) | **GET** /rest/api/warehouse/attribute/ | Attribute List.
*WarehouseApi* | [**getRestWarehouseCategoryIndex**](docs/Api/WarehouseApi.md#getrestwarehousecategoryindex) | **GET** /rest/api/warehouse/category/ | Categories list.
*WarehouseApi* | [**getRestWarehousePriceCalculatedList**](docs/Api/WarehouseApi.md#getrestwarehousepricecalculatedlist) | **GET** /rest/api/warehouse/price-calculated/ | Prices list.
*WarehouseApi* | [**getRestWarehousePriceIndex**](docs/Api/WarehouseApi.md#getrestwarehousepriceindex) | **GET** /rest/api/warehouse/price/ | Price lists.
*WarehouseApi* | [**getRestWarehouseProductAttributeIndex**](docs/Api/WarehouseApi.md#getrestwarehouseproductattributeindex) | **GET** /rest/api/warehouse/product/attributes/ | Product attribute list.
*WarehouseApi* | [**getRestWarehouseProductDetails**](docs/Api/WarehouseApi.md#getrestwarehouseproductdetails) | **GET** /rest/api/warehouse/product/{id}/ | Get Product detail.
*WarehouseApi* | [**getRestWarehouseProductIndex**](docs/Api/WarehouseApi.md#getrestwarehouseproductindex) | **GET** /rest/api/warehouse/product/ | Products list.
*WarehouseApi* | [**getRestWarehouseProductmediaGetproductmedia**](docs/Api/WarehouseApi.md#getrestwarehouseproductmediagetproductmedia) | **GET** /rest/api/warehouse/product/media/ | Products Media list.
*WarehouseApi* | [**patchRestWarehouseAttributeUpdate**](docs/Api/WarehouseApi.md#patchrestwarehouseattributeupdate) | **PATCH** /rest/api/warehouse/attribute/ | Attribute update.
*WarehouseApi* | [**patchRestWarehouseProductAttributeUpdate**](docs/Api/WarehouseApi.md#patchrestwarehouseproductattributeupdate) | **PATCH** /rest/api/warehouse/product/attributes/ | Product Attribute update.
*WarehouseApi* | [**patchRestWarehouseProductPut**](docs/Api/WarehouseApi.md#patchrestwarehouseproductput) | **PATCH** /rest/api/warehouse/product/ | Products PATCH update.
*WarehouseApi* | [**postRestWarehouseAttributeCreate**](docs/Api/WarehouseApi.md#postrestwarehouseattributecreate) | **POST** /rest/api/warehouse/attribute/ | Attribute create.
*WarehouseApi* | [**postRestWarehouseCategoryCreate**](docs/Api/WarehouseApi.md#postrestwarehousecategorycreate) | **POST** /rest/api/warehouse/category/ | Category create.
*WarehouseApi* | [**postRestWarehousePriceCalculatedCreateUpdate**](docs/Api/WarehouseApi.md#postrestwarehousepricecalculatedcreateupdate) | **POST** /rest/api/warehouse/price-calculated/ | Price create and update.
*WarehouseApi* | [**postRestWarehouseProductCreate**](docs/Api/WarehouseApi.md#postrestwarehouseproductcreate) | **POST** /rest/api/warehouse/product/ | Products create.
*WarehouseApi* | [**putRestWarehouseProductUpdate**](docs/Api/WarehouseApi.md#putrestwarehouseproductupdate) | **PUT** /rest/api/warehouse/product/ | Products data update.

## Models

- [AddressReceiverDTO](docs/Model/AddressReceiverDTO.md)
- [AttributeFeaturesInner](docs/Model/AttributeFeaturesInner.md)
- [AttributeFeaturesInner1](docs/Model/AttributeFeaturesInner1.md)
- [AttributeFeaturesInner2](docs/Model/AttributeFeaturesInner2.md)
- [AuthorizationRequest](docs/Model/AuthorizationRequest.md)
- [AuthorizationResponse](docs/Model/AuthorizationResponse.md)
- [CarrierAccountMappingDTO](docs/Model/CarrierAccountMappingDTO.md)
- [CarrierAccountMappingListingDTO](docs/Model/CarrierAccountMappingListingDTO.md)
- [CarrierAccountOptionsDTO](docs/Model/CarrierAccountOptionsDTO.md)
- [CategoryCreateModel](docs/Model/CategoryCreateModel.md)
- [CategoryModel](docs/Model/CategoryModel.md)
- [ContentDTO](docs/Model/ContentDTO.md)
- [CreateCategoriesResponse](docs/Model/CreateCategoriesResponse.md)
- [DocumentDocumentCreatePreferencesDTO](docs/Model/DocumentDocumentCreatePreferencesDTO.md)
- [DocumentDocumentCreatePreferencesDTO2](docs/Model/DocumentDocumentCreatePreferencesDTO2.md)
- [GetCategoriesResponse](docs/Model/GetCategoriesResponse.md)
- [GetProductsResponse](docs/Model/GetProductsResponse.md)
- [GetRestFinanceDocumentConfigsIndex200Response](docs/Model/GetRestFinanceDocumentConfigsIndex200Response.md)
- [GetRestFinanceDocumentIndex200Response](docs/Model/GetRestFinanceDocumentIndex200Response.md)
- [GetRestOrderDocumentsIndex200Response](docs/Model/GetRestOrderDocumentsIndex200Response.md)
- [GetRestOrdersIndex200Response](docs/Model/GetRestOrdersIndex200Response.md)
- [GetRestOrdersShipmentList200Response](docs/Model/GetRestOrdersShipmentList200Response.md)
- [GetRestWarehousePriceIndex200Response](docs/Model/GetRestWarehousePriceIndex200Response.md)
- [GetRestWarehouseProductmediaGetproductmedia200Response](docs/Model/GetRestWarehouseProductmediaGetproductmedia200Response.md)
- [HelloResponse](docs/Model/HelloResponse.md)
- [IdModel](docs/Model/IdModel.md)
- [MappingDTO](docs/Model/MappingDTO.md)
- [Media](docs/Model/Media.md)
- [NewShipmentCreatedDTO](docs/Model/NewShipmentCreatedDTO.md)
- [NewShipmentDTO](docs/Model/NewShipmentDTO.md)
- [NewShipmentsCreatedResponse](docs/Model/NewShipmentsCreatedResponse.md)
- [OrderTagPost](docs/Model/OrderTagPost.md)
- [PostRestOrdersCreate200Response](docs/Model/PostRestOrdersCreate200Response.md)
- [PostRestOrdersPaymentCreate201Response](docs/Model/PostRestOrdersPaymentCreate201Response.md)
- [PostRestWarehousePriceCalculatedCreateUpdate422Response](docs/Model/PostRestWarehousePriceCalculatedCreateUpdate422Response.md)
- [PriceCalculatedPost](docs/Model/PriceCalculatedPost.md)
- [PriceCalculatedPostCustomPriceModify](docs/Model/PriceCalculatedPostCustomPriceModify.md)
- [PriceModel](docs/Model/PriceModel.md)
- [Prices](docs/Model/Prices.md)
- [ProductAttributeValuesInner](docs/Model/ProductAttributeValuesInner.md)
- [ProductAttributeValuesInner1](docs/Model/ProductAttributeValuesInner1.md)
- [ProductAttributeValuesInner2](docs/Model/ProductAttributeValuesInner2.md)
- [ProductBaseModel](docs/Model/ProductBaseModel.md)
- [ProductDetailModel](docs/Model/ProductDetailModel.md)
- [ProductModel](docs/Model/ProductModel.md)
- [ProductPut](docs/Model/ProductPut.md)
- [Products](docs/Model/Products.md)
- [ProductsCreateResponse](docs/Model/ProductsCreateResponse.md)
- [ProductsNotCreateResponse](docs/Model/ProductsNotCreateResponse.md)
- [PutRestOrdersStatusChange200Response](docs/Model/PutRestOrdersStatusChange200Response.md)
- [RestAttributeDTO](docs/Model/RestAttributeDTO.md)
- [RestAttributeDTO2](docs/Model/RestAttributeDTO2.md)
- [RestAttributeDTO3](docs/Model/RestAttributeDTO3.md)
- [RestAttributeFeatureDTO](docs/Model/RestAttributeFeatureDTO.md)
- [RestAttributeFeatureDTO2](docs/Model/RestAttributeFeatureDTO2.md)
- [RestAttributeFeatureDTO3](docs/Model/RestAttributeFeatureDTO3.md)
- [RestAttributesDTO](docs/Model/RestAttributesDTO.md)
- [RestAttributesDTO2](docs/Model/RestAttributesDTO2.md)
- [RestAttributesIndexResponse](docs/Model/RestAttributesIndexResponse.md)
- [RestBundleException](docs/Model/RestBundleException.md)
- [RestBundleException2](docs/Model/RestBundleException2.md)
- [RestBundleException3](docs/Model/RestBundleException3.md)
- [RestCarrierMethodDTO](docs/Model/RestCarrierMethodDTO.md)
- [RestCarrierMethodListingDTO](docs/Model/RestCarrierMethodListingDTO.md)
- [RestDocumentConfigDTO](docs/Model/RestDocumentConfigDTO.md)
- [RestDocumentConfigsIndexResponse](docs/Model/RestDocumentConfigsIndexResponse.md)
- [RestDocumentDTO](docs/Model/RestDocumentDTO.md)
- [RestDocumentDocumentDTO](docs/Model/RestDocumentDocumentDTO.md)
- [RestDocumentDocumentDTO2](docs/Model/RestDocumentDocumentDTO2.md)
- [RestDocumentItemDTO](docs/Model/RestDocumentItemDTO.md)
- [RestDocumentPersonalInfoDTO](docs/Model/RestDocumentPersonalInfoDTO.md)
- [RestDocumentsIndexResponse](docs/Model/RestDocumentsIndexResponse.md)
- [RestListingResponse](docs/Model/RestListingResponse.md)
- [RestOrderAddressDTO](docs/Model/RestOrderAddressDTO.md)
- [RestOrderAddressDTO2](docs/Model/RestOrderAddressDTO2.md)
- [RestOrderAddressDTO3](docs/Model/RestOrderAddressDTO3.md)
- [RestOrderAddressDTO4](docs/Model/RestOrderAddressDTO4.md)
- [RestOrderAddressDTO5](docs/Model/RestOrderAddressDTO5.md)
- [RestOrderAddressDTO6](docs/Model/RestOrderAddressDTO6.md)
- [RestOrderAddressDTO7](docs/Model/RestOrderAddressDTO7.md)
- [RestOrderDocumentDTO](docs/Model/RestOrderDocumentDTO.md)
- [RestOrderDocumentDTO2](docs/Model/RestOrderDocumentDTO2.md)
- [RestOrderDocumentDTO3](docs/Model/RestOrderDocumentDTO3.md)
- [RestOrderDocumentsIndexResponse](docs/Model/RestOrderDocumentsIndexResponse.md)
- [RestOrderItemsDTO](docs/Model/RestOrderItemsDTO.md)
- [RestOrderItemsDTO2](docs/Model/RestOrderItemsDTO2.md)
- [RestOrderItemsDTO3](docs/Model/RestOrderItemsDTO3.md)
- [RestOrderNoteDTO](docs/Model/RestOrderNoteDTO.md)
- [RestOrderNoteDTO2](docs/Model/RestOrderNoteDTO2.md)
- [RestOrderNoteDTO3](docs/Model/RestOrderNoteDTO3.md)
- [RestOrderPaymentDTO](docs/Model/RestOrderPaymentDTO.md)
- [RestOrderPaymentDTO2](docs/Model/RestOrderPaymentDTO2.md)
- [RestOrderReadDTO](docs/Model/RestOrderReadDTO.md)
- [RestOrderReadDTO2](docs/Model/RestOrderReadDTO2.md)
- [RestOrderShipmentDTO](docs/Model/RestOrderShipmentDTO.md)
- [RestOrderShipmentDTO2](docs/Model/RestOrderShipmentDTO2.md)
- [RestOrderShipmentDTO3](docs/Model/RestOrderShipmentDTO3.md)
- [RestOrderWriteDTO](docs/Model/RestOrderWriteDTO.md)
- [RestOrderWriteDTOPreferences](docs/Model/RestOrderWriteDTOPreferences.md)
- [RestOrdersIndexResponse](docs/Model/RestOrdersIndexResponse.md)
- [RestPriceDTO](docs/Model/RestPriceDTO.md)
- [RestProductAttributeAttachmentItemDTO](docs/Model/RestProductAttributeAttachmentItemDTO.md)
- [RestProductAttributeBooleanDTO](docs/Model/RestProductAttributeBooleanDTO.md)
- [RestProductAttributeBooleanDTO2](docs/Model/RestProductAttributeBooleanDTO2.md)
- [RestProductAttributeBooleanDTO3](docs/Model/RestProductAttributeBooleanDTO3.md)
- [RestProductAttributeDTO](docs/Model/RestProductAttributeDTO.md)
- [RestProductAttributeDTO2](docs/Model/RestProductAttributeDTO2.md)
- [RestProductAttributeDTO3](docs/Model/RestProductAttributeDTO3.md)
- [RestProductAttributeFeatureDTO](docs/Model/RestProductAttributeFeatureDTO.md)
- [RestProductAttributeFeatureDTO2](docs/Model/RestProductAttributeFeatureDTO2.md)
- [RestProductAttributeFeatureDTO3](docs/Model/RestProductAttributeFeatureDTO3.md)
- [RestProductAttributeIndexResponse](docs/Model/RestProductAttributeIndexResponse.md)
- [RestProductAttributeIndexResponse2](docs/Model/RestProductAttributeIndexResponse2.md)
- [RestProductAttributeTextAreaDTO](docs/Model/RestProductAttributeTextAreaDTO.md)
- [RestProductAttributeTextAreaDTO2](docs/Model/RestProductAttributeTextAreaDTO2.md)
- [RestProductAttributeTextAreaDTO3](docs/Model/RestProductAttributeTextAreaDTO3.md)
- [RestProductAttributeTextDTO](docs/Model/RestProductAttributeTextDTO.md)
- [RestProductAttributeTextDTO2](docs/Model/RestProductAttributeTextDTO2.md)
- [RestProductAttributeTextDTO3](docs/Model/RestProductAttributeTextDTO3.md)
- [RestProductAttributesDTO](docs/Model/RestProductAttributesDTO.md)
- [RestProductAttributesDTO2](docs/Model/RestProductAttributesDTO2.md)
- [RestProductNotFoundException](docs/Model/RestProductNotFoundException.md)
- [RestShipmentCarrierDocumentDTO](docs/Model/RestShipmentCarrierDocumentDTO.md)
- [RestShipmentCarrierDocumentsListingResponse](docs/Model/RestShipmentCarrierDocumentsListingResponse.md)
- [RestShipmentDetailsDTO](docs/Model/RestShipmentDetailsDTO.md)
- [RestShipmentIdDTO](docs/Model/RestShipmentIdDTO.md)
- [RestShipmentInfoDTO](docs/Model/RestShipmentInfoDTO.md)
- [RestShipmentInfoIndexResponse](docs/Model/RestShipmentInfoIndexResponse.md)
- [RestShipmentOptionDTO](docs/Model/RestShipmentOptionDTO.md)
- [RestShipmentOptionDTO2](docs/Model/RestShipmentOptionDTO2.md)
- [RestShipmentOptionDTOValue](docs/Model/RestShipmentOptionDTOValue.md)
- [RestShipmentOptionDTOValueAnyOfInner](docs/Model/RestShipmentOptionDTOValueAnyOfInner.md)
- [RestShipmentOptionsAndParcelsDTO](docs/Model/RestShipmentOptionsAndParcelsDTO.md)
- [RestShipmentOptionsDefinitionDTO](docs/Model/RestShipmentOptionsDefinitionDTO.md)
- [RestShipmentParcelDTO](docs/Model/RestShipmentParcelDTO.md)
- [RestShipmentPickupDateProposalsDTO](docs/Model/RestShipmentPickupDateProposalsDTO.md)
- [RestShipmentPickupDateProposalsListingDTO](docs/Model/RestShipmentPickupDateProposalsListingDTO.md)
- [RestShipmentTrackingDTO](docs/Model/RestShipmentTrackingDTO.md)
- [RestShipmentTrackingResponse](docs/Model/RestShipmentTrackingResponse.md)
- [RestShipmentsDTO](docs/Model/RestShipmentsDTO.md)
- [RestShippingConfirmationDTO](docs/Model/RestShippingConfirmationDTO.md)
- [RestShippingConfirmationsDTO](docs/Model/RestShippingConfirmationsDTO.md)
- [RestShippingConfirmationsErrorDTO](docs/Model/RestShippingConfirmationsErrorDTO.md)
- [RestShippingConfirmationsListingItemDTO](docs/Model/RestShippingConfirmationsListingItemDTO.md)
- [RestShippingConfirmationsListingResponseDTO](docs/Model/RestShippingConfirmationsListingResponseDTO.md)
- [RestStatusOrderDTO](docs/Model/RestStatusOrderDTO.md)
- [RestTagDTO](docs/Model/RestTagDTO.md)
- [RestTagsDTO](docs/Model/RestTagsDTO.md)
- [WhoamiDTO](docs/Model/WhoamiDTO.md)

## Authorization

Authentication schemes defined for the API:
### BasicAuth

- **Type**: HTTP basic authentication

### BearerAuth

- **Type**: Bearer authentication

## Tests

To run the tests, use:

```bash
composer install
vendor/bin/phpunit
```

## Author



## About this package

This PHP package is automatically generated by the [OpenAPI Generator](https://openapi-generator.tech) project:

- API version: `2.0.0.0`
    - Generator version: `7.10.0`
- Build package: `org.openapitools.codegen.languages.PhpClientCodegen`

# OpenAPIClient-php

Dokumentacja REST API dla Apilo
# Obsługa zasobów API
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
# Filtry dla list
    Dla zasobów typu GET z listą wyników można stosować dodatkowe filtry manipulujące
    wynikami. Parametry należy przekazać w URL zaraz za znakiem kończącym adres zasobu,
    np. `.../api/orders/?limit=200`
    Dla list dostępne są dwa ogólne filtry:

`int` `limit` - Limit zwracanych wyników (maksymalnie 2000)
`int` `offset` - Wskaźnik pozycji (0 - sam początek, 1 - pomija jeden rekord, 256 - pomija 256
    rekordów)
# Format daty
    Daty dla przesyłanych wartości (filtry oraz przesyłane obiekty metodą POST/PUT)
    stosowany jest format daty ISO 8601 w następującym formacie:
    `DateTimeIso` `YYYY-MM-DDTHH-MM-SSZ`
    Domyślnie w takim formacie stosowany jest czas zulu (trzeba uwzględnić przesunięcie
    względem strefy czasowej). Czas Zulu można zastąpić lokalizacją strefy czasowej, np. w
    przypadku Polski jest to +0200 w przypadku czasu letniego lub +0100 w przypadku czasu
    podstawowego (przekazując strefę czasową w filtrze - parametr GET - należy pamiętać o
    zakodowaniu znaku plusa, w przeciwnym wypadku zostanie zinterpretowany jako spacja).

`2021-03-01T14:00:00+0100`

   <SecurityDefinitions />



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
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\AuthorizationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $apiInstance->restApiTestAuthTokenExpirationGet();
} catch (Exception $e) {
    echo 'Exception when calling AuthorizationApi->restApiTestAuthTokenExpirationGet: ', $e->getMessage(), PHP_EOL;
}

```

## API Endpoints

All URIs are relative to *https://erpbox.devo/app_dev.php*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*AuthorizationApi* | [**restApiTestAuthTokenExpirationGet**](docs/Api/AuthorizationApi.md#restapitestauthtokenexpirationget) | **GET** /rest/api/test/auth/token/expiration/ | Expiration test resource
*AuthorizationApi* | [**restAuthTokenGet**](docs/Api/AuthorizationApi.md#restauthtokenget) | **GET** /rest/auth/token/ | Deprecated authorization method GET
*AuthorizationApi* | [**restAuthTokenPost**](docs/Api/AuthorizationApi.md#restauthtokenpost) | **POST** /rest/auth/token/ | Obtaining access_token and refresh_token tokens
*ConnectionApi* | [**restApiGet**](docs/Api/ConnectionApi.md#restapiget) | **GET** /rest/api/ | Connection test
*ConnectionApi* | [**restApiWhoamiGet**](docs/Api/ConnectionApi.md#restapiwhoamiget) | **GET** /rest/api/whoami/ | Connection info
*FinanceDocumentApi* | [**restApiFinanceDocumentConfigsGet**](docs/Api/FinanceDocumentApi.md#restapifinancedocumentconfigsget) | **GET** /rest/api/finance/document-configs/ | Get accounting document numbering series
*FinanceDocumentApi* | [**restApiFinanceDocumentsGet**](docs/Api/FinanceDocumentApi.md#restapifinancedocumentsget) | **GET** /rest/api/finance/documents/ | Get list of accounting documents
*FinanceDocumentApi* | [**restApiFinanceDocumentsIdDocumentsIdExternalDelete**](docs/Api/FinanceDocumentApi.md#restapifinancedocumentsiddocumentsidexternaldelete) | **DELETE** /rest/api/finance/documents/{id}/documents/{idExternal}/ | Delete a document for accounting documents
*FinanceDocumentApi* | [**restApiFinanceDocumentsIdDocumentsPost**](docs/Api/FinanceDocumentApi.md#restapifinancedocumentsiddocumentspost) | **POST** /rest/api/finance/documents/{id}/documents/ | Create a document for accounting documents
*MediaApi* | [**restApiMediaPost**](docs/Api/MediaApi.md#restapimediapost) | **POST** /rest/api/media/ | Create new media attachment
*OrderApi* | [**restApiOrdersCarrierAccountMapGet**](docs/Api/OrderApi.md#restapiorderscarrieraccountmapget) | **GET** /rest/api/orders/carrier-account/map/ | Get Carrier Account list
*OrderApi* | [**restApiOrdersCarrierMapGet**](docs/Api/OrderApi.md#restapiorderscarriermapget) | **GET** /rest/api/orders/carrier/map/ | Get list of Carrier
*OrderApi* | [**restApiOrdersDocumentsMapGet**](docs/Api/OrderApi.md#restapiordersdocumentsmapget) | **GET** /rest/api/orders/documents/map/ | Get document types map
*OrderApi* | [**restApiOrdersGet**](docs/Api/OrderApi.md#restapiordersget) | **GET** /rest/api/orders/ | Get simple list of orders
*OrderApi* | [**restApiOrdersIdDocumentsDocumentDelete**](docs/Api/OrderApi.md#restapiordersiddocumentsdocumentdelete) | **DELETE** /rest/api/orders/{id}/documents/{document}/ | Delete document for given order
*OrderApi* | [**restApiOrdersIdDocumentsDocumentGet**](docs/Api/OrderApi.md#restapiordersiddocumentsdocumentget) | **GET** /rest/api/orders/{id}/documents/{document}/ | Order Document detail
*OrderApi* | [**restApiOrdersIdDocumentsGet**](docs/Api/OrderApi.md#restapiordersiddocumentsget) | **GET** /rest/api/orders/{id}/documents/ | Get simple list of documents for given order
*OrderApi* | [**restApiOrdersIdDocumentsPost**](docs/Api/OrderApi.md#restapiordersiddocumentspost) | **POST** /rest/api/orders/{id}/documents/ | Create document for order
*OrderApi* | [**restApiOrdersIdGet**](docs/Api/OrderApi.md#restapiordersidget) | **GET** /rest/api/orders/{id}/ | Get detailed order by given ID
*OrderApi* | [**restApiOrdersIdMediaDocumentGet**](docs/Api/OrderApi.md#restapiordersidmediadocumentget) | **GET** /rest/api/orders/{id}/media/{document}/ | Binary document
*OrderApi* | [**restApiOrdersIdNoteGet**](docs/Api/OrderApi.md#restapiordersidnoteget) | **GET** /rest/api/orders/{id}/note/ | Get order notes
*OrderApi* | [**restApiOrdersIdNotePost**](docs/Api/OrderApi.md#restapiordersidnotepost) | **POST** /rest/api/orders/{id}/note/ | Add note to order
*OrderApi* | [**restApiOrdersIdPaymentPost**](docs/Api/OrderApi.md#restapiordersidpaymentpost) | **POST** /rest/api/orders/{id}/payment/ | Add payment to Order
*OrderApi* | [**restApiOrdersIdShipmentGet**](docs/Api/OrderApi.md#restapiordersidshipmentget) | **GET** /rest/api/orders/{id}/shipment/ | List of order shipments
*OrderApi* | [**restApiOrdersIdShipmentPost**](docs/Api/OrderApi.md#restapiordersidshipmentpost) | **POST** /rest/api/orders/{id}/shipment/ | Add shipment to order
*OrderApi* | [**restApiOrdersIdShipmentShipmentGet**](docs/Api/OrderApi.md#restapiordersidshipmentshipmentget) | **GET** /rest/api/orders/{id}/shipment/{shipment}/ | Shipment detail
*OrderApi* | [**restApiOrdersIdStatusPut**](docs/Api/OrderApi.md#restapiordersidstatusput) | **PUT** /rest/api/orders/{id}/status/ | Update order status
*OrderApi* | [**restApiOrdersOrderTagGet**](docs/Api/OrderApi.md#restapiordersordertagget) | **GET** /rest/api/orders/{order}/tag/ | Order tags list
*OrderApi* | [**restApiOrdersOrderTagPost**](docs/Api/OrderApi.md#restapiordersordertagpost) | **POST** /rest/api/orders/{order}/tag/ | Create order tag
*OrderApi* | [**restApiOrdersOrderTagTagDelete**](docs/Api/OrderApi.md#restapiordersordertagtagdelete) | **DELETE** /rest/api/orders/{order}/tag/{tag}/ | Delete order tag
*OrderApi* | [**restApiOrdersPaymentMapGet**](docs/Api/OrderApi.md#restapiorderspaymentmapget) | **GET** /rest/api/orders/payment/map/ | Get Payment types list
*OrderApi* | [**restApiOrdersPlatformMapGet**](docs/Api/OrderApi.md#restapiordersplatformmapget) | **GET** /rest/api/orders/platform/map/ | Get Platform list
*OrderApi* | [**restApiOrdersPost**](docs/Api/OrderApi.md#restapiorderspost) | **POST** /rest/api/orders/ | Create a new order
*OrderApi* | [**restApiOrdersShipmentStatusMapGet**](docs/Api/OrderApi.md#restapiordersshipmentstatusmapget) | **GET** /rest/api/orders/shipment/status/map/ | Get shipment status map
*OrderApi* | [**restApiOrdersStatusMapGet**](docs/Api/OrderApi.md#restapiordersstatusmapget) | **GET** /rest/api/orders/status/map/ | Get order Status types list
*OrderApi* | [**restApiOrdersTagMapGet**](docs/Api/OrderApi.md#restapiorderstagmapget) | **GET** /rest/api/orders/tag/map/ | Tag list
*SaleApi* | [**restApiSaleAuctionGet**](docs/Api/SaleApi.md#restapisaleauctionget) | **GET** /rest/api/sale/auction/ | Get auctions list
*SaleApi* | [**restApiSaleGet**](docs/Api/SaleApi.md#restapisaleget) | **GET** /rest/api/sale/ | Get list of sales channels
*WarehouseApi* | [**restApiWarehouseAttributePost**](docs/Api/WarehouseApi.md#restapiwarehouseattributepost) | **POST** /rest/api/warehouse/attribute/ | Attribute create
*WarehouseApi* | [**restApiWarehouseCategoryGet**](docs/Api/WarehouseApi.md#restapiwarehousecategoryget) | **GET** /rest/api/warehouse/category/ | Categories list
*WarehouseApi* | [**restApiWarehouseCategoryPost**](docs/Api/WarehouseApi.md#restapiwarehousecategorypost) | **POST** /rest/api/warehouse/category/ | Category create
*WarehouseApi* | [**restApiWarehousePriceCalculatedGet**](docs/Api/WarehouseApi.md#restapiwarehousepricecalculatedget) | **GET** /rest/api/warehouse/price-calculated/ | Prices list
*WarehouseApi* | [**restApiWarehousePriceCalculatedPost**](docs/Api/WarehouseApi.md#restapiwarehousepricecalculatedpost) | **POST** /rest/api/warehouse/price-calculated/ | Price create and update
*WarehouseApi* | [**restApiWarehousePriceCalculatedProductPriceDelete**](docs/Api/WarehouseApi.md#restapiwarehousepricecalculatedproductpricedelete) | **DELETE** /rest/api/warehouse/price-calculated/{product}/{price}/ | Delete price
*WarehouseApi* | [**restApiWarehousePriceGet**](docs/Api/WarehouseApi.md#restapiwarehousepriceget) | **GET** /rest/api/warehouse/price/ | Price lists
*WarehouseApi* | [**restApiWarehouseProductGet**](docs/Api/WarehouseApi.md#restapiwarehouseproductget) | **GET** /rest/api/warehouse/product/ | Products list
*WarehouseApi* | [**restApiWarehouseProductIdDelete**](docs/Api/WarehouseApi.md#restapiwarehouseproductiddelete) | **DELETE** /rest/api/warehouse/product/{id}/ | Delete Product
*WarehouseApi* | [**restApiWarehouseProductIdGet**](docs/Api/WarehouseApi.md#restapiwarehouseproductidget) | **GET** /rest/api/warehouse/product/{id}/ | Get Product detail
*WarehouseApi* | [**restApiWarehouseProductPatch**](docs/Api/WarehouseApi.md#restapiwarehouseproductpatch) | **PATCH** /rest/api/warehouse/product/ | Products PATCH update
*WarehouseApi* | [**restApiWarehouseProductPost**](docs/Api/WarehouseApi.md#restapiwarehouseproductpost) | **POST** /rest/api/warehouse/product/ | Products create
*WarehouseApi* | [**restApiWarehouseProductPut**](docs/Api/WarehouseApi.md#restapiwarehouseproductput) | **PUT** /rest/api/warehouse/product/ | Products data update

## Models

- [AuthorizationRequest](docs/Model/AuthorizationRequest.md)
- [AuthorizationResponse](docs/Model/AuthorizationResponse.md)
- [CategoryCreateModel](docs/Model/CategoryCreateModel.md)
- [CategoryModel](docs/Model/CategoryModel.md)
- [CreateCategoriesResponse](docs/Model/CreateCategoriesResponse.md)
- [DocumentDocumentCreatePreferencesDTO](docs/Model/DocumentDocumentCreatePreferencesDTO.md)
- [DocumentDocumentCreatePreferencesDTO2](docs/Model/DocumentDocumentCreatePreferencesDTO2.md)
- [GetCategoriesResponse](docs/Model/GetCategoriesResponse.md)
- [GetProductsResponse](docs/Model/GetProductsResponse.md)
- [HelloResponse](docs/Model/HelloResponse.md)
- [IdModel](docs/Model/IdModel.md)
- [MappingDTO](docs/Model/MappingDTO.md)
- [Media](docs/Model/Media.md)
- [OrderTagPost](docs/Model/OrderTagPost.md)
- [PriceCalculatedPost](docs/Model/PriceCalculatedPost.md)
- [PriceListModel](docs/Model/PriceListModel.md)
- [PriceLists](docs/Model/PriceLists.md)
- [PriceModel](docs/Model/PriceModel.md)
- [Prices](docs/Model/Prices.md)
- [ProductBaseModel](docs/Model/ProductBaseModel.md)
- [ProductDetailModel](docs/Model/ProductDetailModel.md)
- [ProductModel](docs/Model/ProductModel.md)
- [ProductPut](docs/Model/ProductPut.md)
- [Products](docs/Model/Products.md)
- [ProductsCreateResponse](docs/Model/ProductsCreateResponse.md)
- [ProductsNotCreateResponse](docs/Model/ProductsNotCreateResponse.md)
- [RestApiFinanceDocumentConfigsGet200Response](docs/Model/RestApiFinanceDocumentConfigsGet200Response.md)
- [RestApiFinanceDocumentsGet200Response](docs/Model/RestApiFinanceDocumentsGet200Response.md)
- [RestApiOrdersDocumentsMapGet200ResponseInner](docs/Model/RestApiOrdersDocumentsMapGet200ResponseInner.md)
- [RestApiOrdersGet200Response](docs/Model/RestApiOrdersGet200Response.md)
- [RestApiOrdersIdDocumentsGet200Response](docs/Model/RestApiOrdersIdDocumentsGet200Response.md)
- [RestApiOrdersIdPaymentPost201Response](docs/Model/RestApiOrdersIdPaymentPost201Response.md)
- [RestApiOrdersIdShipmentGet200Response](docs/Model/RestApiOrdersIdShipmentGet200Response.md)
- [RestApiOrdersIdStatusPut200Response](docs/Model/RestApiOrdersIdStatusPut200Response.md)
- [RestApiOrdersPost200Response](docs/Model/RestApiOrdersPost200Response.md)
- [RestApiOrdersShipmentStatusMapGet200ResponseInner](docs/Model/RestApiOrdersShipmentStatusMapGet200ResponseInner.md)
- [RestAuthTokenPostRequest](docs/Model/RestAuthTokenPostRequest.md)
- [RestBundleException](docs/Model/RestBundleException.md)
- [RestBundleException2](docs/Model/RestBundleException2.md)
- [RestBundleException3](docs/Model/RestBundleException3.md)
- [RestDocumentConfigDTO](docs/Model/RestDocumentConfigDTO.md)
- [RestDocumentDTO](docs/Model/RestDocumentDTO.md)
- [RestDocumentDocumentDTO](docs/Model/RestDocumentDocumentDTO.md)
- [RestDocumentDocumentDTO2](docs/Model/RestDocumentDocumentDTO2.md)
- [RestDocumentItemDTO](docs/Model/RestDocumentItemDTO.md)
- [RestDocumentPersonalInfoDTO](docs/Model/RestDocumentPersonalInfoDTO.md)
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
- [RestOrderItemsDTO](docs/Model/RestOrderItemsDTO.md)
- [RestOrderItemsDTO2](docs/Model/RestOrderItemsDTO2.md)
- [RestOrderItemsDTO3](docs/Model/RestOrderItemsDTO3.md)
- [RestOrderNoteDTO](docs/Model/RestOrderNoteDTO.md)
- [RestOrderNoteDTO2](docs/Model/RestOrderNoteDTO2.md)
- [RestOrderNoteDTO3](docs/Model/RestOrderNoteDTO3.md)
- [RestOrderPaymentsDTO](docs/Model/RestOrderPaymentsDTO.md)
- [RestOrderPaymentsDTO2](docs/Model/RestOrderPaymentsDTO2.md)
- [RestOrderReadDTO](docs/Model/RestOrderReadDTO.md)
- [RestOrderReadDTO2](docs/Model/RestOrderReadDTO2.md)
- [RestOrderReadDTO2Preferences](docs/Model/RestOrderReadDTO2Preferences.md)
- [RestOrderShipmentDTO](docs/Model/RestOrderShipmentDTO.md)
- [RestOrderShipmentDTO2](docs/Model/RestOrderShipmentDTO2.md)
- [RestOrderShipmentDTO3](docs/Model/RestOrderShipmentDTO3.md)
- [RestOrderWriteDTO](docs/Model/RestOrderWriteDTO.md)
- [RestStatusOrderDTO](docs/Model/RestStatusOrderDTO.md)
- [Tag](docs/Model/Tag.md)
- [Tags](docs/Model/Tags.md)
- [WhoamiModel](docs/Model/WhoamiModel.md)
- [WhoamiResponse](docs/Model/WhoamiResponse.md)

## Authorization

Authentication schemes defined for the API:
### OAuth2

- **Type**: `OAuth`
- **Flow**: `accessCode`
- **Authorization URL**: `https://CLIENTENDPOINT.apilo.com/rest/auth/token/`
- **Scopes**: 
    - **read**: Grants read access
    - **write**: Grants write access

### BasicAuth

- **Type**: HTTP basic authentication

## Tests

To run the tests, use:

```bash
composer install
vendor/bin/phpunit
```

## Author



## About this package

This PHP package is automatically generated by the [OpenAPI Generator](https://openapi-generator.tech) project:

- API version: `1.22.10.14`
- Build package: `org.openapitools.codegen.languages.PhpClientCodegen`

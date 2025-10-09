# Apilo\WarehouseApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**deleteRestWarehousePriceCalculatedDelete()**](WarehouseApi.md#deleteRestWarehousePriceCalculatedDelete) | **DELETE** /rest/api/warehouse/price-calculated/{product}/{price}/ | Delete price. |
| [**deleteRestWarehouseProductAttributeDelete()**](WarehouseApi.md#deleteRestWarehouseProductAttributeDelete) | **DELETE** /rest/api/warehouse/product/attributes/ | Product Attributes Delete. |
| [**deleteRestWarehouseProductDelete()**](WarehouseApi.md#deleteRestWarehouseProductDelete) | **DELETE** /rest/api/warehouse/product/{id}/ | Delete Product. |
| [**getRestWarehouseAttributeIndex()**](WarehouseApi.md#getRestWarehouseAttributeIndex) | **GET** /rest/api/warehouse/attribute/ | Attribute List. |
| [**getRestWarehouseCategoryIndex()**](WarehouseApi.md#getRestWarehouseCategoryIndex) | **GET** /rest/api/warehouse/category/ | Categories list. |
| [**getRestWarehousePriceCalculatedList()**](WarehouseApi.md#getRestWarehousePriceCalculatedList) | **GET** /rest/api/warehouse/price-calculated/ | Prices list. |
| [**getRestWarehousePriceIndex()**](WarehouseApi.md#getRestWarehousePriceIndex) | **GET** /rest/api/warehouse/price/ | Price lists. |
| [**getRestWarehouseProductAttributeIndex()**](WarehouseApi.md#getRestWarehouseProductAttributeIndex) | **GET** /rest/api/warehouse/product/attributes/ | Product attribute list. |
| [**getRestWarehouseProductDetails()**](WarehouseApi.md#getRestWarehouseProductDetails) | **GET** /rest/api/warehouse/product/{id}/ | Get Product detail. |
| [**getRestWarehouseProductIndex()**](WarehouseApi.md#getRestWarehouseProductIndex) | **GET** /rest/api/warehouse/product/ | Products list. |
| [**getRestWarehouseProductmediaGetproductmedia()**](WarehouseApi.md#getRestWarehouseProductmediaGetproductmedia) | **GET** /rest/api/warehouse/product/media/ | Products Media list. |
| [**patchRestWarehouseAttributeUpdate()**](WarehouseApi.md#patchRestWarehouseAttributeUpdate) | **PATCH** /rest/api/warehouse/attribute/ | Attribute update. |
| [**patchRestWarehouseProductAttributeUpdate()**](WarehouseApi.md#patchRestWarehouseProductAttributeUpdate) | **PATCH** /rest/api/warehouse/product/attributes/ | Product Attribute update. |
| [**patchRestWarehouseProductPut()**](WarehouseApi.md#patchRestWarehouseProductPut) | **PATCH** /rest/api/warehouse/product/ | Products PATCH update. |
| [**postRestWarehouseAttributeCreate()**](WarehouseApi.md#postRestWarehouseAttributeCreate) | **POST** /rest/api/warehouse/attribute/ | Attribute create. |
| [**postRestWarehouseCategoryCreate()**](WarehouseApi.md#postRestWarehouseCategoryCreate) | **POST** /rest/api/warehouse/category/ | Category create. |
| [**postRestWarehousePriceCalculatedCreateUpdate()**](WarehouseApi.md#postRestWarehousePriceCalculatedCreateUpdate) | **POST** /rest/api/warehouse/price-calculated/ | Price create and update. |
| [**postRestWarehouseProductCreate()**](WarehouseApi.md#postRestWarehouseProductCreate) | **POST** /rest/api/warehouse/product/ | Products create. |
| [**putRestWarehouseProductUpdate()**](WarehouseApi.md#putRestWarehouseProductUpdate) | **PUT** /rest/api/warehouse/product/ | Products data update. |


## `deleteRestWarehousePriceCalculatedDelete()`

```php
deleteRestWarehousePriceCalculatedDelete($product, $price): mixed
```

Delete price.

Delete product price

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: BearerAuth
$config = Apilo\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Apilo\Api\WarehouseApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$product = 'product_example'; // string | Unique product ID
$price = 'price_example'; // string | Unique price list ID

try {
    $result = $apiInstance->deleteRestWarehousePriceCalculatedDelete($product, $price);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WarehouseApi->deleteRestWarehousePriceCalculatedDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **product** | **string**| Unique product ID | |
| **price** | **string**| Unique price list ID | |

### Return type

**mixed**

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteRestWarehouseProductAttributeDelete()`

```php
deleteRestWarehouseProductAttributeDelete($rest_product_attributes_dto): mixed
```

Product Attributes Delete.

Delete a product attributes

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: BearerAuth
$config = Apilo\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Apilo\Api\WarehouseApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$rest_product_attributes_dto = new \Apilo\Model\RestProductAttributesDTO(); // \Apilo\Model\RestProductAttributesDTO

try {
    $result = $apiInstance->deleteRestWarehouseProductAttributeDelete($rest_product_attributes_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WarehouseApi->deleteRestWarehouseProductAttributeDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **rest_product_attributes_dto** | [**\Apilo\Model\RestProductAttributesDTO**](../Model/RestProductAttributesDTO.md)|  | |

### Return type

**mixed**

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteRestWarehouseProductDelete()`

```php
deleteRestWarehouseProductDelete($id): mixed
```

Delete Product.

Delete Product

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: BearerAuth
$config = Apilo\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Apilo\Api\WarehouseApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->deleteRestWarehouseProductDelete($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WarehouseApi->deleteRestWarehouseProductDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |

### Return type

**mixed**

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getRestWarehouseAttributeIndex()`

```php
getRestWarehouseAttributeIndex($offset, $limit): \Apilo\Model\RestAttributesIndexResponse
```

Attribute List.

List of attributes

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: BearerAuth
$config = Apilo\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Apilo\Api\WarehouseApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$offset = 56; // int
$limit = 56; // int

try {
    $result = $apiInstance->getRestWarehouseAttributeIndex($offset, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WarehouseApi->getRestWarehouseAttributeIndex: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **offset** | **int**|  | [optional] |
| **limit** | **int**|  | [optional] |

### Return type

[**\Apilo\Model\RestAttributesIndexResponse**](../Model/RestAttributesIndexResponse.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getRestWarehouseCategoryIndex()`

```php
getRestWarehouseCategoryIndex($id, $offset, $limit): \Apilo\Model\GetRestWarehouseCategoryIndex200Response
```

Categories list.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: BearerAuth
$config = Apilo\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Apilo\Api\WarehouseApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int
$offset = 56; // int
$limit = 56; // int

try {
    $result = $apiInstance->getRestWarehouseCategoryIndex($id, $offset, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WarehouseApi->getRestWarehouseCategoryIndex: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | [optional] |
| **offset** | **int**|  | [optional] |
| **limit** | **int**|  | [optional] |

### Return type

[**\Apilo\Model\GetRestWarehouseCategoryIndex200Response**](../Model/GetRestWarehouseCategoryIndex200Response.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getRestWarehousePriceCalculatedList()`

```php
getRestWarehousePriceCalculatedList($price, $offset, $limit): \Apilo\Model\Prices
```

Prices list.

List of prices

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: BearerAuth
$config = Apilo\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Apilo\Api\WarehouseApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$price = 56; // int
$offset = 56; // int
$limit = 56; // int

try {
    $result = $apiInstance->getRestWarehousePriceCalculatedList($price, $offset, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WarehouseApi->getRestWarehousePriceCalculatedList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **price** | **int**|  | |
| **offset** | **int**|  | [optional] |
| **limit** | **int**|  | [optional] |

### Return type

[**\Apilo\Model\Prices**](../Model/Prices.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getRestWarehousePriceIndex()`

```php
getRestWarehousePriceIndex(): \Apilo\Model\GetRestWarehousePriceIndex200Response
```

Price lists.

List of price lists

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: BearerAuth
$config = Apilo\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Apilo\Api\WarehouseApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getRestWarehousePriceIndex();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WarehouseApi->getRestWarehousePriceIndex: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Apilo\Model\GetRestWarehousePriceIndex200Response**](../Model/GetRestWarehousePriceIndex200Response.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getRestWarehouseProductAttributeIndex()`

```php
getRestWarehouseProductAttributeIndex($offset, $limit): \Apilo\Model\RestProductAttributeIndexResponse
```

Product attribute list.

list of product attributes

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: BearerAuth
$config = Apilo\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Apilo\Api\WarehouseApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$offset = 56; // int
$limit = 56; // int

try {
    $result = $apiInstance->getRestWarehouseProductAttributeIndex($offset, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WarehouseApi->getRestWarehouseProductAttributeIndex: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **offset** | **int**|  | [optional] |
| **limit** | **int**|  | [optional] |

### Return type

[**\Apilo\Model\RestProductAttributeIndexResponse**](../Model/RestProductAttributeIndexResponse.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getRestWarehouseProductDetails()`

```php
getRestWarehouseProductDetails($id): \Apilo\Model\ProductDetailModel
```

Get Product detail.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: BearerAuth
$config = Apilo\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Apilo\Api\WarehouseApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->getRestWarehouseProductDetails($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WarehouseApi->getRestWarehouseProductDetails: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |

### Return type

[**\Apilo\Model\ProductDetailModel**](../Model/ProductDetailModel.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getRestWarehouseProductIndex()`

```php
getRestWarehouseProductIndex($id, $sku, $name, $ean, $status, $offset, $limit): \Apilo\Model\GetProductsResponse
```

Products list.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: BearerAuth
$config = Apilo\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Apilo\Api\WarehouseApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int
$sku = 'sku_example'; // string
$name = 'name_example'; // string
$ean = 'ean_example'; // string
$status = 3.4; // float | Product status (`0-inactive`, `1-active`, `8-archive`)
$offset = 56; // int
$limit = 56; // int | Limit of returned results

try {
    $result = $apiInstance->getRestWarehouseProductIndex($id, $sku, $name, $ean, $status, $offset, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WarehouseApi->getRestWarehouseProductIndex: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | [optional] |
| **sku** | **string**|  | [optional] |
| **name** | **string**|  | [optional] |
| **ean** | **string**|  | [optional] |
| **status** | **float**| Product status (&#x60;0-inactive&#x60;, &#x60;1-active&#x60;, &#x60;8-archive&#x60;) | [optional] |
| **offset** | **int**|  | [optional] |
| **limit** | **int**| Limit of returned results | [optional] |

### Return type

[**\Apilo\Model\GetProductsResponse**](../Model/GetProductsResponse.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getRestWarehouseProductmediaGetproductmedia()`

```php
getRestWarehouseProductmediaGetproductmedia($only_main, $product_ids, $offset, $limit): \Apilo\Model\GetRestWarehouseProductmediaGetproductmedia200Response
```

Products Media list.

List of Product media

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: BearerAuth
$config = Apilo\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Apilo\Api\WarehouseApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$only_main = True; // bool
$product_ids = array(56); // int[]
$offset = 56; // int
$limit = 56; // int

try {
    $result = $apiInstance->getRestWarehouseProductmediaGetproductmedia($only_main, $product_ids, $offset, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WarehouseApi->getRestWarehouseProductmediaGetproductmedia: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **only_main** | **bool**|  | [optional] |
| **product_ids** | [**int[]**](../Model/int.md)|  | [optional] |
| **offset** | **int**|  | [optional] |
| **limit** | **int**|  | [optional] |

### Return type

[**\Apilo\Model\GetRestWarehouseProductmediaGetproductmedia200Response**](../Model/GetRestWarehouseProductmediaGetproductmedia200Response.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `patchRestWarehouseAttributeUpdate()`

```php
patchRestWarehouseAttributeUpdate($rest_attributes_dto2): \Apilo\Model\RestAttributesDTO2
```

Attribute update.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: BearerAuth
$config = Apilo\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Apilo\Api\WarehouseApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$rest_attributes_dto2 = new \Apilo\Model\RestAttributesDTO2(); // \Apilo\Model\RestAttributesDTO2 | Typ Wielu Wartości:     1 W celu utworzenia nowej wartości, wymagana jest podanie parametru attributeFeatures.id jako null,     2 W celu aktualicji istniejącej wartości wymagane jest podanie parametru attributeFeatures.id jako wartośc i podanie parametru value.     3 Nie podanie wartości, które powinny być zachowane, spowoduje ich usunięcie

try {
    $result = $apiInstance->patchRestWarehouseAttributeUpdate($rest_attributes_dto2);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WarehouseApi->patchRestWarehouseAttributeUpdate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **rest_attributes_dto2** | [**\Apilo\Model\RestAttributesDTO2**](../Model/RestAttributesDTO2.md)| Typ Wielu Wartości:     1 W celu utworzenia nowej wartości, wymagana jest podanie parametru attributeFeatures.id jako null,     2 W celu aktualicji istniejącej wartości wymagane jest podanie parametru attributeFeatures.id jako wartośc i podanie parametru value.     3 Nie podanie wartości, które powinny być zachowane, spowoduje ich usunięcie | [optional] |

### Return type

[**\Apilo\Model\RestAttributesDTO2**](../Model/RestAttributesDTO2.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `patchRestWarehouseProductAttributeUpdate()`

```php
patchRestWarehouseProductAttributeUpdate($rest_product_attributes_dto2): \Apilo\Model\RestProductAttributeIndexResponse2
```

Product Attribute update.

Update a product attributes

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: BearerAuth
$config = Apilo\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Apilo\Api\WarehouseApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$rest_product_attributes_dto2 = new \Apilo\Model\RestProductAttributesDTO2(); // \Apilo\Model\RestProductAttributesDTO2 | Product Attributes

try {
    $result = $apiInstance->patchRestWarehouseProductAttributeUpdate($rest_product_attributes_dto2);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WarehouseApi->patchRestWarehouseProductAttributeUpdate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **rest_product_attributes_dto2** | [**\Apilo\Model\RestProductAttributesDTO2**](../Model/RestProductAttributesDTO2.md)| Product Attributes | |

### Return type

[**\Apilo\Model\RestProductAttributeIndexResponse2**](../Model/RestProductAttributeIndexResponse2.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `patchRestWarehouseProductPut()`

```php
patchRestWarehouseProductPut($product_base_model): mixed
```

Products PATCH update.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: BearerAuth
$config = Apilo\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Apilo\Api\WarehouseApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$product_base_model = array(new \Apilo\Model\ProductBaseModel()); // \Apilo\Model\ProductBaseModel[] | Maksymalnie 512 rekordów, aktualizacja po id lub originalCode

try {
    $result = $apiInstance->patchRestWarehouseProductPut($product_base_model);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WarehouseApi->patchRestWarehouseProductPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **product_base_model** | [**\Apilo\Model\ProductBaseModel[]**](../Model/ProductBaseModel.md)| Maksymalnie 512 rekordów, aktualizacja po id lub originalCode | [optional] |

### Return type

**mixed**

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postRestWarehouseAttributeCreate()`

```php
postRestWarehouseAttributeCreate($rest_attributes_dto): mixed
```

Attribute create.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: BearerAuth
$config = Apilo\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Apilo\Api\WarehouseApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$rest_attributes_dto = new \Apilo\Model\RestAttributesDTO(); // \Apilo\Model\RestAttributesDTO

try {
    $result = $apiInstance->postRestWarehouseAttributeCreate($rest_attributes_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WarehouseApi->postRestWarehouseAttributeCreate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **rest_attributes_dto** | [**\Apilo\Model\RestAttributesDTO**](../Model/RestAttributesDTO.md)|  | [optional] |

### Return type

**mixed**

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postRestWarehouseCategoryCreate()`

```php
postRestWarehouseCategoryCreate($category_create_model): mixed
```

Category create.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: BearerAuth
$config = Apilo\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Apilo\Api\WarehouseApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$category_create_model = new \Apilo\Model\CategoryCreateModel(); // \Apilo\Model\CategoryCreateModel | Category Creation

try {
    $result = $apiInstance->postRestWarehouseCategoryCreate($category_create_model);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WarehouseApi->postRestWarehouseCategoryCreate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **category_create_model** | [**\Apilo\Model\CategoryCreateModel**](../Model/CategoryCreateModel.md)| Category Creation | |

### Return type

**mixed**

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postRestWarehousePriceCalculatedCreateUpdate()`

```php
postRestWarehousePriceCalculatedCreateUpdate($price_calculated_post): \Apilo\Model\IdModel
```

Price create and update.

Create/update product price

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: BearerAuth
$config = Apilo\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Apilo\Api\WarehouseApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$price_calculated_post = new \Apilo\Model\PriceCalculatedPost(); // \Apilo\Model\PriceCalculatedPost

try {
    $result = $apiInstance->postRestWarehousePriceCalculatedCreateUpdate($price_calculated_post);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WarehouseApi->postRestWarehousePriceCalculatedCreateUpdate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **price_calculated_post** | [**\Apilo\Model\PriceCalculatedPost**](../Model/PriceCalculatedPost.md)|  | |

### Return type

[**\Apilo\Model\IdModel**](../Model/IdModel.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postRestWarehouseProductCreate()`

```php
postRestWarehouseProductCreate($products): \Apilo\Model\ProductsNotCreateResponse
```

Products create.

Uwaga: Pole groupName jest deprecated i zostanie usunięte w przyszłości, Zamiast niego należy używać pola name, ponieważ obecnie obsługuje ono oba wymagania dotyczące nazewnictwa produktów.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: BearerAuth
$config = Apilo\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Apilo\Api\WarehouseApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$products = array(new \Apilo\Model\Products()); // \Apilo\Model\Products[] | 1 Ponieważ pojedynczy produkt tworzony jest w systemie Apilo zawsze jako grupa     produktów z jedną kombinacją produktu, domyślnie nazwa grupy jest również nazwą     produktu. Aby “sterować” nazwą grupy produktów należy wypełnić dodatkowe pole o nazwie     groupName (np. groupName=Rolki agresywne EXTREM II name=Kolor niebieski      2 Przekazana tablica zdjęć może być tablicą asocjacyjną gdzie kluczem jest zewnętrzny     identyfikator zdjęcia (przydatne przy aktualizacji produktu - zostaną dodane tylko     nieistniejące pozycje w systemie Apilo), a wartością adres URL zdjęcia.      *

try {
    $result = $apiInstance->postRestWarehouseProductCreate($products);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WarehouseApi->postRestWarehouseProductCreate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **products** | [**\Apilo\Model\Products[]**](../Model/Products.md)| 1 Ponieważ pojedynczy produkt tworzony jest w systemie Apilo zawsze jako grupa     produktów z jedną kombinacją produktu, domyślnie nazwa grupy jest również nazwą     produktu. Aby “sterować” nazwą grupy produktów należy wypełnić dodatkowe pole o nazwie     groupName (np. groupName&#x3D;Rolki agresywne EXTREM II name&#x3D;Kolor niebieski      2 Przekazana tablica zdjęć może być tablicą asocjacyjną gdzie kluczem jest zewnętrzny     identyfikator zdjęcia (przydatne przy aktualizacji produktu - zostaną dodane tylko     nieistniejące pozycje w systemie Apilo), a wartością adres URL zdjęcia.      * | |

### Return type

[**\Apilo\Model\ProductsNotCreateResponse**](../Model/ProductsNotCreateResponse.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `putRestWarehouseProductUpdate()`

```php
putRestWarehouseProductUpdate($product_put): mixed
```

Products data update.

Uwaga: Pole groupName jest deprecated i zostanie usunięte w przyszłości, Zamiast niego należy używać pola name, ponieważ obecnie obsługuje ono oba wymagania dotyczące nazewnictwa produktów.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: BearerAuth
$config = Apilo\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Apilo\Api\WarehouseApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$product_put = array(new \Apilo\Model\ProductPut()); // \Apilo\Model\ProductPut[] | Aktualizacja danych identyfikacyjnych produktu możliwa jest wg. następujących zasad:     ● Nie można dokonać zmiany pól id oraz originalCode ,     ● Wypełniając pole id lub originalCode można dokonać aktualizacji wszystkich     pozostałych danych identyfikacyjnych (w tym sku oraz ean),     ● nie przekazując pól id oraz originalCode można dokonać aktualizacji tylko danych     nie identyfikacyjnych produktu (za wyjątkiem ean)

try {
    $result = $apiInstance->putRestWarehouseProductUpdate($product_put);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WarehouseApi->putRestWarehouseProductUpdate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **product_put** | [**\Apilo\Model\ProductPut[]**](../Model/ProductPut.md)| Aktualizacja danych identyfikacyjnych produktu możliwa jest wg. następujących zasad:     ● Nie można dokonać zmiany pól id oraz originalCode ,     ● Wypełniając pole id lub originalCode można dokonać aktualizacji wszystkich     pozostałych danych identyfikacyjnych (w tym sku oraz ean),     ● nie przekazując pól id oraz originalCode można dokonać aktualizacji tylko danych     nie identyfikacyjnych produktu (za wyjątkiem ean) | [optional] |

### Return type

**mixed**

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

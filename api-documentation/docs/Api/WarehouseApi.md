# OpenAPI\Client\WarehouseApi

All URIs are relative to https://erpbox.devo/app_dev.php, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**restApiWarehouseAttributePost()**](WarehouseApi.md#restApiWarehouseAttributePost) | **POST** /rest/api/warehouse/attribute/ | Attribute create |
| [**restApiWarehouseCategoryGet()**](WarehouseApi.md#restApiWarehouseCategoryGet) | **GET** /rest/api/warehouse/category/ | Categories list |
| [**restApiWarehouseCategoryPost()**](WarehouseApi.md#restApiWarehouseCategoryPost) | **POST** /rest/api/warehouse/category/ | Category create |
| [**restApiWarehousePriceCalculatedGet()**](WarehouseApi.md#restApiWarehousePriceCalculatedGet) | **GET** /rest/api/warehouse/price-calculated/ | Prices list |
| [**restApiWarehousePriceCalculatedPost()**](WarehouseApi.md#restApiWarehousePriceCalculatedPost) | **POST** /rest/api/warehouse/price-calculated/ | Price create and update |
| [**restApiWarehousePriceCalculatedProductPriceDelete()**](WarehouseApi.md#restApiWarehousePriceCalculatedProductPriceDelete) | **DELETE** /rest/api/warehouse/price-calculated/{product}/{price}/ | Delete price |
| [**restApiWarehousePriceGet()**](WarehouseApi.md#restApiWarehousePriceGet) | **GET** /rest/api/warehouse/price/ | Price lists |
| [**restApiWarehouseProductGet()**](WarehouseApi.md#restApiWarehouseProductGet) | **GET** /rest/api/warehouse/product/ | Products list |
| [**restApiWarehouseProductIdDelete()**](WarehouseApi.md#restApiWarehouseProductIdDelete) | **DELETE** /rest/api/warehouse/product/{id}/ | Delete Product |
| [**restApiWarehouseProductIdGet()**](WarehouseApi.md#restApiWarehouseProductIdGet) | **GET** /rest/api/warehouse/product/{id}/ | Get Product detail |
| [**restApiWarehouseProductPatch()**](WarehouseApi.md#restApiWarehouseProductPatch) | **PATCH** /rest/api/warehouse/product/ | Products PATCH update |
| [**restApiWarehouseProductPost()**](WarehouseApi.md#restApiWarehouseProductPost) | **POST** /rest/api/warehouse/product/ | Products create |
| [**restApiWarehouseProductPut()**](WarehouseApi.md#restApiWarehouseProductPut) | **PUT** /rest/api/warehouse/product/ | Products data update |


## `restApiWarehouseAttributePost()`

```php
restApiWarehouseAttributePost()
```

Attribute create

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\WarehouseApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $apiInstance->restApiWarehouseAttributePost();
} catch (Exception $e) {
    echo 'Exception when calling WarehouseApi->restApiWarehouseAttributePost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

void (empty response body)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restApiWarehouseCategoryGet()`

```php
restApiWarehouseCategoryGet($id, $offset, $limit): \OpenAPI\Client\Model\GetCategoriesResponse
```

Categories list

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\WarehouseApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int
$offset = 56; // int | Limit of returned results
$limit = 56; // int | Position indicator (0-beginning, 1-skips one record, 256 - skips 256 records), max 2000 records

try {
    $result = $apiInstance->restApiWarehouseCategoryGet($id, $offset, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WarehouseApi->restApiWarehouseCategoryGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | [optional] |
| **offset** | **int**| Limit of returned results | [optional] |
| **limit** | **int**| Position indicator (0-beginning, 1-skips one record, 256 - skips 256 records), max 2000 records | [optional] |

### Return type

[**\OpenAPI\Client\Model\GetCategoriesResponse**](../Model/GetCategoriesResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restApiWarehouseCategoryPost()`

```php
restApiWarehouseCategoryPost($body)
```

Category create

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\WarehouseApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = array(new \OpenAPI\Client\Model\CategoryCreateModel()); // \OpenAPI\Client\Model\CategoryCreateModel[]

try {
    $apiInstance->restApiWarehouseCategoryPost($body);
} catch (Exception $e) {
    echo 'Exception when calling WarehouseApi->restApiWarehouseCategoryPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\OpenAPI\Client\Model\CategoryCreateModel[]**](../Model/CategoryCreateModel.md)|  | |

### Return type

void (empty response body)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restApiWarehousePriceCalculatedGet()`

```php
restApiWarehousePriceCalculatedGet($price, $offset, $limit): \OpenAPI\Client\Model\Prices
```

Prices list

List of prices

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\WarehouseApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$price = 56; // int | Price list ID
$offset = 56; // int | Start on record
$limit = 56; // int | Limit of returned results, max 2000 records

try {
    $result = $apiInstance->restApiWarehousePriceCalculatedGet($price, $offset, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WarehouseApi->restApiWarehousePriceCalculatedGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **price** | **int**| Price list ID | |
| **offset** | **int**| Start on record | [optional] |
| **limit** | **int**| Limit of returned results, max 2000 records | [optional] |

### Return type

[**\OpenAPI\Client\Model\Prices**](../Model/Prices.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restApiWarehousePriceCalculatedPost()`

```php
restApiWarehousePriceCalculatedPost($body): \OpenAPI\Client\Model\IdModel
```

Price create and update

Create/update product price

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\WarehouseApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \OpenAPI\Client\Model\PriceCalculatedPost(); // \OpenAPI\Client\Model\PriceCalculatedPost

try {
    $result = $apiInstance->restApiWarehousePriceCalculatedPost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WarehouseApi->restApiWarehousePriceCalculatedPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\OpenAPI\Client\Model\PriceCalculatedPost**](../Model/PriceCalculatedPost.md)|  | |

### Return type

[**\OpenAPI\Client\Model\IdModel**](../Model/IdModel.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restApiWarehousePriceCalculatedProductPriceDelete()`

```php
restApiWarehousePriceCalculatedProductPriceDelete($product, $price)
```

Delete price

Delete product price

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\WarehouseApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$product = 56; // int | Unique product ID
$price = 56; // int | Unique price list ID

try {
    $apiInstance->restApiWarehousePriceCalculatedProductPriceDelete($product, $price);
} catch (Exception $e) {
    echo 'Exception when calling WarehouseApi->restApiWarehousePriceCalculatedProductPriceDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **product** | **int**| Unique product ID | |
| **price** | **int**| Unique price list ID | |

### Return type

void (empty response body)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restApiWarehousePriceGet()`

```php
restApiWarehousePriceGet(): \OpenAPI\Client\Model\PriceLists
```

Price lists

List of price lists

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\WarehouseApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->restApiWarehousePriceGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WarehouseApi->restApiWarehousePriceGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\OpenAPI\Client\Model\PriceLists**](../Model/PriceLists.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restApiWarehouseProductGet()`

```php
restApiWarehouseProductGet($id, $sku, $name, $ean, $status, $offset, $limit): \OpenAPI\Client\Model\GetProductsResponse
```

Products list

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\WarehouseApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int
$sku = 'sku_example'; // string
$name = 'name_example'; // string
$ean = 'ean_example'; // string
$status = 56; // int | Product status (`0-inactive`, `1-active`, `8-archive`)
$offset = 56; // int | Limit of returned results
$limit = 56; // int | Position indicator (0-beginning, 1-skips one record, 256 - skips 256 records), max 2000 records

try {
    $result = $apiInstance->restApiWarehouseProductGet($id, $sku, $name, $ean, $status, $offset, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WarehouseApi->restApiWarehouseProductGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | [optional] |
| **sku** | **string**|  | [optional] |
| **name** | **string**|  | [optional] |
| **ean** | **string**|  | [optional] |
| **status** | **int**| Product status (&#x60;0-inactive&#x60;, &#x60;1-active&#x60;, &#x60;8-archive&#x60;) | [optional] |
| **offset** | **int**| Limit of returned results | [optional] |
| **limit** | **int**| Position indicator (0-beginning, 1-skips one record, 256 - skips 256 records), max 2000 records | [optional] |

### Return type

[**\OpenAPI\Client\Model\GetProductsResponse**](../Model/GetProductsResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restApiWarehouseProductIdDelete()`

```php
restApiWarehouseProductIdDelete($id)
```

Delete Product

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\WarehouseApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $apiInstance->restApiWarehouseProductIdDelete($id);
} catch (Exception $e) {
    echo 'Exception when calling WarehouseApi->restApiWarehouseProductIdDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |

### Return type

void (empty response body)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restApiWarehouseProductIdGet()`

```php
restApiWarehouseProductIdGet($id): \OpenAPI\Client\Model\ProductDetailModel
```

Get Product detail

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\WarehouseApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->restApiWarehouseProductIdGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WarehouseApi->restApiWarehouseProductIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |

### Return type

[**\OpenAPI\Client\Model\ProductDetailModel**](../Model/ProductDetailModel.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restApiWarehouseProductPatch()`

```php
restApiWarehouseProductPatch($body)
```

Products PATCH update

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\WarehouseApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = array(new \OpenAPI\Client\Model\ProductBaseModel()); // \OpenAPI\Client\Model\ProductBaseModel[] | Maksymalnie 512 rekordów, aktualizacja po id lub originalCode

try {
    $apiInstance->restApiWarehouseProductPatch($body);
} catch (Exception $e) {
    echo 'Exception when calling WarehouseApi->restApiWarehouseProductPatch: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\OpenAPI\Client\Model\ProductBaseModel[]**](../Model/ProductBaseModel.md)| Maksymalnie 512 rekordów, aktualizacja po id lub originalCode | [optional] |

### Return type

void (empty response body)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restApiWarehouseProductPost()`

```php
restApiWarehouseProductPost($body): \OpenAPI\Client\Model\ProductsNotCreateResponse
```

Products create

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\WarehouseApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = array(new \OpenAPI\Client\Model\Products()); // \OpenAPI\Client\Model\Products[] | 1 Ponieważ pojedynczy produkt tworzony jest w systemie Apilo zawsze jako grupa     produktów z jedną kombinacją produktu, domyślnie nazwa grupy jest również nazwą     produktu. Aby “sterować” nazwą grupy produktów należy wypełnić dodatkowe pole o nazwie     groupName (np. groupName=Rolki agresywne EXTREM II name=Kolor niebieski      2 Przekazana tablica zdjęć może być tablicą asocjacyjną gdzie kluczem jest zewnętrzny     identyfikator zdjęcia (przydatne przy aktualizacji produktu - zostaną dodane tylko     nieistniejące pozycje w systemie Apilo), a wartością adres URL zdjęcia.

try {
    $result = $apiInstance->restApiWarehouseProductPost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WarehouseApi->restApiWarehouseProductPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\OpenAPI\Client\Model\Products[]**](../Model/Products.md)| 1 Ponieważ pojedynczy produkt tworzony jest w systemie Apilo zawsze jako grupa     produktów z jedną kombinacją produktu, domyślnie nazwa grupy jest również nazwą     produktu. Aby “sterować” nazwą grupy produktów należy wypełnić dodatkowe pole o nazwie     groupName (np. groupName&#x3D;Rolki agresywne EXTREM II name&#x3D;Kolor niebieski      2 Przekazana tablica zdjęć może być tablicą asocjacyjną gdzie kluczem jest zewnętrzny     identyfikator zdjęcia (przydatne przy aktualizacji produktu - zostaną dodane tylko     nieistniejące pozycje w systemie Apilo), a wartością adres URL zdjęcia. | |

### Return type

[**\OpenAPI\Client\Model\ProductsNotCreateResponse**](../Model/ProductsNotCreateResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restApiWarehouseProductPut()`

```php
restApiWarehouseProductPut($body)
```

Products data update

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\WarehouseApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = array(new \OpenAPI\Client\Model\ProductPut()); // \OpenAPI\Client\Model\ProductPut[] | Aktualizacja danych identyfikacyjnych produktu możliwa jest wg. następujących zasad:     ● Nie można dokonać zmiany pól id oraz originalCode ,     ● Wypełniając pole id lub originalCode można dokonać aktualizacji wszystkich     pozostałych danych identyfikacyjnych (w tym sku oraz ean),     ● nie przekazując pól id oraz originalCode można dokonać aktualizacji tylko danych     nie identyfikacyjnych produktu (za wyjątkiem ean)

try {
    $apiInstance->restApiWarehouseProductPut($body);
} catch (Exception $e) {
    echo 'Exception when calling WarehouseApi->restApiWarehouseProductPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\OpenAPI\Client\Model\ProductPut[]**](../Model/ProductPut.md)| Aktualizacja danych identyfikacyjnych produktu możliwa jest wg. następujących zasad:     ● Nie można dokonać zmiany pól id oraz originalCode ,     ● Wypełniając pole id lub originalCode można dokonać aktualizacji wszystkich     pozostałych danych identyfikacyjnych (w tym sku oraz ean),     ● nie przekazując pól id oraz originalCode można dokonać aktualizacji tylko danych     nie identyfikacyjnych produktu (za wyjątkiem ean) | [optional] |

### Return type

void (empty response body)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

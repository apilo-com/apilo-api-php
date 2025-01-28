# Apilo\SaleApi

All URIs are relative to https://ENDPOINT.apilo.com/ (ENDPOINT is an individual client address), except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getRestSaleAuctionIndex()**](SaleApi.md#getRestSaleAuctionIndex) | **GET** /rest/api/sale/auction/ | Get auctions list. |
| [**getRestSaleIndex()**](SaleApi.md#getRestSaleIndex) | **GET** /rest/api/sale/ | Get list of sales channels. |


## `getRestSaleAuctionIndex()`

```php
getRestSaleAuctionIndex(): mixed
```

Get auctions list.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: BearerAuth
$config = Apilo\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Apilo\Api\SaleApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getRestSaleAuctionIndex();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SaleApi->getRestSaleAuctionIndex: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

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

## `getRestSaleIndex()`

```php
getRestSaleIndex(): mixed
```

Get list of sales channels.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: BearerAuth
$config = Apilo\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Apilo\Api\SaleApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getRestSaleIndex();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SaleApi->getRestSaleIndex: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

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

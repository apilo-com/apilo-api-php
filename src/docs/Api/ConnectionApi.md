# Apilo\ConnectionApi

All URIs are relative to https://ENDPOINT.apilo.com/ (ENDPOINT is an individual client address), except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getRestIndexIndex()**](ConnectionApi.md#getRestIndexIndex) | **GET** /rest/api/ | Connection test. |
| [**getRestIndexWhoami()**](ConnectionApi.md#getRestIndexWhoami) | **GET** /rest/api/whoami/ | Connection info. |


## `getRestIndexIndex()`

```php
getRestIndexIndex(): \Apilo\Model\HelloResponse
```

Connection test.

Test Api

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: BearerAuth
$config = Apilo\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Apilo\Api\ConnectionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getRestIndexIndex();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConnectionApi->getRestIndexIndex: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Apilo\Model\HelloResponse**](../Model/HelloResponse.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getRestIndexWhoami()`

```php
getRestIndexWhoami(): \Apilo\Model\ContentDTO
```

Connection info.

Informacje o połączeniu

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: BearerAuth
$config = Apilo\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Apilo\Api\ConnectionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getRestIndexWhoami();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConnectionApi->getRestIndexWhoami: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Apilo\Model\ContentDTO**](../Model/ContentDTO.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

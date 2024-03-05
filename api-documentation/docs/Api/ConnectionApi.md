# OpenAPI\Client\ConnectionApi

All URIs are relative to https://erpbox.devo/app_dev.php, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**restApiGet()**](ConnectionApi.md#restApiGet) | **GET** /rest/api/ | Connection test |
| [**restApiWhoamiGet()**](ConnectionApi.md#restApiWhoamiGet) | **GET** /rest/api/whoami/ | Connection info |


## `restApiGet()`

```php
restApiGet(): \OpenAPI\Client\Model\HelloResponse
```

Connection test

Test Api

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ConnectionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->restApiGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConnectionApi->restApiGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\OpenAPI\Client\Model\HelloResponse**](../Model/HelloResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restApiWhoamiGet()`

```php
restApiWhoamiGet(): \OpenAPI\Client\Model\WhoamiResponse
```

Connection info

Informacje o połączeniu

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ConnectionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->restApiWhoamiGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConnectionApi->restApiWhoamiGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\OpenAPI\Client\Model\WhoamiResponse**](../Model/WhoamiResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

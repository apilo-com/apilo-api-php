# OpenAPI\Client\AuthorizationApi

All URIs are relative to https://ENDPOINT.apilo.com/ (ENDPOINT is an individual client address), except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**restApiTestAuthTokenExpirationGet()**](AuthorizationApi.md#restApiTestAuthTokenExpirationGet) | **GET** /rest/api/test/auth/token/expiration/ | Expiration test resource |
| [**restAuthTokenGet()**](AuthorizationApi.md#restAuthTokenGet) | **GET** /rest/auth/token/ | Deprecated authorization method GET |
| [**restAuthTokenPost()**](AuthorizationApi.md#restAuthTokenPost) | **POST** /rest/auth/token/ | Obtaining access_token and refresh_token tokens |


## `restApiTestAuthTokenExpirationGet()`

```php
restApiTestAuthTokenExpirationGet()
```

Expiration test resource

Access and refresh token

### Example

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

### Parameters

This endpoint does not need any parameter.

### Return type

void (empty response body)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restAuthTokenGet()`

```php
restAuthTokenGet()
```

Deprecated authorization method GET

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\AuthorizationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $apiInstance->restAuthTokenGet();
} catch (Exception $e) {
    echo 'Exception when calling AuthorizationApi->restAuthTokenGet: ', $e->getMessage(), PHP_EOL;
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
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restAuthTokenPost()`

```php
restAuthTokenPost($payload): \OpenAPI\Client\Model\AuthorizationResponse
```

Obtaining access_token and refresh_token tokens

This method allows you to get <code>access_token</code> and <code>refresh_token</code> through two scenarios:<br><ul>     <li> exchanging <code>authorization_code</code> for tokens</li>     <li> exchange of <code>refresh_token</code> for tokens (token refresh operation)</li>     </ul>

### Example

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
$payload = new \OpenAPI\Client\Model\RestAuthTokenPostRequest(); // \OpenAPI\Client\Model\RestAuthTokenPostRequest

try {
    $result = $apiInstance->restAuthTokenPost($payload);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuthorizationApi->restAuthTokenPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **payload** | [**\OpenAPI\Client\Model\RestAuthTokenPostRequest**](../Model/RestAuthTokenPostRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\AuthorizationResponse**](../Model/AuthorizationResponse.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

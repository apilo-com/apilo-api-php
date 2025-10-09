# Apilo\AuthorizationApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**postRestAuthTokenpost()**](AuthorizationApi.md#postRestAuthTokenpost) | **POST** /rest/auth/token/ | Obtaining access_token and refresh_token tokens. |


## `postRestAuthTokenpost()`

```php
postRestAuthTokenpost($authorization_request): \Apilo\Model\AuthorizationResponse
```

Obtaining access_token and refresh_token tokens.

This method allows you to get <code>access_token</code> and <code>refresh_token</code> through two scenarios:<br>     <ul>     <li> exchanging <code>authorization_code</code> for tokens</li>     <li> exchange of <code>refresh_token</code> for tokens (token refresh operation)</li>     </ul>

### Example

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

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **authorization_request** | [**\Apilo\Model\AuthorizationRequest**](../Model/AuthorizationRequest.md)| Obtaining access_token and refresh_token tokens | |

### Return type

[**\Apilo\Model\AuthorizationResponse**](../Model/AuthorizationResponse.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

# OpenAPI\Client\MediaApi

All URIs are relative to https://erpbox.devo/app_dev.php, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**restApiMediaPost()**](MediaApi.md#restApiMediaPost) | **POST** /rest/api/media/ | Create new media attachment |


## `restApiMediaPost()`

```php
restApiMediaPost($body, $content_disposition): \OpenAPI\Client\Model\Media
```

Create new media attachment

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\MediaApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = "/path/to/file.txt"; // \SplFileObject | You can create new media attachment for files with type application/pdf, image/jpeg, image/png, image/gif, image/webp
$content_disposition = 'content_disposition_example'; // string | Extra file parameters (e.g. <code>Content-Disposition: filename=invoice.pdf</code>)

try {
    $result = $apiInstance->restApiMediaPost($body, $content_disposition);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MediaApi->restApiMediaPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | **\SplFileObject****\SplFileObject**| You can create new media attachment for files with type application/pdf, image/jpeg, image/png, image/gif, image/webp | |
| **content_disposition** | **string**| Extra file parameters (e.g. &lt;code&gt;Content-Disposition: filename&#x3D;invoice.pdf&lt;/code&gt;) | [optional] |

### Return type

[**\OpenAPI\Client\Model\Media**](../Model/Media.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: `application/pdf`, `image/jpeg`, `image/png`, `image/webp`, `image/gif`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

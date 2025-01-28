# Apilo\MediaApi

All URIs are relative to https://ENDPOINT.apilo.com/ (ENDPOINT is an individual client address), except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getRestMediaGet()**](MediaApi.md#getRestMediaGet) | **GET** /rest/api/media/{uuid}/ | Get media. |
| [**postRestMediaNew()**](MediaApi.md#postRestMediaNew) | **POST** /rest/api/media/ | Create new media attachment. |


## `getRestMediaGet()`

```php
getRestMediaGet($uuid)
```

Get media.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Apilo\Api\MediaApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$uuid = 'uuid_example'; // string | UUID Media

try {
    $apiInstance->getRestMediaGet($uuid);
} catch (Exception $e) {
    echo 'Exception when calling MediaApi->getRestMediaGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | **string**| UUID Media | |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postRestMediaNew()`

```php
postRestMediaNew($body, $content_disposition): \Apilo\Model\Media
```

Create new media attachment.

Create new media attachment

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: BearerAuth
$config = Apilo\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Apilo\Api\MediaApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = '/path/to/file.txt'; // \SplFileObject | You can create new media attachment for files with type application/pdf, image/jpeg, image/png, image/gif, image/webp
$content_disposition = 'content_disposition_example'; // string | Extra file parameters (e.g. 'Content-Disposition: filename=invoice.pdf')

try {
    $result = $apiInstance->postRestMediaNew($body, $content_disposition);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MediaApi->postRestMediaNew: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | **\SplFileObject****\SplFileObject**| You can create new media attachment for files with type application/pdf, image/jpeg, image/png, image/gif, image/webp | |
| **content_disposition** | **string**| Extra file parameters (e.g. &#39;Content-Disposition: filename&#x3D;invoice.pdf&#39;) | [optional] |

### Return type

[**\Apilo\Model\Media**](../Model/Media.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: `application/octet-stream`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

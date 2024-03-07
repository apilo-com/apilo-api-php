# OpenAPI\Client\FinanceDocumentApi

All URIs are relative to https://ENDPOINT.apilo.com/ (ENDPOINT is an individual client address), except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**restApiFinanceDocumentConfigsGet()**](FinanceDocumentApi.md#restApiFinanceDocumentConfigsGet) | **GET** /rest/api/finance/document-configs/ | Get accounting document numbering series |
| [**restApiFinanceDocumentsGet()**](FinanceDocumentApi.md#restApiFinanceDocumentsGet) | **GET** /rest/api/finance/documents/ | Get list of accounting documents |
| [**restApiFinanceDocumentsIdDocumentsIdExternalDelete()**](FinanceDocumentApi.md#restApiFinanceDocumentsIdDocumentsIdExternalDelete) | **DELETE** /rest/api/finance/documents/{id}/documents/{idExternal}/ | Delete a document for accounting documents |
| [**restApiFinanceDocumentsIdDocumentsPost()**](FinanceDocumentApi.md#restApiFinanceDocumentsIdDocumentsPost) | **POST** /rest/api/finance/documents/{id}/documents/ | Create a document for accounting documents |


## `restApiFinanceDocumentConfigsGet()`

```php
restApiFinanceDocumentConfigsGet($type): \OpenAPI\Client\Model\RestApiFinanceDocumentConfigsGet200Response
```

Get accounting document numbering series

List of numbering series

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\FinanceDocumentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$type = 56; // int | Type of accounting document (1-Invoice, 5-Receipt, 10-Proforma, 31-Corrective invoice)

try {
    $result = $apiInstance->restApiFinanceDocumentConfigsGet($type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FinanceDocumentApi->restApiFinanceDocumentConfigsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **type** | **int**| Type of accounting document (1-Invoice, 5-Receipt, 10-Proforma, 31-Corrective invoice) | [optional] |

### Return type

[**\OpenAPI\Client\Model\RestApiFinanceDocumentConfigsGet200Response**](../Model/RestApiFinanceDocumentConfigsGet200Response.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restApiFinanceDocumentsGet()`

```php
restApiFinanceDocumentsGet($type, $has_document_document_type, $has_not_document_document_type, $is_fiscal, $document_config): \OpenAPI\Client\Model\RestApiFinanceDocumentsGet200Response
```

Get list of accounting documents

List of accounting documents

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\FinanceDocumentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$type = 'type_example'; // string | Type of accounting document (1-Invoice, 5-Receipt, 10-Proforma, 31-Corrective invoice)
$has_document_document_type = 56; // int | A DocumentDocument of the specified type is created (1-printed, 2-exported to an external platform)
$has_not_document_document_type = 56; // int | A DocumentDocument of the specified type is not created (1-printed, 2-exported to an external platform)
$is_fiscal = True; // bool | Only for type Receipt type (type=5)
$document_config = array(56); // int[] | ID of <a href='#tag/finance_document/paths/~1rest~1api~1finance~1document-configs~1/get'>accounting document numbering series</a>

try {
    $result = $apiInstance->restApiFinanceDocumentsGet($type, $has_document_document_type, $has_not_document_document_type, $is_fiscal, $document_config);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FinanceDocumentApi->restApiFinanceDocumentsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **type** | **string**| Type of accounting document (1-Invoice, 5-Receipt, 10-Proforma, 31-Corrective invoice) | [optional] |
| **has_document_document_type** | **int**| A DocumentDocument of the specified type is created (1-printed, 2-exported to an external platform) | [optional] |
| **has_not_document_document_type** | **int**| A DocumentDocument of the specified type is not created (1-printed, 2-exported to an external platform) | [optional] |
| **is_fiscal** | **bool**| Only for type Receipt type (type&#x3D;5) | [optional] |
| **document_config** | [**int[]**](../Model/int.md)| ID of &lt;a href&#x3D;&#39;#tag/finance_document/paths/~1rest~1api~1finance~1document-configs~1/get&#39;&gt;accounting document numbering series&lt;/a&gt; | [optional] |

### Return type

[**\OpenAPI\Client\Model\RestApiFinanceDocumentsGet200Response**](../Model/RestApiFinanceDocumentsGet200Response.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restApiFinanceDocumentsIdDocumentsIdExternalDelete()`

```php
restApiFinanceDocumentsIdDocumentsIdExternalDelete($id, $id_external)
```

Delete a document for accounting documents

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\FinanceDocumentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Internal ID of the document (e.g. 31)
$id_external = 56; // int | Unique document ID (e.g. 24)

try {
    $apiInstance->restApiFinanceDocumentsIdDocumentsIdExternalDelete($id, $id_external);
} catch (Exception $e) {
    echo 'Exception when calling FinanceDocumentApi->restApiFinanceDocumentsIdDocumentsIdExternalDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| Internal ID of the document (e.g. 31) | |
| **id_external** | **int**| Unique document ID (e.g. 24) | |

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

## `restApiFinanceDocumentsIdDocumentsPost()`

```php
restApiFinanceDocumentsIdDocumentsPost($id, $body): object
```

Create a document for accounting documents

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\FinanceDocumentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string
$body = new \OpenAPI\Client\Model\RestDocumentDocumentDTO2(); // \OpenAPI\Client\Model\RestDocumentDocumentDTO2

try {
    $result = $apiInstance->restApiFinanceDocumentsIdDocumentsPost($id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FinanceDocumentApi->restApiFinanceDocumentsIdDocumentsPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |
| **body** | [**\OpenAPI\Client\Model\RestDocumentDocumentDTO2**](../Model/RestDocumentDocumentDTO2.md)|  | |

### Return type

**object**

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

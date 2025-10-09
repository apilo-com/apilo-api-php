# Apilo\FinanceDocumentApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**deleteRestFinanceDocumentsDocumentsDelete()**](FinanceDocumentApi.md#deleteRestFinanceDocumentsDocumentsDelete) | **DELETE** /rest/api/finance/documents/{id}/documents/{idExternal}/ | Delete a document for accounting documents. |
| [**getRestFinanceDocumentConfigsIndex()**](FinanceDocumentApi.md#getRestFinanceDocumentConfigsIndex) | **GET** /rest/api/finance/document-configs/ | Get accounting document numbering series. |
| [**getRestFinanceDocumentIndex()**](FinanceDocumentApi.md#getRestFinanceDocumentIndex) | **GET** /rest/api/finance/documents/ | Get list of accounting documents. |
| [**postRestFinanceDocumentsDocumentsCreate()**](FinanceDocumentApi.md#postRestFinanceDocumentsDocumentsCreate) | **POST** /rest/api/finance/documents/{id}/documents/ | Create a document for accounting documents. |


## `deleteRestFinanceDocumentsDocumentsDelete()`

```php
deleteRestFinanceDocumentsDocumentsDelete($id, $id_external): \Apilo\Model\RestBundleException
```

Delete a document for accounting documents.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Apilo\Api\FinanceDocumentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 56; // int
$id_external = 56; // int

try {
    $result = $apiInstance->deleteRestFinanceDocumentsDocumentsDelete($id, $id_external);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FinanceDocumentApi->deleteRestFinanceDocumentsDocumentsDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | |
| **id_external** | **int**|  | |

### Return type

[**\Apilo\Model\RestBundleException**](../Model/RestBundleException.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getRestFinanceDocumentConfigsIndex()`

```php
getRestFinanceDocumentConfigsIndex($type, $offset, $limit): \Apilo\Model\GetRestFinanceDocumentConfigsIndex200Response
```

Get accounting document numbering series.

List of numbering series

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: BearerAuth
$config = Apilo\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Apilo\Api\FinanceDocumentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$type = 56; // int | Type of accounting document (1-Invoice, 5-Receipt, 10-Proforma, 31-Corrective invoice)
$offset = 56; // int
$limit = 56; // int

try {
    $result = $apiInstance->getRestFinanceDocumentConfigsIndex($type, $offset, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FinanceDocumentApi->getRestFinanceDocumentConfigsIndex: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **type** | **int**| Type of accounting document (1-Invoice, 5-Receipt, 10-Proforma, 31-Corrective invoice) | [optional] |
| **offset** | **int**|  | [optional] |
| **limit** | **int**|  | [optional] |

### Return type

[**\Apilo\Model\GetRestFinanceDocumentConfigsIndex200Response**](../Model/GetRestFinanceDocumentConfigsIndex200Response.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getRestFinanceDocumentIndex()`

```php
getRestFinanceDocumentIndex($type, $has_document_document_type, $has_not_document_document_type, $is_fiscal, $document_config, $offset, $limit): \Apilo\Model\GetRestFinanceDocumentIndex200Response
```

Get list of accounting documents.

List of accounting documents

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: BearerAuth
$config = Apilo\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Apilo\Api\FinanceDocumentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$type = 56; // int | Type of accounting document (1-Invoice, 5-Receipt, 10-Proforma, 31-Corrective invoice)
$has_document_document_type = 56; // int | A DocumentDocument of the specified type is created (1-printed, 2-exported to an external platform)
$has_not_document_document_type = 56; // int | A DocumentDocument of the specified type is not created (1-printed, 2-exported to an external platform)
$is_fiscal = True; // bool | Only for type Receipt type (type=5)
$document_config = array(56); // int[] | ID of <a href='#tag/Finance-document/operation/get_rest_finance_document_configs_index'>accounting document numbering series</a>
$offset = 56; // int
$limit = 56; // int

try {
    $result = $apiInstance->getRestFinanceDocumentIndex($type, $has_document_document_type, $has_not_document_document_type, $is_fiscal, $document_config, $offset, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FinanceDocumentApi->getRestFinanceDocumentIndex: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **type** | **int**| Type of accounting document (1-Invoice, 5-Receipt, 10-Proforma, 31-Corrective invoice) | [optional] |
| **has_document_document_type** | **int**| A DocumentDocument of the specified type is created (1-printed, 2-exported to an external platform) | [optional] |
| **has_not_document_document_type** | **int**| A DocumentDocument of the specified type is not created (1-printed, 2-exported to an external platform) | [optional] |
| **is_fiscal** | **bool**| Only for type Receipt type (type&#x3D;5) | [optional] |
| **document_config** | [**int[]**](../Model/int.md)| ID of &lt;a href&#x3D;&#39;#tag/Finance-document/operation/get_rest_finance_document_configs_index&#39;&gt;accounting document numbering series&lt;/a&gt; | [optional] |
| **offset** | **int**|  | [optional] |
| **limit** | **int**|  | [optional] |

### Return type

[**\Apilo\Model\GetRestFinanceDocumentIndex200Response**](../Model/GetRestFinanceDocumentIndex200Response.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postRestFinanceDocumentsDocumentsCreate()`

```php
postRestFinanceDocumentsDocumentsCreate($id, $rest_document_document_dto): mixed
```

Create a document for accounting documents.

Create a document for accounting documents

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: BearerAuth
$config = Apilo\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Apilo\Api\FinanceDocumentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string
$rest_document_document_dto = new \Apilo\Model\RestDocumentDocumentDTO(); // \Apilo\Model\RestDocumentDocumentDTO

try {
    $result = $apiInstance->postRestFinanceDocumentsDocumentsCreate($id, $rest_document_document_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FinanceDocumentApi->postRestFinanceDocumentsDocumentsCreate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |
| **rest_document_document_dto** | [**\Apilo\Model\RestDocumentDocumentDTO**](../Model/RestDocumentDocumentDTO.md)|  | |

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

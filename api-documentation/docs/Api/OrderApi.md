# OpenAPI\Client\OrderApi

All URIs are relative to https://erpbox.devo/app_dev.php, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**restApiOrdersCarrierAccountMapGet()**](OrderApi.md#restApiOrdersCarrierAccountMapGet) | **GET** /rest/api/orders/carrier-account/map/ | Get Carrier Account list |
| [**restApiOrdersCarrierMapGet()**](OrderApi.md#restApiOrdersCarrierMapGet) | **GET** /rest/api/orders/carrier/map/ | Get list of Carrier |
| [**restApiOrdersDocumentsMapGet()**](OrderApi.md#restApiOrdersDocumentsMapGet) | **GET** /rest/api/orders/documents/map/ | Get document types map |
| [**restApiOrdersGet()**](OrderApi.md#restApiOrdersGet) | **GET** /rest/api/orders/ | Get simple list of orders |
| [**restApiOrdersIdDocumentsDocumentDelete()**](OrderApi.md#restApiOrdersIdDocumentsDocumentDelete) | **DELETE** /rest/api/orders/{id}/documents/{document}/ | Delete document for given order |
| [**restApiOrdersIdDocumentsDocumentGet()**](OrderApi.md#restApiOrdersIdDocumentsDocumentGet) | **GET** /rest/api/orders/{id}/documents/{document}/ | Order Document detail |
| [**restApiOrdersIdDocumentsGet()**](OrderApi.md#restApiOrdersIdDocumentsGet) | **GET** /rest/api/orders/{id}/documents/ | Get simple list of documents for given order |
| [**restApiOrdersIdDocumentsPost()**](OrderApi.md#restApiOrdersIdDocumentsPost) | **POST** /rest/api/orders/{id}/documents/ | Create document for order |
| [**restApiOrdersIdGet()**](OrderApi.md#restApiOrdersIdGet) | **GET** /rest/api/orders/{id}/ | Get detailed order by given ID |
| [**restApiOrdersIdMediaDocumentGet()**](OrderApi.md#restApiOrdersIdMediaDocumentGet) | **GET** /rest/api/orders/{id}/media/{document}/ | Binary document |
| [**restApiOrdersIdNoteGet()**](OrderApi.md#restApiOrdersIdNoteGet) | **GET** /rest/api/orders/{id}/note/ | Get order notes |
| [**restApiOrdersIdNotePost()**](OrderApi.md#restApiOrdersIdNotePost) | **POST** /rest/api/orders/{id}/note/ | Add note to order |
| [**restApiOrdersIdPaymentPost()**](OrderApi.md#restApiOrdersIdPaymentPost) | **POST** /rest/api/orders/{id}/payment/ | Add payment to Order |
| [**restApiOrdersIdShipmentGet()**](OrderApi.md#restApiOrdersIdShipmentGet) | **GET** /rest/api/orders/{id}/shipment/ | List of order shipments |
| [**restApiOrdersIdShipmentPost()**](OrderApi.md#restApiOrdersIdShipmentPost) | **POST** /rest/api/orders/{id}/shipment/ | Add shipment to order |
| [**restApiOrdersIdShipmentShipmentGet()**](OrderApi.md#restApiOrdersIdShipmentShipmentGet) | **GET** /rest/api/orders/{id}/shipment/{shipment}/ | Shipment detail |
| [**restApiOrdersIdStatusPut()**](OrderApi.md#restApiOrdersIdStatusPut) | **PUT** /rest/api/orders/{id}/status/ | Update order status |
| [**restApiOrdersOrderTagGet()**](OrderApi.md#restApiOrdersOrderTagGet) | **GET** /rest/api/orders/{order}/tag/ | Order tags list |
| [**restApiOrdersOrderTagPost()**](OrderApi.md#restApiOrdersOrderTagPost) | **POST** /rest/api/orders/{order}/tag/ | Create order tag |
| [**restApiOrdersOrderTagTagDelete()**](OrderApi.md#restApiOrdersOrderTagTagDelete) | **DELETE** /rest/api/orders/{order}/tag/{tag}/ | Delete order tag |
| [**restApiOrdersPaymentMapGet()**](OrderApi.md#restApiOrdersPaymentMapGet) | **GET** /rest/api/orders/payment/map/ | Get Payment types list |
| [**restApiOrdersPlatformMapGet()**](OrderApi.md#restApiOrdersPlatformMapGet) | **GET** /rest/api/orders/platform/map/ | Get Platform list |
| [**restApiOrdersPost()**](OrderApi.md#restApiOrdersPost) | **POST** /rest/api/orders/ | Create a new order |
| [**restApiOrdersShipmentStatusMapGet()**](OrderApi.md#restApiOrdersShipmentStatusMapGet) | **GET** /rest/api/orders/shipment/status/map/ | Get shipment status map |
| [**restApiOrdersStatusMapGet()**](OrderApi.md#restApiOrdersStatusMapGet) | **GET** /rest/api/orders/status/map/ | Get order Status types list |
| [**restApiOrdersTagMapGet()**](OrderApi.md#restApiOrdersTagMapGet) | **GET** /rest/api/orders/tag/map/ | Tag list |


## `restApiOrdersCarrierAccountMapGet()`

```php
restApiOrdersCarrierAccountMapGet(): \OpenAPI\Client\Model\MappingDTO[]
```

Get Carrier Account list

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\OrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->restApiOrdersCarrierAccountMapGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->restApiOrdersCarrierAccountMapGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\OpenAPI\Client\Model\MappingDTO[]**](../Model/MappingDTO.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restApiOrdersCarrierMapGet()`

```php
restApiOrdersCarrierMapGet(): \OpenAPI\Client\Model\MappingDTO[]
```

Get list of Carrier

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\OrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->restApiOrdersCarrierMapGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->restApiOrdersCarrierMapGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\OpenAPI\Client\Model\MappingDTO[]**](../Model/MappingDTO.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restApiOrdersDocumentsMapGet()`

```php
restApiOrdersDocumentsMapGet(): \OpenAPI\Client\Model\RestApiOrdersDocumentsMapGet200ResponseInner[]
```

Get document types map

Document types map

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\OrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->restApiOrdersDocumentsMapGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->restApiOrdersDocumentsMapGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\OpenAPI\Client\Model\RestApiOrdersDocumentsMapGet200ResponseInner[]**](../Model/RestApiOrdersDocumentsMapGet200ResponseInner.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restApiOrdersGet()`

```php
restApiOrdersGet($created_after, $created_before, $ordered_after, $ordered_before, $updated_after, $updated_before, $is_order_document, $id, $id_external, $order_status, $sort, $offset, $limit): \OpenAPI\Client\Model\RestApiOrdersGet200Response
```

Get simple list of orders

Example URL for filters and sort: <code>/rest/api/orders/?orderStatus=7&createdAfter=2022-03-01T14%3A40%3A33%2B0200&order&sort=updatedAtDesc</code><br><br>     The fields orderItems and addressCustomer will be returned conditionally from end of 2022

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\OrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$created_after = 'created_after_example'; // string | date of order creation from in Apilo, takes the value of ISO 8601 date encoded to URL, e.g. <code>2022-03-01T14:40:33%2B0200</code>
$created_before = 'created_before_example'; // string | date of order creation from customer, takes the value of ISO 8601 date encoded to URL, e.g. <code>2022-03-01T14:40:33%2B0200</code>
$ordered_after = 'ordered_after_example'; // string | date of order to customer, takes the value of ISO 8601 date encoded to URL, e.g. <code>2022-03-01T14:40:33%2B0200</code>
$ordered_before = 'ordered_before_example'; // string | update date from in Apilo system, takes the value of ISO 8601 date encoded to URL, e.g. <code>2022-03-01T14:40:33%2B0200</code>
$updated_after = 'updated_after_example'; // string | update date to in Apilo system, takes the value of ISO 8601 date encoded to URL, e.g. <code>2022-03-01T14:40:33%2B0200</code>
$updated_before = 'updated_before_example'; // string | update date from in Apilo system, takes the value of ISO 8601 date encoded to URL, e.g. <code>2022-03-01T14:40:33%2B0200</code>
$is_order_document = 56; // int | determines whether a document exists for the order, takes the value of 1 or 0
$id = 'id_example'; // string | order number in Apilo system, e.g. <code>AL0012345</code>
$id_external = 'id_external_example'; // string | external order number, e.g. <code>5200669628624</code>
$order_status = 56; // int | Order status according to the <a href='#tag/order/paths/~1rest~1api~1orders~1status~1map~1/get'>order status map</a>
$sort = 'sort_example'; // string | Sort options
$offset = 56; // int | Position indicator (0-beginning, 1-skips one record, 256 - skips 256 records)
$limit = 56; // int | Limit of returned results, max 512 records

try {
    $result = $apiInstance->restApiOrdersGet($created_after, $created_before, $ordered_after, $ordered_before, $updated_after, $updated_before, $is_order_document, $id, $id_external, $order_status, $sort, $offset, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->restApiOrdersGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **created_after** | **string**| date of order creation from in Apilo, takes the value of ISO 8601 date encoded to URL, e.g. &lt;code&gt;2022-03-01T14:40:33%2B0200&lt;/code&gt; | [optional] |
| **created_before** | **string**| date of order creation from customer, takes the value of ISO 8601 date encoded to URL, e.g. &lt;code&gt;2022-03-01T14:40:33%2B0200&lt;/code&gt; | [optional] |
| **ordered_after** | **string**| date of order to customer, takes the value of ISO 8601 date encoded to URL, e.g. &lt;code&gt;2022-03-01T14:40:33%2B0200&lt;/code&gt; | [optional] |
| **ordered_before** | **string**| update date from in Apilo system, takes the value of ISO 8601 date encoded to URL, e.g. &lt;code&gt;2022-03-01T14:40:33%2B0200&lt;/code&gt; | [optional] |
| **updated_after** | **string**| update date to in Apilo system, takes the value of ISO 8601 date encoded to URL, e.g. &lt;code&gt;2022-03-01T14:40:33%2B0200&lt;/code&gt; | [optional] |
| **updated_before** | **string**| update date from in Apilo system, takes the value of ISO 8601 date encoded to URL, e.g. &lt;code&gt;2022-03-01T14:40:33%2B0200&lt;/code&gt; | [optional] |
| **is_order_document** | **int**| determines whether a document exists for the order, takes the value of 1 or 0 | [optional] |
| **id** | **string**| order number in Apilo system, e.g. &lt;code&gt;AL0012345&lt;/code&gt; | [optional] |
| **id_external** | **string**| external order number, e.g. &lt;code&gt;5200669628624&lt;/code&gt; | [optional] |
| **order_status** | **int**| Order status according to the &lt;a href&#x3D;&#39;#tag/order/paths/~1rest~1api~1orders~1status~1map~1/get&#39;&gt;order status map&lt;/a&gt; | [optional] |
| **sort** | **string**| Sort options | [optional] |
| **offset** | **int**| Position indicator (0-beginning, 1-skips one record, 256 - skips 256 records) | [optional] |
| **limit** | **int**| Limit of returned results, max 512 records | [optional] |

### Return type

[**\OpenAPI\Client\Model\RestApiOrdersGet200Response**](../Model/RestApiOrdersGet200Response.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restApiOrdersIdDocumentsDocumentDelete()`

```php
restApiOrdersIdDocumentsDocumentDelete($id, $document)
```

Delete document for given order

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\OrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | order number in Apilo system, e.g. <code>AL0012345</code>
$document = 56; // int | ID of the document belongs to the Apilo order

try {
    $apiInstance->restApiOrdersIdDocumentsDocumentDelete($id, $document);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->restApiOrdersIdDocumentsDocumentDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| order number in Apilo system, e.g. &lt;code&gt;AL0012345&lt;/code&gt; | |
| **document** | **int**| ID of the document belongs to the Apilo order | |

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

## `restApiOrdersIdDocumentsDocumentGet()`

```php
restApiOrdersIdDocumentsDocumentGet($id, $document): \OpenAPI\Client\Model\RestOrderDocumentDTO2
```

Order Document detail

Get detailed document by Id for given Order

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\OrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | order number in Apilo system, e.g. <code>AL0012345</code>
$document = 56; // int | ID of the document belongs to the Apilo order

try {
    $result = $apiInstance->restApiOrdersIdDocumentsDocumentGet($id, $document);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->restApiOrdersIdDocumentsDocumentGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| order number in Apilo system, e.g. &lt;code&gt;AL0012345&lt;/code&gt; | |
| **document** | **int**| ID of the document belongs to the Apilo order | |

### Return type

[**\OpenAPI\Client\Model\RestOrderDocumentDTO2**](../Model/RestOrderDocumentDTO2.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restApiOrdersIdDocumentsGet()`

```php
restApiOrdersIdDocumentsGet($id, $id2, $id_external, $number, $type, $created_after, $created_before, $offset, $limit): \OpenAPI\Client\Model\RestApiOrdersIdDocumentsGet200Response
```

Get simple list of documents for given order

List of documents belongs to the indicated order

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\OrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | order number in Apilo system, e.g. <code>AL0012345</code>
$id2 = 56; // int | ID of the document
$id_external = 'id_external_example'; // string | External unique ID of the document
$number = 'number_example'; // string | External document number
$type = 56; // int | Document type - <a href='#tag/order/paths/~1rest~1api~1orders~1documents~1map~1/get'>order document types endpoint</a>
$created_after = 'created_after_example'; // string | start date of document creation in Apilo, takes the value of ISO 8601 date encoded to URL, e.g. <code>2022-03-01T14:40:33%2B0200</code>
$created_before = 'created_before_example'; // string | end date of document creation in Apilo, takes the value of ISO 8601 date encoded to URL, e.g. <code>2022-03-01T14:40:33%2B0200</code>
$offset = 56; // int | Position indicator (0-beginning, 1-skips one record, 256 - skips 256 records)
$limit = 56; // int | Limit of returned results, max 512 records

try {
    $result = $apiInstance->restApiOrdersIdDocumentsGet($id, $id2, $id_external, $number, $type, $created_after, $created_before, $offset, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->restApiOrdersIdDocumentsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| order number in Apilo system, e.g. &lt;code&gt;AL0012345&lt;/code&gt; | |
| **id2** | **int**| ID of the document | [optional] |
| **id_external** | **string**| External unique ID of the document | [optional] |
| **number** | **string**| External document number | [optional] |
| **type** | **int**| Document type - &lt;a href&#x3D;&#39;#tag/order/paths/~1rest~1api~1orders~1documents~1map~1/get&#39;&gt;order document types endpoint&lt;/a&gt; | [optional] |
| **created_after** | **string**| start date of document creation in Apilo, takes the value of ISO 8601 date encoded to URL, e.g. &lt;code&gt;2022-03-01T14:40:33%2B0200&lt;/code&gt; | [optional] |
| **created_before** | **string**| end date of document creation in Apilo, takes the value of ISO 8601 date encoded to URL, e.g. &lt;code&gt;2022-03-01T14:40:33%2B0200&lt;/code&gt; | [optional] |
| **offset** | **int**| Position indicator (0-beginning, 1-skips one record, 256 - skips 256 records) | [optional] |
| **limit** | **int**| Limit of returned results, max 512 records | [optional] |

### Return type

[**\OpenAPI\Client\Model\RestApiOrdersIdDocumentsGet200Response**](../Model/RestApiOrdersIdDocumentsGet200Response.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restApiOrdersIdDocumentsPost()`

```php
restApiOrdersIdDocumentsPost($id, $body): \OpenAPI\Client\Model\RestOrderDocumentDTO2
```

Create document for order

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\OrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | order number in Apilo system, e.g. <code>AL0012345</code>
$body = new \OpenAPI\Client\Model\RestOrderDocumentDTO3(); // \OpenAPI\Client\Model\RestOrderDocumentDTO3

try {
    $result = $apiInstance->restApiOrdersIdDocumentsPost($id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->restApiOrdersIdDocumentsPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| order number in Apilo system, e.g. &lt;code&gt;AL0012345&lt;/code&gt; | |
| **body** | [**\OpenAPI\Client\Model\RestOrderDocumentDTO3**](../Model/RestOrderDocumentDTO3.md)|  | |

### Return type

[**\OpenAPI\Client\Model\RestOrderDocumentDTO2**](../Model/RestOrderDocumentDTO2.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restApiOrdersIdGet()`

```php
restApiOrdersIdGet($id): \OpenAPI\Client\Model\RestOrderReadDTO2
```

Get detailed order by given ID

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\OrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | order number in Apilo system, e.g. <code>AL0012345</code>

try {
    $result = $apiInstance->restApiOrdersIdGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->restApiOrdersIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| order number in Apilo system, e.g. &lt;code&gt;AL0012345&lt;/code&gt; | |

### Return type

[**\OpenAPI\Client\Model\RestOrderReadDTO2**](../Model/RestOrderReadDTO2.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restApiOrdersIdMediaDocumentGet()`

```php
restApiOrdersIdMediaDocumentGet($id, $document): \SplFileObject
```

Binary document

Binary contents of the document (or shipment label) file belongs to the specified order

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\OrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | order number in Apilo system, e.g. <code>AL0012345</code>
$document = 56; // int | ID of the document or shipment belongs to the Apilo order

try {
    $result = $apiInstance->restApiOrdersIdMediaDocumentGet($id, $document);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->restApiOrdersIdMediaDocumentGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| order number in Apilo system, e.g. &lt;code&gt;AL0012345&lt;/code&gt; | |
| **document** | **int**| ID of the document or shipment belongs to the Apilo order | |

### Return type

**\SplFileObject**

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restApiOrdersIdNoteGet()`

```php
restApiOrdersIdNoteGet($id): \OpenAPI\Client\Model\RestOrderNoteDTO[]
```

Get order notes

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\OrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | order number in Apilo system, e.g. <code>AL0012345</code>

try {
    $result = $apiInstance->restApiOrdersIdNoteGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->restApiOrdersIdNoteGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| order number in Apilo system, e.g. &lt;code&gt;AL0012345&lt;/code&gt; | |

### Return type

[**\OpenAPI\Client\Model\RestOrderNoteDTO[]**](../Model/RestOrderNoteDTO.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restApiOrdersIdNotePost()`

```php
restApiOrdersIdNotePost($id, $body)
```

Add note to order

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\OrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | order number in Apilo system, e.g. <code>AL0012345</code>
$body = new \OpenAPI\Client\Model\RestOrderNoteDTO2(); // \OpenAPI\Client\Model\RestOrderNoteDTO2

try {
    $apiInstance->restApiOrdersIdNotePost($id, $body);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->restApiOrdersIdNotePost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| order number in Apilo system, e.g. &lt;code&gt;AL0012345&lt;/code&gt; | |
| **body** | [**\OpenAPI\Client\Model\RestOrderNoteDTO2**](../Model/RestOrderNoteDTO2.md)|  | [optional] |

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

## `restApiOrdersIdPaymentPost()`

```php
restApiOrdersIdPaymentPost($id, $body)
```

Add payment to Order

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\OrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | order number in Apilo system, e.g. <code>AL0012345</code>
$body = new \OpenAPI\Client\Model\RestOrderPaymentsDTO(); // \OpenAPI\Client\Model\RestOrderPaymentsDTO

try {
    $apiInstance->restApiOrdersIdPaymentPost($id, $body);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->restApiOrdersIdPaymentPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| order number in Apilo system, e.g. &lt;code&gt;AL0012345&lt;/code&gt; | |
| **body** | [**\OpenAPI\Client\Model\RestOrderPaymentsDTO**](../Model/RestOrderPaymentsDTO.md)|  | |

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

## `restApiOrdersIdShipmentGet()`

```php
restApiOrdersIdShipmentGet($id, $offset, $limit): \OpenAPI\Client\Model\RestApiOrdersIdShipmentGet200Response
```

List of order shipments

List of shipments belongs to the indicated order

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\OrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | order number in Apilo system, e.g. <code>AL0012345</code>
$offset = 56; // int | Position indicator (0-beginning, 1-skips one record, 256 - skips 256 records)
$limit = 56; // int | Limit of returned results, max 512 records

try {
    $result = $apiInstance->restApiOrdersIdShipmentGet($id, $offset, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->restApiOrdersIdShipmentGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| order number in Apilo system, e.g. &lt;code&gt;AL0012345&lt;/code&gt; | |
| **offset** | **int**| Position indicator (0-beginning, 1-skips one record, 256 - skips 256 records) | [optional] |
| **limit** | **int**| Limit of returned results, max 512 records | [optional] |

### Return type

[**\OpenAPI\Client\Model\RestApiOrdersIdShipmentGet200Response**](../Model/RestApiOrdersIdShipmentGet200Response.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restApiOrdersIdShipmentPost()`

```php
restApiOrdersIdShipmentPost($id, $body): \OpenAPI\Client\Model\RestOrderShipmentDTO2
```

Add shipment to order

Shipment is created as order document, it can be see from <a href='#tag/order/paths/~1rest~1api~1orders~1{orderId}~1documents~1{documentId}~1/get'>here</a>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\OrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | order number in Apilo system, e.g. <code>AL0012345</code>
$body = new \OpenAPI\Client\Model\RestOrderShipmentDTO3(); // \OpenAPI\Client\Model\RestOrderShipmentDTO3

try {
    $result = $apiInstance->restApiOrdersIdShipmentPost($id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->restApiOrdersIdShipmentPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| order number in Apilo system, e.g. &lt;code&gt;AL0012345&lt;/code&gt; | |
| **body** | [**\OpenAPI\Client\Model\RestOrderShipmentDTO3**](../Model/RestOrderShipmentDTO3.md)|  | |

### Return type

[**\OpenAPI\Client\Model\RestOrderShipmentDTO2**](../Model/RestOrderShipmentDTO2.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restApiOrdersIdShipmentShipmentGet()`

```php
restApiOrdersIdShipmentShipmentGet($id, $shipment): \OpenAPI\Client\Model\RestOrderShipmentDTO2
```

Shipment detail

Detail of specific shipment belongs to given order

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\OrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | order number in Apilo system, e.g. <code>AL0012345</code>
$shipment = 56; // int | ID of the shipment belongs to the Apilo order

try {
    $result = $apiInstance->restApiOrdersIdShipmentShipmentGet($id, $shipment);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->restApiOrdersIdShipmentShipmentGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| order number in Apilo system, e.g. &lt;code&gt;AL0012345&lt;/code&gt; | |
| **shipment** | **int**| ID of the shipment belongs to the Apilo order | |

### Return type

[**\OpenAPI\Client\Model\RestOrderShipmentDTO2**](../Model/RestOrderShipmentDTO2.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restApiOrdersIdStatusPut()`

```php
restApiOrdersIdStatusPut($id, $body): \OpenAPI\Client\Model\RestApiOrdersIdStatusPut200Response
```

Update order status

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\OrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | order number in Apilo system, e.g. <code>AL0012345</code>
$body = new \OpenAPI\Client\Model\RestStatusOrderDTO(); // \OpenAPI\Client\Model\RestStatusOrderDTO

try {
    $result = $apiInstance->restApiOrdersIdStatusPut($id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->restApiOrdersIdStatusPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| order number in Apilo system, e.g. &lt;code&gt;AL0012345&lt;/code&gt; | |
| **body** | [**\OpenAPI\Client\Model\RestStatusOrderDTO**](../Model/RestStatusOrderDTO.md)|  | |

### Return type

[**\OpenAPI\Client\Model\RestApiOrdersIdStatusPut200Response**](../Model/RestApiOrdersIdStatusPut200Response.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restApiOrdersOrderTagGet()`

```php
restApiOrdersOrderTagGet($order): \OpenAPI\Client\Model\Tags
```

Order tags list

Order tags list

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\OrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$order = 'order_example'; // string | Order ID

try {
    $result = $apiInstance->restApiOrdersOrderTagGet($order);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->restApiOrdersOrderTagGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **order** | **string**| Order ID | |

### Return type

[**\OpenAPI\Client\Model\Tags**](../Model/Tags.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restApiOrdersOrderTagPost()`

```php
restApiOrdersOrderTagPost($order, $body)
```

Create order tag

Create order tag

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\OrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$order = 'order_example'; // string | Order ID
$body = new \OpenAPI\Client\Model\OrderTagPost(); // \OpenAPI\Client\Model\OrderTagPost

try {
    $apiInstance->restApiOrdersOrderTagPost($order, $body);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->restApiOrdersOrderTagPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **order** | **string**| Order ID | |
| **body** | [**\OpenAPI\Client\Model\OrderTagPost**](../Model/OrderTagPost.md)|  | |

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

## `restApiOrdersOrderTagTagDelete()`

```php
restApiOrdersOrderTagTagDelete($order, $tag)
```

Delete order tag

Delete order tag

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\OrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$order = 'order_example'; // string | Order ID
$tag = 56; // int | Tag ID

try {
    $apiInstance->restApiOrdersOrderTagTagDelete($order, $tag);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->restApiOrdersOrderTagTagDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **order** | **string**| Order ID | |
| **tag** | **int**| Tag ID | |

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

## `restApiOrdersPaymentMapGet()`

```php
restApiOrdersPaymentMapGet(): \OpenAPI\Client\Model\MappingDTO[]
```

Get Payment types list

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\OrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->restApiOrdersPaymentMapGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->restApiOrdersPaymentMapGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\OpenAPI\Client\Model\MappingDTO[]**](../Model/MappingDTO.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restApiOrdersPlatformMapGet()`

```php
restApiOrdersPlatformMapGet(): \OpenAPI\Client\Model\MappingDTO[]
```

Get Platform list

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\OrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->restApiOrdersPlatformMapGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->restApiOrdersPlatformMapGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\OpenAPI\Client\Model\MappingDTO[]**](../Model/MappingDTO.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restApiOrdersPost()`

```php
restApiOrdersPost($body): \OpenAPI\Client\Model\RestApiOrdersPost200Response
```

Create a new order

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\OrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \OpenAPI\Client\Model\RestOrderWriteDTO(); // \OpenAPI\Client\Model\RestOrderWriteDTO

try {
    $result = $apiInstance->restApiOrdersPost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->restApiOrdersPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\OpenAPI\Client\Model\RestOrderWriteDTO**](../Model/RestOrderWriteDTO.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\RestApiOrdersPost200Response**](../Model/RestApiOrdersPost200Response.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restApiOrdersShipmentStatusMapGet()`

```php
restApiOrdersShipmentStatusMapGet(): \OpenAPI\Client\Model\RestApiOrdersShipmentStatusMapGet200ResponseInner[]
```

Get shipment status map

Shipment status map

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\OrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->restApiOrdersShipmentStatusMapGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->restApiOrdersShipmentStatusMapGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\OpenAPI\Client\Model\RestApiOrdersShipmentStatusMapGet200ResponseInner[]**](../Model/RestApiOrdersShipmentStatusMapGet200ResponseInner.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restApiOrdersStatusMapGet()`

```php
restApiOrdersStatusMapGet(): \OpenAPI\Client\Model\MappingDTO[]
```

Get order Status types list

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\OrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->restApiOrdersStatusMapGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->restApiOrdersStatusMapGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\OpenAPI\Client\Model\MappingDTO[]**](../Model/MappingDTO.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restApiOrdersTagMapGet()`

```php
restApiOrdersTagMapGet(): \OpenAPI\Client\Model\MappingDTO[]
```

Tag list

List of tag

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\OrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->restApiOrdersTagMapGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->restApiOrdersTagMapGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\OpenAPI\Client\Model\MappingDTO[]**](../Model/MappingDTO.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

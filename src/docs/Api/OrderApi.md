# Apilo\OrderApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**deleteRestOrderDocumentsDelete()**](OrderApi.md#deleteRestOrderDocumentsDelete) | **DELETE** /rest/api/orders/{id}/documents/{document}/ | Delete document for given order. |
| [**deleteRestOrdersOrderTagDelete()**](OrderApi.md#deleteRestOrdersOrderTagDelete) | **DELETE** /rest/api/orders/{orderId}/tag/{tagId}/ | Delete order tag. |
| [**getRestDocumentsMap()**](OrderApi.md#getRestDocumentsMap) | **GET** /rest/api/orders/documents/map/ | Get document types map. |
| [**getRestOrderDocumentsDetail()**](OrderApi.md#getRestOrderDocumentsDetail) | **GET** /rest/api/orders/{id}/documents/{document}/ | Order Document detail. |
| [**getRestOrderDocumentsIndex()**](OrderApi.md#getRestOrderDocumentsIndex) | **GET** /rest/api/orders/{id}/documents/ | Get simple list of documents for given order. |
| [**getRestOrdersCarrierAccountMap()**](OrderApi.md#getRestOrdersCarrierAccountMap) | **GET** /rest/api/orders/carrier-account/map/ | Get Carrier Account list. |
| [**getRestOrdersCarrierMap()**](OrderApi.md#getRestOrdersCarrierMap) | **GET** /rest/api/orders/carrier/map/ | Get list of Carrier. |
| [**getRestOrdersDetail()**](OrderApi.md#getRestOrdersDetail) | **GET** /rest/api/orders/{id}/ | Get detailed order by given ID. |
| [**getRestOrdersIndex()**](OrderApi.md#getRestOrdersIndex) | **GET** /rest/api/orders/ | Get simple list of orders. |
| [**getRestOrdersOrderNoteList()**](OrderApi.md#getRestOrdersOrderNoteList) | **GET** /rest/api/orders/{id}/note/ | Get order notes. |
| [**getRestOrdersOrderTagList()**](OrderApi.md#getRestOrdersOrderTagList) | **GET** /rest/api/orders/{orderId}/tag/ | Order tags list. |
| [**getRestOrdersPaymentMap()**](OrderApi.md#getRestOrdersPaymentMap) | **GET** /rest/api/orders/payment/map/ | Get Payment types list. |
| [**getRestOrdersPlatformMap()**](OrderApi.md#getRestOrdersPlatformMap) | **GET** /rest/api/orders/platform/map/ | Get Platform list. |
| [**getRestOrdersRawMedia()**](OrderApi.md#getRestOrdersRawMedia) | **GET** /rest/api/orders/{id}/media/{document}/ | Order Binary document. |
| [**getRestOrdersShipmentDetail()**](OrderApi.md#getRestOrdersShipmentDetail) | **GET** /rest/api/orders/{id}/shipment/{shipment}/ | Shipment detail. |
| [**getRestOrdersShipmentList()**](OrderApi.md#getRestOrdersShipmentList) | **GET** /rest/api/orders/{id}/shipment/ | List of order shipments. |
| [**getRestOrdersShipmentStatusMap()**](OrderApi.md#getRestOrdersShipmentStatusMap) | **GET** /rest/api/orders/shipment/status/map/ | Get shipment status map. |
| [**getRestOrdersShippingSettingsDefaults()**](OrderApi.md#getRestOrdersShippingSettingsDefaults) | **GET** /rest/api/orders/{id}/shipping-settings-defaults/ | Get order default shipping settings. |
| [**getRestOrdersStatusMap()**](OrderApi.md#getRestOrdersStatusMap) | **GET** /rest/api/orders/status/map/ | Get order Status types list. |
| [**getRestOrdersTagList()**](OrderApi.md#getRestOrdersTagList) | **GET** /rest/api/orders/tag/map/ | Tag list. |
| [**postRestOrderDocumentsCreate()**](OrderApi.md#postRestOrderDocumentsCreate) | **POST** /rest/api/orders/{id}/documents/ | Create document for order. |
| [**postRestOrdersCreate()**](OrderApi.md#postRestOrdersCreate) | **POST** /rest/api/orders/ | Create a new order. |
| [**postRestOrdersOrderNoteCreate()**](OrderApi.md#postRestOrdersOrderNoteCreate) | **POST** /rest/api/orders/{id}/note/ | Add note to order. |
| [**postRestOrdersOrderTagCreate()**](OrderApi.md#postRestOrdersOrderTagCreate) | **POST** /rest/api/orders/{orderId}/tag/ | Create order tag. |
| [**postRestOrdersPaymentCreate()**](OrderApi.md#postRestOrdersPaymentCreate) | **POST** /rest/api/orders/{id}/payment/ | Add payment to Order. |
| [**postRestOrdersShipmentCreate()**](OrderApi.md#postRestOrdersShipmentCreate) | **POST** /rest/api/orders/{id}/shipment/ | Add shipment to order. |
| [**putRestOrdersStatusChange()**](OrderApi.md#putRestOrdersStatusChange) | **PUT** /rest/api/orders/{id}/status/ | Update order status. |


## `deleteRestOrderDocumentsDelete()`

```php
deleteRestOrderDocumentsDelete($id, $document): mixed
```

Delete document for given order.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: BearerAuth
$config = Apilo\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Apilo\Api\OrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | order number in Apilo system, e.g. <code>AL0012345</code>
$document = 'document_example'; // string | ID of the document belongs to the Apilo order

try {
    $result = $apiInstance->deleteRestOrderDocumentsDelete($id, $document);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->deleteRestOrderDocumentsDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| order number in Apilo system, e.g. &lt;code&gt;AL0012345&lt;/code&gt; | |
| **document** | **string**| ID of the document belongs to the Apilo order | |

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

## `deleteRestOrdersOrderTagDelete()`

```php
deleteRestOrdersOrderTagDelete($order_id, $tag_id)
```

Delete order tag.

Delete order tag

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: BearerAuth
$config = Apilo\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Apilo\Api\OrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$order_id = 'order_id_example'; // string | Order ID
$tag_id = 'tag_id_example'; // string | Tag ID

try {
    $apiInstance->deleteRestOrdersOrderTagDelete($order_id, $tag_id);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->deleteRestOrdersOrderTagDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **order_id** | **string**| Order ID | |
| **tag_id** | **string**| Tag ID | |

### Return type

void (empty response body)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getRestDocumentsMap()`

```php
getRestDocumentsMap(): \Apilo\Model\MappingDTO[]
```

Get document types map.

Document types map

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: BearerAuth
$config = Apilo\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Apilo\Api\OrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getRestDocumentsMap();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->getRestDocumentsMap: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Apilo\Model\MappingDTO[]**](../Model/MappingDTO.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getRestOrderDocumentsDetail()`

```php
getRestOrderDocumentsDetail($id, $document): \Apilo\Model\RestOrderDocumentDTO2
```

Order Document detail.

Get detailed document by Id for given Order

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: BearerAuth
$config = Apilo\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Apilo\Api\OrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | order number in Apilo system, e.g. <code>AL0012345</code>
$document = 'document_example'; // string | ID of the document belongs to the Apilo order

try {
    $result = $apiInstance->getRestOrderDocumentsDetail($id, $document);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->getRestOrderDocumentsDetail: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| order number in Apilo system, e.g. &lt;code&gt;AL0012345&lt;/code&gt; | |
| **document** | **string**| ID of the document belongs to the Apilo order | |

### Return type

[**\Apilo\Model\RestOrderDocumentDTO2**](../Model/RestOrderDocumentDTO2.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getRestOrderDocumentsIndex()`

```php
getRestOrderDocumentsIndex($id, $id2, $id_external, $number, $type, $created_after, $created_before, $offset, $limit): \Apilo\Model\GetRestOrderDocumentsIndex200Response
```

Get simple list of documents for given order.

List of documents belongs to the indicated order

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: BearerAuth
$config = Apilo\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Apilo\Api\OrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string
$id2 = NULL; // mixed | ID of the document
$id_external = NULL; // mixed | External unique ID of the document
$number = 56; // int
$type = 56; // int
$created_after = NULL; // mixed | start date of document creation in Apilo, takes the value of ISO 8601 date encoded to URL, e.g. <code>2022-03-01T14:40:33%2B0200</code>
$created_before = NULL; // mixed | end date of document creation in Apilo, takes the value of ISO 8601 date encoded to URL, e.g. <code>2022-03-01T14:40:33%2B0200</code>
$offset = NULL; // mixed | Position indicator (0-beginning, 1-skips one record, 256 - skips 256 records)
$limit = NULL; // mixed | Limit of returned results, max 512 records

try {
    $result = $apiInstance->getRestOrderDocumentsIndex($id, $id2, $id_external, $number, $type, $created_after, $created_before, $offset, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->getRestOrderDocumentsIndex: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |
| **id2** | [**mixed**](../Model/.md)| ID of the document | [optional] |
| **id_external** | [**mixed**](../Model/.md)| External unique ID of the document | [optional] |
| **number** | **int**|  | [optional] |
| **type** | **int**|  | [optional] |
| **created_after** | [**mixed**](../Model/.md)| start date of document creation in Apilo, takes the value of ISO 8601 date encoded to URL, e.g. &lt;code&gt;2022-03-01T14:40:33%2B0200&lt;/code&gt; | [optional] |
| **created_before** | [**mixed**](../Model/.md)| end date of document creation in Apilo, takes the value of ISO 8601 date encoded to URL, e.g. &lt;code&gt;2022-03-01T14:40:33%2B0200&lt;/code&gt; | [optional] |
| **offset** | [**mixed**](../Model/.md)| Position indicator (0-beginning, 1-skips one record, 256 - skips 256 records) | [optional] |
| **limit** | [**mixed**](../Model/.md)| Limit of returned results, max 512 records | [optional] |

### Return type

[**\Apilo\Model\GetRestOrderDocumentsIndex200Response**](../Model/GetRestOrderDocumentsIndex200Response.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getRestOrdersCarrierAccountMap()`

```php
getRestOrdersCarrierAccountMap(): \Apilo\Model\MappingDTO[]
```

Get Carrier Account list.

Get Carrrier Account List

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: BearerAuth
$config = Apilo\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Apilo\Api\OrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getRestOrdersCarrierAccountMap();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->getRestOrdersCarrierAccountMap: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Apilo\Model\MappingDTO[]**](../Model/MappingDTO.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getRestOrdersCarrierMap()`

```php
getRestOrdersCarrierMap(): \Apilo\Model\MappingDTO[]
```

Get list of Carrier.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: BearerAuth
$config = Apilo\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Apilo\Api\OrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getRestOrdersCarrierMap();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->getRestOrdersCarrierMap: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Apilo\Model\MappingDTO[]**](../Model/MappingDTO.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getRestOrdersDetail()`

```php
getRestOrdersDetail($id): \Apilo\Model\RestOrderDetailDTO
```

Get detailed order by given ID.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: BearerAuth
$config = Apilo\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Apilo\Api\OrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | order number in Apilo system, e.g. <code>AL0012345</code>

try {
    $result = $apiInstance->getRestOrdersDetail($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->getRestOrdersDetail: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| order number in Apilo system, e.g. &lt;code&gt;AL0012345&lt;/code&gt; | |

### Return type

[**\Apilo\Model\RestOrderDetailDTO**](../Model/RestOrderDetailDTO.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getRestOrdersIndex()`

```php
getRestOrdersIndex($created_after, $created_before, $ordered_after, $ordered_before, $updated_after, $updated_before, $is_order_document, $id, $id_external, $order_status, $order_status_ids, $payment_status, $payment_type, $platform_account_id, $carrier_id, $email, $sort, $offset, $limit): \Apilo\Model\GetRestOrdersIndex200Response
```

Get simple list of orders.

Example URL for filters and sort: <code>/rest/api/orders/?orderStatus=7&createdAfter=2022-03-01T14%3A40%3A33%2B0200&order&sort=updatedAtDesc</code><br><br>     The fields orderItems and addressCustomer will be returned conditionally from end of 2022

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: BearerAuth
$config = Apilo\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Apilo\Api\OrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$created_after = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime
$created_before = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime
$ordered_after = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime
$ordered_before = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime
$updated_after = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime
$updated_before = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime
$is_order_document = 56; // int
$id = 'id_example'; // string
$id_external = 'id_external_example'; // string
$order_status = 56; // int
$order_status_ids = array(56); // int[]
$payment_status = 56; // int
$payment_type = 56; // int
$platform_account_id = 56; // int
$carrier_id = 56; // int
$email = 'email_example'; // string
$sort = 56; // int | Sort options
$offset = 56; // int
$limit = 56; // int

try {
    $result = $apiInstance->getRestOrdersIndex($created_after, $created_before, $ordered_after, $ordered_before, $updated_after, $updated_before, $is_order_document, $id, $id_external, $order_status, $order_status_ids, $payment_status, $payment_type, $platform_account_id, $carrier_id, $email, $sort, $offset, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->getRestOrdersIndex: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **created_after** | **\DateTime**|  | [optional] |
| **created_before** | **\DateTime**|  | [optional] |
| **ordered_after** | **\DateTime**|  | [optional] |
| **ordered_before** | **\DateTime**|  | [optional] |
| **updated_after** | **\DateTime**|  | [optional] |
| **updated_before** | **\DateTime**|  | [optional] |
| **is_order_document** | **int**|  | [optional] |
| **id** | **string**|  | [optional] |
| **id_external** | **string**|  | [optional] |
| **order_status** | **int**|  | [optional] |
| **order_status_ids** | [**int[]**](../Model/int.md)|  | [optional] |
| **payment_status** | **int**|  | [optional] |
| **payment_type** | **int**|  | [optional] |
| **platform_account_id** | **int**|  | [optional] |
| **carrier_id** | **int**|  | [optional] |
| **email** | **string**|  | [optional] |
| **sort** | **int**| Sort options | [optional] |
| **offset** | **int**|  | [optional] |
| **limit** | **int**|  | [optional] |

### Return type

[**\Apilo\Model\GetRestOrdersIndex200Response**](../Model/GetRestOrdersIndex200Response.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getRestOrdersOrderNoteList()`

```php
getRestOrdersOrderNoteList($id): \Apilo\Model\RestOrderNoteDTO
```

Get order notes.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: BearerAuth
$config = Apilo\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Apilo\Api\OrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | order number in Apilo system, e.g. <code>AL0012345</code>

try {
    $result = $apiInstance->getRestOrdersOrderNoteList($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->getRestOrdersOrderNoteList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| order number in Apilo system, e.g. &lt;code&gt;AL0012345&lt;/code&gt; | |

### Return type

[**\Apilo\Model\RestOrderNoteDTO**](../Model/RestOrderNoteDTO.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getRestOrdersOrderTagList()`

```php
getRestOrdersOrderTagList($order_id, $offset, $limit): \Apilo\Model\RestTagsDTO
```

Order tags list.

Order tags list

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: BearerAuth
$config = Apilo\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Apilo\Api\OrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$order_id = 'order_id_example'; // string | Order ID
$offset = 56; // int
$limit = 56; // int

try {
    $result = $apiInstance->getRestOrdersOrderTagList($order_id, $offset, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->getRestOrdersOrderTagList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **order_id** | **string**| Order ID | |
| **offset** | **int**|  | [optional] |
| **limit** | **int**|  | [optional] |

### Return type

[**\Apilo\Model\RestTagsDTO**](../Model/RestTagsDTO.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getRestOrdersPaymentMap()`

```php
getRestOrdersPaymentMap(): \Apilo\Model\MappingDTO[]
```

Get Payment types list.

Get Payment types list

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: BearerAuth
$config = Apilo\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Apilo\Api\OrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getRestOrdersPaymentMap();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->getRestOrdersPaymentMap: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Apilo\Model\MappingDTO[]**](../Model/MappingDTO.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getRestOrdersPlatformMap()`

```php
getRestOrdersPlatformMap(): \Apilo\Model\MappingDTO[]
```

Get Platform list.

Get Platform list

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: BearerAuth
$config = Apilo\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Apilo\Api\OrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getRestOrdersPlatformMap();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->getRestOrdersPlatformMap: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Apilo\Model\MappingDTO[]**](../Model/MappingDTO.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getRestOrdersRawMedia()`

```php
getRestOrdersRawMedia($id, $document)
```

Order Binary document.

Binary contents of the document (or shipment label) file belongs to the specified order

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: BearerAuth
$config = Apilo\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Apilo\Api\OrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | order number in Apilo system, e.g. <code>AL0012345</code>
$document = 'document_example'; // string | ID of the document or shipment belongs to the Apilo order

try {
    $apiInstance->getRestOrdersRawMedia($id, $document);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->getRestOrdersRawMedia: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| order number in Apilo system, e.g. &lt;code&gt;AL0012345&lt;/code&gt; | |
| **document** | **string**| ID of the document or shipment belongs to the Apilo order | |

### Return type

void (empty response body)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/pdf`, `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getRestOrdersShipmentDetail()`

```php
getRestOrdersShipmentDetail($id, $shipment): \Apilo\Model\RestOrderShipmentDTO3
```

Shipment detail.

Detail of specific shipment belongs to given order

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: BearerAuth
$config = Apilo\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Apilo\Api\OrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | order number in Apilo system, e.g. <code>AL0012345</code>
$shipment = 'shipment_example'; // string | ID of the shipment belongs to the Apilo order

try {
    $result = $apiInstance->getRestOrdersShipmentDetail($id, $shipment);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->getRestOrdersShipmentDetail: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| order number in Apilo system, e.g. &lt;code&gt;AL0012345&lt;/code&gt; | |
| **shipment** | **string**| ID of the shipment belongs to the Apilo order | |

### Return type

[**\Apilo\Model\RestOrderShipmentDTO3**](../Model/RestOrderShipmentDTO3.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getRestOrdersShipmentList()`

```php
getRestOrdersShipmentList($id, $offset, $limit): \Apilo\Model\GetRestOrdersShipmentList200Response
```

List of order shipments.

List of shipments belongs to the indicated order

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: BearerAuth
$config = Apilo\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Apilo\Api\OrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | order number in Apilo system, e.g. <code>AL0012345</code>
$offset = 56; // int | Position indicator (0-beginning, 1-skips one record, 256 - skips 256 records)
$limit = 56; // int | Limit of returned results, max 512 records

try {
    $result = $apiInstance->getRestOrdersShipmentList($id, $offset, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->getRestOrdersShipmentList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| order number in Apilo system, e.g. &lt;code&gt;AL0012345&lt;/code&gt; | |
| **offset** | **int**| Position indicator (0-beginning, 1-skips one record, 256 - skips 256 records) | [optional] |
| **limit** | **int**| Limit of returned results, max 512 records | [optional] |

### Return type

[**\Apilo\Model\GetRestOrdersShipmentList200Response**](../Model/GetRestOrdersShipmentList200Response.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getRestOrdersShipmentStatusMap()`

```php
getRestOrdersShipmentStatusMap(): \Apilo\Model\MappingDTO[]
```

Get shipment status map.

Shipment status map

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: BearerAuth
$config = Apilo\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Apilo\Api\OrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getRestOrdersShipmentStatusMap();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->getRestOrdersShipmentStatusMap: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Apilo\Model\MappingDTO[]**](../Model/MappingDTO.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getRestOrdersShippingSettingsDefaults()`

```php
getRestOrdersShippingSettingsDefaults($id): \Apilo\Model\RestOrderDefaultShippingSettingsDTO
```

Get order default shipping settings.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: BearerAuth
$config = Apilo\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Apilo\Api\OrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | order number in Apilo system, e.g. <code>AL0012345</code>

try {
    $result = $apiInstance->getRestOrdersShippingSettingsDefaults($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->getRestOrdersShippingSettingsDefaults: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| order number in Apilo system, e.g. &lt;code&gt;AL0012345&lt;/code&gt; | |

### Return type

[**\Apilo\Model\RestOrderDefaultShippingSettingsDTO**](../Model/RestOrderDefaultShippingSettingsDTO.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getRestOrdersStatusMap()`

```php
getRestOrdersStatusMap(): \Apilo\Model\MappingDTO[]
```

Get order Status types list.

Get Order Status types list

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: BearerAuth
$config = Apilo\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Apilo\Api\OrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getRestOrdersStatusMap();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->getRestOrdersStatusMap: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Apilo\Model\MappingDTO[]**](../Model/MappingDTO.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getRestOrdersTagList()`

```php
getRestOrdersTagList(): \Apilo\Model\MappingDTO[]
```

Tag list.

List of tag

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: BearerAuth
$config = Apilo\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Apilo\Api\OrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getRestOrdersTagList();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->getRestOrdersTagList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Apilo\Model\MappingDTO[]**](../Model/MappingDTO.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postRestOrderDocumentsCreate()`

```php
postRestOrderDocumentsCreate($id, $rest_order_document_dto): \Apilo\Model\RestOrderDocumentDTO2
```

Create document for order.

Create document for order

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: BearerAuth
$config = Apilo\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Apilo\Api\OrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | order number in Apilo system, e.g. <code>AL0012345</code>
$rest_order_document_dto = new \Apilo\Model\RestOrderDocumentDTO(); // \Apilo\Model\RestOrderDocumentDTO

try {
    $result = $apiInstance->postRestOrderDocumentsCreate($id, $rest_order_document_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->postRestOrderDocumentsCreate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| order number in Apilo system, e.g. &lt;code&gt;AL0012345&lt;/code&gt; | |
| **rest_order_document_dto** | [**\Apilo\Model\RestOrderDocumentDTO**](../Model/RestOrderDocumentDTO.md)|  | |

### Return type

[**\Apilo\Model\RestOrderDocumentDTO2**](../Model/RestOrderDocumentDTO2.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postRestOrdersCreate()`

```php
postRestOrdersCreate($rest_order_write_dto): \Apilo\Model\PostRestOrdersCreate200Response
```

Create a new order.

Create a new order

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: BearerAuth
$config = Apilo\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Apilo\Api\OrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$rest_order_write_dto = new \Apilo\Model\RestOrderWriteDTO(); // \Apilo\Model\RestOrderWriteDTO | 

try {
    $result = $apiInstance->postRestOrdersCreate($rest_order_write_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->postRestOrdersCreate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **rest_order_write_dto** | [**\Apilo\Model\RestOrderWriteDTO**](../Model/RestOrderWriteDTO.md)|  | [optional] |

### Return type

[**\Apilo\Model\PostRestOrdersCreate200Response**](../Model/PostRestOrdersCreate200Response.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postRestOrdersOrderNoteCreate()`

```php
postRestOrdersOrderNoteCreate($id, $rest_order_note_dto2): mixed
```

Add note to order.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: BearerAuth
$config = Apilo\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Apilo\Api\OrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | order number in Apilo system, e.g. <code>AL0012345</code>
$rest_order_note_dto2 = new \Apilo\Model\RestOrderNoteDTO2(); // \Apilo\Model\RestOrderNoteDTO2

try {
    $result = $apiInstance->postRestOrdersOrderNoteCreate($id, $rest_order_note_dto2);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->postRestOrdersOrderNoteCreate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| order number in Apilo system, e.g. &lt;code&gt;AL0012345&lt;/code&gt; | |
| **rest_order_note_dto2** | [**\Apilo\Model\RestOrderNoteDTO2**](../Model/RestOrderNoteDTO2.md)|  | [optional] |

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

## `postRestOrdersOrderTagCreate()`

```php
postRestOrdersOrderTagCreate($order_id, $order_tag_post): mixed
```

Create order tag.

Create order tag

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: BearerAuth
$config = Apilo\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Apilo\Api\OrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$order_id = 'order_id_example'; // string | Order ID
$order_tag_post = new \Apilo\Model\OrderTagPost(); // \Apilo\Model\OrderTagPost

try {
    $result = $apiInstance->postRestOrdersOrderTagCreate($order_id, $order_tag_post);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->postRestOrdersOrderTagCreate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **order_id** | **string**| Order ID | |
| **order_tag_post** | [**\Apilo\Model\OrderTagPost**](../Model/OrderTagPost.md)|  | |

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

## `postRestOrdersPaymentCreate()`

```php
postRestOrdersPaymentCreate($id, $rest_order_payment_dto): mixed
```

Add payment to Order.

Add payment to Orders

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: BearerAuth
$config = Apilo\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Apilo\Api\OrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | order number in Apilo system, e.g. <code>AL0012345</code>
$rest_order_payment_dto = new \Apilo\Model\RestOrderPaymentDTO(); // \Apilo\Model\RestOrderPaymentDTO

try {
    $result = $apiInstance->postRestOrdersPaymentCreate($id, $rest_order_payment_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->postRestOrdersPaymentCreate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| order number in Apilo system, e.g. &lt;code&gt;AL0012345&lt;/code&gt; | |
| **rest_order_payment_dto** | [**\Apilo\Model\RestOrderPaymentDTO**](../Model/RestOrderPaymentDTO.md)|  | |

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

## `postRestOrdersShipmentCreate()`

```php
postRestOrdersShipmentCreate($id, $rest_order_shipment_dto2): \Apilo\Model\RestOrderShipmentDTO3
```

Add shipment to order.

Shipment is created as order document, it can be see from <a href='#tag/Order/operation/get_rest_order_documents_detail'>here</a>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: BearerAuth
$config = Apilo\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Apilo\Api\OrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | order number in Apilo system, e.g. <code>AL0012345</code>
$rest_order_shipment_dto2 = new \Apilo\Model\RestOrderShipmentDTO2(); // \Apilo\Model\RestOrderShipmentDTO2

try {
    $result = $apiInstance->postRestOrdersShipmentCreate($id, $rest_order_shipment_dto2);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->postRestOrdersShipmentCreate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| order number in Apilo system, e.g. &lt;code&gt;AL0012345&lt;/code&gt; | |
| **rest_order_shipment_dto2** | [**\Apilo\Model\RestOrderShipmentDTO2**](../Model/RestOrderShipmentDTO2.md)|  | |

### Return type

[**\Apilo\Model\RestOrderShipmentDTO3**](../Model/RestOrderShipmentDTO3.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `putRestOrdersStatusChange()`

```php
putRestOrdersStatusChange($id, $rest_status_order_dto): \Apilo\Model\PutRestOrdersStatusChange200Response
```

Update order status.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: BearerAuth
$config = Apilo\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Apilo\Api\OrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | order number in Apilo system, e.g. <code>AL0012345</code>
$rest_status_order_dto = new \Apilo\Model\RestStatusOrderDTO(); // \Apilo\Model\RestStatusOrderDTO

try {
    $result = $apiInstance->putRestOrdersStatusChange($id, $rest_status_order_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->putRestOrdersStatusChange: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| order number in Apilo system, e.g. &lt;code&gt;AL0012345&lt;/code&gt; | |
| **rest_status_order_dto** | [**\Apilo\Model\RestStatusOrderDTO**](../Model/RestStatusOrderDTO.md)|  | |

### Return type

[**\Apilo\Model\PutRestOrdersStatusChange200Response**](../Model/PutRestOrdersStatusChange200Response.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

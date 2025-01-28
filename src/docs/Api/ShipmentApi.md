# Apilo\ShipmentApi

All URIs are relative to https://ENDPOINT.apilo.com/ (ENDPOINT is an individual client address), except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getRestShipmentCarrierAccountMap()**](ShipmentApi.md#getRestShipmentCarrierAccountMap) | **GET** /rest/api/shipping/carrier-account/map/ | Get Carrier Account list. |
| [**getRestShipmentCarrierDocumentIndex()**](ShipmentApi.md#getRestShipmentCarrierDocumentIndex) | **GET** /rest/api/shipping/carrier-document/ | Get list of shipment carrier documents. |
| [**getRestShipmentCarrierSendingMethods()**](ShipmentApi.md#getRestShipmentCarrierSendingMethods) | **GET** /rest/api/shipping/carrier-account/{id}/method/ | Get Carrier sending methods. |
| [**getRestShipmentDetails()**](ShipmentApi.md#getRestShipmentDetails) | **GET** /rest/api/shipping/shipment/{id}/ | Get detailed shipment by given ID. |
| [**getRestShipmentInfoIndex()**](ShipmentApi.md#getRestShipmentInfoIndex) | **GET** /rest/api/shipping/shipment/info/ | Get list of shipments for given filters. |
| [**getRestShipmentOptions()**](ShipmentApi.md#getRestShipmentOptions) | **GET** /rest/api/shipping/carrier-account/{carrierAccountId}/method/{method}/map/ | Get list of shipment option need to create new shipment. |
| [**getRestShipmentTracking()**](ShipmentApi.md#getRestShipmentTracking) | **GET** /rest/api/shipping/shipment/tracking/ | Get a list of shipments tracking information for given filters. |
| [**postRestShipmentCarrierDocumentCreate()**](ShipmentApi.md#postRestShipmentCarrierDocumentCreate) | **POST** /rest/api/shipping/carrier-document/ | Confirm shipment and order pickup. |
| [**postRestShipmentNewShipment()**](ShipmentApi.md#postRestShipmentNewShipment) | **POST** /rest/api/shipping/shipment/ | Creates a new shipment from the submitted data. |
| [**postRestShipmentPickupDateProposal()**](ShipmentApi.md#postRestShipmentPickupDateProposal) | **POST** /rest/api/shipping/pickup-date-proposal/ | Get shipment pick up date proposal. |


## `getRestShipmentCarrierAccountMap()`

```php
getRestShipmentCarrierAccountMap(): \Apilo\Model\CarrierAccountMappingListingDTO
```

Get Carrier Account list.

Get Carrier Account List

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Apilo\Api\ShipmentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->getRestShipmentCarrierAccountMap();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShipmentApi->getRestShipmentCarrierAccountMap: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Apilo\Model\CarrierAccountMappingListingDTO**](../Model/CarrierAccountMappingListingDTO.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getRestShipmentCarrierDocumentIndex()`

```php
getRestShipmentCarrierDocumentIndex($carrier_account_id, $created_at_after, $created_at_before): \Apilo\Model\RestShipmentCarrierDocumentsListingResponse
```

Get list of shipment carrier documents.

List of carrier documents for carrier accounts

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Apilo\Api\ShipmentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$carrier_account_id = array(56); // int[] | Carrier account IDs
$created_at_after = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime
$created_at_before = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime

try {
    $result = $apiInstance->getRestShipmentCarrierDocumentIndex($carrier_account_id, $created_at_after, $created_at_before);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShipmentApi->getRestShipmentCarrierDocumentIndex: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **carrier_account_id** | [**int[]**](../Model/int.md)| Carrier account IDs | [optional] |
| **created_at_after** | **\DateTime**|  | [optional] |
| **created_at_before** | **\DateTime**|  | [optional] |

### Return type

[**\Apilo\Model\RestShipmentCarrierDocumentsListingResponse**](../Model/RestShipmentCarrierDocumentsListingResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getRestShipmentCarrierSendingMethods()`

```php
getRestShipmentCarrierSendingMethods($id): \Apilo\Model\RestCarrierMethodListingDTO
```

Get Carrier sending methods.



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Apilo\Api\ShipmentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string | Carrier Account ID

try {
    $result = $apiInstance->getRestShipmentCarrierSendingMethods($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShipmentApi->getRestShipmentCarrierSendingMethods: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Carrier Account ID | |

### Return type

[**\Apilo\Model\RestCarrierMethodListingDTO**](../Model/RestCarrierMethodListingDTO.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getRestShipmentDetails()`

```php
getRestShipmentDetails($id): \Apilo\Model\RestShipmentDetailsDTO
```

Get detailed shipment by given ID.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Apilo\Api\ShipmentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string | Shipment ID

try {
    $result = $apiInstance->getRestShipmentDetails($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShipmentApi->getRestShipmentDetails: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Shipment ID | |

### Return type

[**\Apilo\Model\RestShipmentDetailsDTO**](../Model/RestShipmentDetailsDTO.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getRestShipmentInfoIndex()`

```php
getRestShipmentInfoIndex($carrier_account_id, $carrier_broker_id, $post_date_after, $post_date_before, $status): \Apilo\Model\RestShipmentInfoIndexResponse
```

Get list of shipments for given filters.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Apilo\Api\ShipmentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$carrier_account_id = array(56); // int[] | Carrier account IDs
$carrier_broker_id = array(56); // int[] | Carrier broker IDs
$post_date_after = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime
$post_date_before = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime
$status = array(56); // int[] | Status of shipment (0 - New parcel, not yet shipped, 1 - The parcel is waiting in the waiting room, it has not been sent, 2 - A new parcel, registered in the courier's system but does not have a status yet, 21 - Package in delivery, 9 - Package removed, 31 - The parcel is waiting for collection (collection point, notice), 32 - Return of the parcel to the sender, other error, 100 - Parcel received, 101 - Return parcel delivered)

try {
    $result = $apiInstance->getRestShipmentInfoIndex($carrier_account_id, $carrier_broker_id, $post_date_after, $post_date_before, $status);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShipmentApi->getRestShipmentInfoIndex: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **carrier_account_id** | [**int[]**](../Model/int.md)| Carrier account IDs | [optional] |
| **carrier_broker_id** | [**int[]**](../Model/int.md)| Carrier broker IDs | [optional] |
| **post_date_after** | **\DateTime**|  | [optional] |
| **post_date_before** | **\DateTime**|  | [optional] |
| **status** | [**int[]**](../Model/int.md)| Status of shipment (0 - New parcel, not yet shipped, 1 - The parcel is waiting in the waiting room, it has not been sent, 2 - A new parcel, registered in the courier&#39;s system but does not have a status yet, 21 - Package in delivery, 9 - Package removed, 31 - The parcel is waiting for collection (collection point, notice), 32 - Return of the parcel to the sender, other error, 100 - Parcel received, 101 - Return parcel delivered) | [optional] |

### Return type

[**\Apilo\Model\RestShipmentInfoIndexResponse**](../Model/RestShipmentInfoIndexResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getRestShipmentOptions()`

```php
getRestShipmentOptions($carrier_account_id, $method): \Apilo\Model\RestShipmentOptionsAndParcelsDTO
```

Get list of shipment option need to create new shipment.

List of shipment options need to create new shipment.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Apilo\Api\ShipmentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$carrier_account_id = 'carrier_account_id_example'; // string | Carrier account ID
$method = 'method_example'; // string | Delivery method

try {
    $result = $apiInstance->getRestShipmentOptions($carrier_account_id, $method);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShipmentApi->getRestShipmentOptions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **carrier_account_id** | **string**| Carrier account ID | |
| **method** | **string**| Delivery method | |

### Return type

[**\Apilo\Model\RestShipmentOptionsAndParcelsDTO**](../Model/RestShipmentOptionsAndParcelsDTO.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getRestShipmentTracking()`

```php
getRestShipmentTracking($carrier_account_id, $carrier_broker_id, $post_date_after, $post_date_before, $received_date_after, $received_date_before, $status): \Apilo\Model\RestShipmentTrackingResponse
```

Get a list of shipments tracking information for given filters.

List of shipments tracking

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Apilo\Api\ShipmentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$carrier_account_id = array(56); // int[] | Carrier account IDs
$carrier_broker_id = array(56); // int[] | Carrier broker IDs
$post_date_after = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime
$post_date_before = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime
$received_date_after = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime
$received_date_before = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime
$status = array(56); // int[] | Status of shipment (0 - New parcel, not yet shipped, 1 - The parcel is waiting in the waiting room, it has not been sent, 2 - A new parcel, registered in the courier's system but does not have a status yet, 21 - Package in delivery, 9 - Package removed, 31 - The parcel is waiting for collection (collection point, notice), 32 - Return of the parcel to the sender, other error, 100 - Parcel received, 101 - Return parcel delivered)

try {
    $result = $apiInstance->getRestShipmentTracking($carrier_account_id, $carrier_broker_id, $post_date_after, $post_date_before, $received_date_after, $received_date_before, $status);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShipmentApi->getRestShipmentTracking: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **carrier_account_id** | [**int[]**](../Model/int.md)| Carrier account IDs | [optional] |
| **carrier_broker_id** | [**int[]**](../Model/int.md)| Carrier broker IDs | [optional] |
| **post_date_after** | **\DateTime**|  | [optional] |
| **post_date_before** | **\DateTime**|  | [optional] |
| **received_date_after** | **\DateTime**|  | [optional] |
| **received_date_before** | **\DateTime**|  | [optional] |
| **status** | [**int[]**](../Model/int.md)| Status of shipment (0 - New parcel, not yet shipped, 1 - The parcel is waiting in the waiting room, it has not been sent, 2 - A new parcel, registered in the courier&#39;s system but does not have a status yet, 21 - Package in delivery, 9 - Package removed, 31 - The parcel is waiting for collection (collection point, notice), 32 - Return of the parcel to the sender, other error, 100 - Parcel received, 101 - Return parcel delivered) | [optional] |

### Return type

[**\Apilo\Model\RestShipmentTrackingResponse**](../Model/RestShipmentTrackingResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postRestShipmentCarrierDocumentCreate()`

```php
postRestShipmentCarrierDocumentCreate($rest_shipping_confirmations_dto): \Apilo\Model\RestShippingConfirmationsListingResponseDTO
```

Confirm shipment and order pickup.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Apilo\Api\ShipmentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$rest_shipping_confirmations_dto = new \Apilo\Model\RestShippingConfirmationsDTO(); // \Apilo\Model\RestShippingConfirmationsDTO

try {
    $result = $apiInstance->postRestShipmentCarrierDocumentCreate($rest_shipping_confirmations_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShipmentApi->postRestShipmentCarrierDocumentCreate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **rest_shipping_confirmations_dto** | [**\Apilo\Model\RestShippingConfirmationsDTO**](../Model/RestShippingConfirmationsDTO.md)|  | |

### Return type

[**\Apilo\Model\RestShippingConfirmationsListingResponseDTO**](../Model/RestShippingConfirmationsListingResponseDTO.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postRestShipmentNewShipment()`

```php
postRestShipmentNewShipment($new_shipment_dto): \Apilo\Model\NewShipmentsCreatedResponse
```

Creates a new shipment from the submitted data.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Apilo\Api\ShipmentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$new_shipment_dto = new \Apilo\Model\NewShipmentDTO(); // \Apilo\Model\NewShipmentDTO

try {
    $result = $apiInstance->postRestShipmentNewShipment($new_shipment_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShipmentApi->postRestShipmentNewShipment: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **new_shipment_dto** | [**\Apilo\Model\NewShipmentDTO**](../Model/NewShipmentDTO.md)|  | |

### Return type

[**\Apilo\Model\NewShipmentsCreatedResponse**](../Model/NewShipmentsCreatedResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postRestShipmentPickupDateProposal()`

```php
postRestShipmentPickupDateProposal($rest_shipments_dto): \Apilo\Model\RestShipmentPickupDateProposalsListingDTO
```

Get shipment pick up date proposal.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Apilo\Api\ShipmentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$rest_shipments_dto = new \Apilo\Model\RestShipmentsDTO(); // \Apilo\Model\RestShipmentsDTO | 

try {
    $result = $apiInstance->postRestShipmentPickupDateProposal($rest_shipments_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShipmentApi->postRestShipmentPickupDateProposal: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **rest_shipments_dto** | [**\Apilo\Model\RestShipmentsDTO**](../Model/RestShipmentsDTO.md)|  | [optional] |

### Return type

[**\Apilo\Model\RestShipmentPickupDateProposalsListingDTO**](../Model/RestShipmentPickupDateProposalsListingDTO.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

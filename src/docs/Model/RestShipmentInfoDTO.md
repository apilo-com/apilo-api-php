# # RestShipmentInfoDTO

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | Internal shipment ID | [optional]
**carrier_account_id** | **int** | Carrier account ID | [optional]
**carrier_broker_id** | **int** | Carrier broker ID | [optional]
**external_id** | **string** | External unique ID of the shipment | [optional]
**order_id** | **string** | Internal order ID | [optional]
**created_at** | **\DateTime** | Date the document was created in Apilo | [optional]
**post_date** | **\DateTime** | Date of shipment | [optional]
**status** | **string** | Shipment tracking status if is present or NULL | [optional]
**method** | **string** | External unique ID of the shipment method | [optional]
**media** | **string** | Null or media UUID - &lt;a href&#x3D;&#39;#tag/media/operation/get_rest_media_get&#39;&gt;media attachment endpoint&lt;/a&gt; | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)

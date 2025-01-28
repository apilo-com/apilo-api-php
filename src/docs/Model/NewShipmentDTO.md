# # NewShipmentDTO

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**carrier_account_id** | **int** | Carrier account ID | [optional]
**address_receiver** | [**\Apilo\Model\AddressReceiverDTO**](AddressReceiverDTO.md) |  | [optional]
**order_id** | **string** | Order ID | [optional]
**post_date** | **\DateTime** | Post date | [optional]
**method** | **string** | Shipment methods can be downloaded from &lt;a href&#x3D;&#39;#tag/Shipment/operation/get_rest_shipment_carrier_sending_methods&#39;&gt;Get Carrier sending methods&lt;/a&gt;. | [optional]
**options** | [**\Apilo\Model\RestShipmentOptionDTO[]**](RestShipmentOptionDTO.md) | Options can be downloaded from &lt;a href&#x3D;&#39;#tag/Shipment/operation/get_rest_shipment_options&#39;&gt;Get list of shipment option need to create new shipment&lt;/a&gt;. | [optional]
**parcels** | [**\Apilo\Model\RestShipmentParcelDTO[]**](RestShipmentParcelDTO.md) | Options can be downloaded from &lt;a href&#x3D;&#39;#tag/Shipment/operation/get_rest_shipment_options&#39;&gt;Get list of shipment option need to create new shipment&lt;/a&gt;. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)

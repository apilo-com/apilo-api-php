# # RestOrderShipmentDTO2

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id_external** | **string** | External unique ID of the shipment | [optional]
**tracking** | **string** | Shipment tracking number |
**carrier_provider_id** | **int** | ID of &lt;a href&#x3D;&#39;#tag/Order/operation/get_rest_orders_carrier_map&#39;&gt;Carrier ID&lt;/a&gt;. If you specify a value equal to &#39;manual carrier&#39;, there might be problems in passing the tracking number to the external integration. |
**post_date** | **\DateTime** | Date of shipment | [optional]
**media** | **string** | Null or media UUID - &lt;a href&#x3D;&#39;#tag/Media/operation/post_rest_media_new&#39;&gt;media attachment endpoint&lt;/a&gt; | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)

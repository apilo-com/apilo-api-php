# # RestOrderListDTO

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Internal order ID | [optional]
**status** | **int** | &lt;a href&#x3D;&#39;#tag/Order/operation/get_rest_orders_shipment_status_map&#39;&gt;Status ID&lt;/a&gt; |
**id_external** | **string** | External order ID, e.g. on the sales platform | [optional]
**is_invoice** | **bool** | Does the customer want a VAT invoice? | [optional]
**payment_status** | **string** | Payment status (&#x60;0-no payment&#x60;, &#x60;1-partially paid&#x60;, &#x60;2-paid in full/amount in accordance with the order&#x60;, &#x60;3-overpayment&#x60;) | [optional]
**payment_type** | **int** | &lt;a href&#x3D;&#39;#tag/Order/operation/get_rest_orders_payment_map&#39;&gt;Payment method ID&lt;/a&gt; |
**original_currency** | **string** | Order currency |
**is_encrypted** | **bool** | Is order customer data encrypted? | [optional]
**created_at** | **\DateTime** | Date when the order was created in Apilo | [optional]
**updated_at** | **\DateTime** | Date when the order was updated in Apilo | [optional]
**order_items** | [**\Apilo\Model\RestOrderItemsDTO3[]**](RestOrderItemsDTO3.md) | Order items list |
**address_customer** | [**\Apilo\Model\RestOrderAddressDTO7**](RestOrderAddressDTO7.md) |  |
**platform_id** | **int** | &lt;a href&#x3D;&#39;#tag/Order/operation/get_rest_orders_platform_map&#39;&gt;Sale platform account ID&lt;/a&gt; |
**is_canceled_by_buyer** | **bool** | Canceled by buyer (Allegro) | [optional]
**carrier_id** | **int** | &lt;a href&#x3D;&#39;#tag/Order/operation/get_rest_orders_carrier_map&#39;&gt;Carrier Id&lt;/a&gt; | [optional]
**platform_account_id** | **int** | &lt;a href&#x3D;&#39;#tag/Order/operation/get_rest_orders_platform_map&#39;&gt;Sale platform account ID&lt;/a&gt; | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)

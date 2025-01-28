# # RestOrderReadDTO

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**platform_account_id** | **int** | &lt;a href&#x3D;&#39;#tag/Order/operation/get_rest_orders_platform_map&#39;&gt;Sale platform account ID&lt;/a&gt; | [optional]
**platform_id** | **int** | Sale platform ID |
**id_external** | **string** | External order ID, e.g. on the sales platform | [optional]
**is_invoice** | **bool** | Does the customer want a VAT invoice? | [optional]
**customer_login** | **bool** |  | [optional]
**payment_status** | **string** | Payment status (&#x60;0-no payment&#x60;, &#x60;1-partially paid&#x60;, &#x60;2-paid in full/amount in accordance with the order&#x60;, &#x60;3-overpayment&#x60;) |
**payment_type** | **int** | &lt;a href&#x3D;&#39;#tag/Order/operation/get_rest_orders_payment_map&#39;&gt;Payment method ID&lt;/a&gt; |
**original_currency** | **string** | Order currency |
**original_amount_total_without_tax** | **string** | Value of the order items without tax |
**original_amount_total_with_tax** | **string** | Value of order items including tax |
**original_amount_total_paid** | **string** | Gross amount paid by customer in original currency |
**send_date_min** | **\DateTime** | Minimal shipping date | [optional]
**send_date_max** | **\DateTime** | Maximum shipping date | [optional]
**is_encrypted** | **bool** | Is order customer data encrypted? | [optional]
**preferences** | [**\Apilo\Model\RestOrderWriteDTOPreferences**](RestOrderWriteDTOPreferences.md) |  | [optional]
**created_at** | **\DateTime** | Date when the order was created in Apilo | [optional]
**updated_at** | **\DateTime** | Date when the order was updated in Apilo | [optional]
**order_items** | [**\Apilo\Model\RestOrderItemsDTO2[]**](RestOrderItemsDTO2.md) | Order items list |
**order_payments** | [**\Apilo\Model\RestOrderPaymentDTO2[]**](RestOrderPaymentDTO2.md) | Order payments list | [optional]
**address_customer** | [**\Apilo\Model\RestOrderAddressDTO4**](RestOrderAddressDTO4.md) |  |
**address_delivery** | [**\Apilo\Model\RestOrderAddressDTO5**](RestOrderAddressDTO5.md) |  |
**address_invoice** | [**\Apilo\Model\RestOrderAddressDTO6**](RestOrderAddressDTO6.md) |  | [optional]
**carrier_account** | **int** | &lt;a href&#x3D;&#39;#tag/Order/operation/get_rest_orders_carrier_account_map&#39;&gt;Carrier account ID&lt;/a&gt; |
**order_notes** | [**\Apilo\Model\RestOrderNoteDTO3[]**](RestOrderNoteDTO3.md) | Order notes and comments | [optional]
**ordered_at** | **\DateTime** | Date when the order was created by the customer |
**is_canceled_by_buyer** | **bool** | Canceled by buyer (Allegro) | [optional]
**id** | **string** | Internal order ID | [optional]
**status** | **int** | &lt;a href&#x3D;&#39;#tag/Order/operation/get_rest_orders_shipment_status_map&#39;&gt;Status ID&lt;/a&gt; |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)

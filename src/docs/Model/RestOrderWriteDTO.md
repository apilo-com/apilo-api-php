# # RestOrderWriteDTO

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**platform_id** | **int** | &lt;a href&#x3D;&#39;#tag/Order/operation/get_rest_orders_platform_map&#39;&gt;Sale platform account ID&lt;/a&gt; |
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
**preferences** | [**\Apilo\Model\RestOrderWriteDTOPreferences**](RestOrderWriteDTOPreferences.md) |  | [optional]
**order_items** | [**\Apilo\Model\RestOrderItemsDTO[]**](RestOrderItemsDTO.md) | Order items list |
**order_payments** | [**\Apilo\Model\RestOrderPaymentDTO[]**](RestOrderPaymentDTO.md) | Order payments list | [optional]
**address_customer** | [**\Apilo\Model\RestOrderAddressDTO**](RestOrderAddressDTO.md) |  |
**address_delivery** | [**\Apilo\Model\RestOrderAddressDTO2**](RestOrderAddressDTO2.md) |  |
**address_invoice** | [**\Apilo\Model\RestOrderAddressDTO3**](RestOrderAddressDTO3.md) |  | [optional]
**carrier_account** | **int** | &lt;a href&#x3D;&#39;#tag/Order/operation/get_rest_orders_carrier_account_map&#39;&gt;Carrier account ID&lt;/a&gt; |
**order_notes** | [**\Apilo\Model\RestOrderNoteDTO2[]**](RestOrderNoteDTO2.md) | Order notes and comments | [optional]
**ordered_at** | **\DateTime** | Date when the order was created by the customer |
**status** | **int** | &lt;a href&#x3D;&#39;#tag/Order/operation/get_rest_orders_shipment_status_map&#39;&gt;Status ID&lt;/a&gt; |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)

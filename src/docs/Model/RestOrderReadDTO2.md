# # RestOrderReadDTO2

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id_external** | **string** | External order ID, e.g. on the sales platform | [optional]
**is_invoice** | **bool** | Does the customer want a VAT invoice? | [optional]
**original_currency** | **string** | Order currency |
**is_encrypted** | **bool** | Is order customer data encrypted? | [optional]
**created_at** | **\DateTime** | Date when the order was created in Apilo | [optional]
**updated_at** | **\DateTime** | Date when the order was updated in Apilo | [optional]
**order_items** | [**\Apilo\Model\RestOrderItemsDTO3[]**](RestOrderItemsDTO3.md) | Order items list |
**address_customer** | [**\Apilo\Model\RestOrderAddressDTO7**](RestOrderAddressDTO7.md) |  |
**is_canceled_by_buyer** | **bool** | Canceled by buyer (Allegro) | [optional]
**id** | **string** | Internal order ID | [optional]
**status** | **int** | &lt;a href&#x3D;&#39;#tag/Order/operation/get_rest_orders_shipment_status_map&#39;&gt;Status ID&lt;/a&gt; |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)

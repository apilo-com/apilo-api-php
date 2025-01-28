# # RestOrderItemsDTO2

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | Product ID in create/update process, Unique Order Item ID in reading process | [optional]
**id_external** | **string** | External product item ID | [optional]
**ean** | **string** | EAN | [optional]
**sku** | **string** | SKU | [optional]
**original_name** | **string** | Product name |
**original_code** | **string** | Product unique code | [optional]
**original_price_with_tax** | **string** | Gross product price |
**original_price_without_tax** | **string** | Net product price | [optional]
**media** | **string** | Image URL | [optional]
**quantity** | **int** | Quantity of products |
**tax** | **string** | The amount of VAT (VAT value | &#x60;&#39;&#39;&#x60; if TAX is not specified and will be calculated | &#x60;&#39;-1&#39;&#x60; when exempt from VAT) | [optional]
**status** | **string** |  | [optional]
**unit** | **string** | Product unit | [optional]
**type** | **string** | Order item type (&#x60;1-Product&#x60;, &#x60;2-Shipment&#x60;, &#x60;3-service&#x60;) |
**product_id** | **int** | Internal &lt;a href&#x3D;&#39;#tag/Warehouse/operation/get_rest_warehouse_product_index&#39;&gt;Product ID&lt;/a&gt; in Apilo (according to product card) | [optional]
**product_set** | **int** | Product Set | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)

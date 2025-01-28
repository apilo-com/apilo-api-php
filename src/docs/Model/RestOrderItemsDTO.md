# # RestOrderItemsDTO

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
**quantity** | **int** | Quantity of products |
**tax** | **string** | The amount of VAT (VAT value | &#x60;&#39;&#39;&#x60; if TAX is not specified and will be calculated | &#x60;&#39;-1&#39;&#x60; when exempt from VAT) | [optional]
**unit** | **string** | Product unit | [optional]
**type** | **string** | Order item type (&#x60;1-Product&#x60;, &#x60;2-Shipment&#x60;, &#x60;3-service&#x60;) |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)

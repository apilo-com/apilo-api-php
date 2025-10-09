# # RestDocumentDTO

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | Internal ID of the fiscal document | [optional]
**document_number** | **string** | Fiscal document number | [optional]
**original_amount_total_with_tax** | **string** | Gross amount on the document | [optional]
**original_amount_total_without_tax** | **string** | Nett amount on the document | [optional]
**original_currency_exchange_value** | **string** | Exchange rate | [optional]
**original_currency** | **string** | Currency in which the order was made | [optional]
**currency** | **string** | Currency on the document | [optional]
**created_at** | **\DateTime** | Date the document was created in Apilo | [optional]
**invoiced_at** | **\DateTime** | Date of issuance of the document |
**sold_at** | **\DateTime** | Date of sale on the document | [optional]
**type** | **string** | Document type (1 - Invoice, 2 - Margin invoice, 5 - Receipt, 10 - Proforma invoice) | [optional]
**document_receiver** | [**\Apilo\Model\RestDocumentPersonalInfoDTO**](RestDocumentPersonalInfoDTO.md) |  | [optional]
**document_issuer** | [**\Apilo\Model\RestDocumentPersonalInfoDTO**](RestDocumentPersonalInfoDTO.md) |  | [optional]
**document_items** | [**\Apilo\Model\RestDocumentItemDTO[]**](RestDocumentItemDTO.md) | Docment items | [optional]
**payment_type** | **int** | &lt;a href&#x3D;&#39;#tag/Order/operation/get_rest_orders_payment_map&#39;&gt;Payment method ID&lt;/a&gt; |
**order_id** | **string** | Order Id | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)

# # RestOrderDocumentDTO

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | Internal ID of the shipment | [optional]
**id_external** | **string** | External unique ID of the document - used for the update |
**number** | **string** | External document number | [optional]
**price_with_tax** | **string** | The gross value | [optional]
**price_without_tax** | **string** | The net value | [optional]
**currency** | **string** | Currency on the document | [optional]
**currency_value** | **string** | Currency exchange rate | [optional]
**type** | **int** | Document type - &lt;a href&#x3D;&#39;#tag/order/paths/~1rest~1api~1orders~1documents~1map~1/get&#39;&gt;order document types endpoint&lt;/a&gt; |
**created_at** | **string** | Date the document was added to Apilo | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)

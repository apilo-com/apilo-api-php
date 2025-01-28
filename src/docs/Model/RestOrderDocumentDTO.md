# # RestOrderDocumentDTO

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id_external** | **string** | External unique ID of the document - used for the update |
**number** | **string** | External document number | [optional]
**price_with_tax** | **string** | The gross value | [optional]
**price_without_tax** | **string** | The net value | [optional]
**currency** | **string** | Currency on the document | [optional]
**currency_value** | **string** | Currency exchange rate | [optional]
**type** | **int** | Document type - &lt;a href&#x3D;&#39;#tag/Order/operation/get_rest_documents_map&#39;&gt;order document types endpoint&lt;/a&gt; |
**media** | **string** | Null or media UUID - &lt;a href&#x3D;&#39;#tag/Media/operation/post_rest_media_new&#39;&gt;media attachment endpoint&lt;/a&gt; | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)

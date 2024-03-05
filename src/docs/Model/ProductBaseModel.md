# # ProductBaseModel

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | Internal product ID in Apilo | [optional]
**original_code** | **string** | External product identifier (unambiguous against API/channel) | [optional]
**quantity** | **int** | Product stock | [optional]
**price_with_tax** | **string** | Gross price | [optional]
**tax** | **string** | VAT rate (e.g. 23.00, -1.00 - tax exempt). | [optional]
**status** | **int** | Product status (&#x60;0-inactive&#x60;, &#x60;1-active&#x60;, &#x60;8-archive&#x60;) | [optional]
**sku** | **string** | Product SKU | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)

# # RestShipmentTrackingDTO

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | Internal shipment ID | [optional]
**external_id** | **string** | External unique ID of the shipment | [optional]
**status** | **string** | Shipment tracking status if is present or NULL | [optional]
**status_date** | **\DateTime** | Date of handing over the shipment to the courier | [optional]
**status_description** | **string** | Descriptive meaning of status | [optional]
**status_check_timestamp** | **\DateTime** | Date when the shipment status was last checked | [optional]
**received_date** | **\DateTime** | The date the parcel was received | [optional]
**received_days** | **int** | Number of business days in which the parcel was received | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)

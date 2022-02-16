# ScheduleActionData

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**oc_id** | **int** | Overclocking profile ID | [optional] 
**oc_apply_mode** | **string** | How to apply overclocking profile: - When applying profile via &#x60;oc_id&#x60;   - replace - copy entire per-brand configurations of both default and per-algo sets   - merge - copy only individual fields of per-brand configurations of both default and per-algo sets - When applying config via &#x60;oc_config&#x60;   - replace - full replace the oc_config field in worker with one from request   - merge - update individual fields in worker&#39;s oc_config | [optional] [default to 'replace']
**asic_oc** | **object** |  | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)



# ScheduleFields

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **string** | Display name | [optional] 
**launch_at** | **int** | When to apply the flight sheet. If rrule is specified - this field defines when the first occurrence will happen. | [optional] 
**rrule** | **string** | How to repeat the task. This field accepts RRULE definition from RFC 5545. | [optional] 
**timezone** | **string** | Time zone for RRule. By default farm&#39;s or user&#39;s time zone is used. | [optional] 
**active** | **bool** | Is active | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)



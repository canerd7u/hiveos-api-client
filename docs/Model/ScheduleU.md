# ScheduleU

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **string** | Display name | [optional] 
**launch_at** | **int** | When to apply the flight sheet. If rrule is specified - this field defines when the first occurrence will happen. | [optional] 
**rrule** | **string** | How to repeat the task. This field accepts RRULE definition from RFC 5545. | [optional] 
**timezone** | **string** | Time zone for RRule. By default farm&#39;s or user&#39;s time zone is used. | [optional] 
**active** | **bool** | Is active | [optional] 
**created_at** | **int** | When entity was created | [optional] 
**prev_launch_at** | **int** | When the task was last executed | [optional] 
**next_launch_at** | **int** | When the task is scheduled for execution | [optional] 
**action** | **object** | Everything defined in this object will be applied to workers | [optional] 
**target** | **object** |  | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)



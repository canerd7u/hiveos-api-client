# Benchmark

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** |  | [optional] 
**farm_id** | **int** |  | [optional] 
**worker_id** | **int** |  | [optional] 
**tag_ids** | **int[]** |  | [optional] 
**started_at** | **int** | When the benchmark was started | [optional] 
**finished_at** | **int** | When the benchmark was finished. If absent - the benchmark is still running. | [optional] 
**aborted** | **bool** | This flag indicates that the benchmark was aborted. | [optional] 
**algos** | [**\Swagger\Client\Model\AlgoName[]**](AlgoName.md) | Algorithms that were chosen for benchmark | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)



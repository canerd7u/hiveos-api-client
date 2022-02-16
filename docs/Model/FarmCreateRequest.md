# FarmCreateRequest

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**nonfree** | **bool** | Paid features state | [optional] 
**tag_ids** | **int[]** |  | [optional] 
**hardware_power_draw** | **int** | Power consumption of worker&#39;s hardware, watts | [optional] 
**psu_efficiency** | **int** | Efficiency of power supply unit, % | [optional] 
**octofan_correct_power** | **bool** | Apply power correction settings to power consumption value from Octominer fan controller. Default is false. | [optional] 
**auto_tags** | **bool** | Auto-tags feature. If enabled - all workers inside the farm are automatically tagged. Rigs are tagged by GPU information such as model name, memory size, OEM, etc. ASICs are tagged by model name. | [optional] 
**default_fs** | **map[string,int]** | Default flight sheets keyed by platform (1 - rig, 2 - asic). These flight sheets will be automatically attached to newly created workers. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)



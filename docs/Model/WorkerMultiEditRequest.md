# WorkerMultiEditRequest

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**fs_id** | **int** | Flight sheet ID | [optional] 
**oc_id** | **int** | Overclocking profile ID | [optional] 
**oc_apply_mode** | **string** | How to apply overclocking profile: - When applying profile via &#x60;oc_id&#x60;   - replace - copy entire per-brand configurations of both default and per-algo sets   - merge - copy only individual fields of per-brand configurations of both default and per-algo sets - When applying config via &#x60;oc_config&#x60;   - replace - full replace the oc_config field in worker with one from request   - merge - update individual fields in worker&#39;s oc_config | [optional] [default to 'replace']
**oc_config** | [**\Swagger\Client\Model\OCConfig**](OCConfig.md) |  | [optional] 
**oc_algo** | [**\Swagger\Client\Model\OCAlgo**](OCAlgo.md) |  | [optional] 
**tag_ids** | **int[]** |  | [optional] 
**tag_update_mode** | **string** | Update mode for tags * add - add spicified tags ignoring if already assigned; * remove - remove spicified tags if assigned; * replace - replace all assigned tags with specified ones; | [optional] [default to 'replace']
**mirror_url** | [**\Swagger\Client\Model\MirrorUrl**](MirrorUrl.md) |  | [optional] 
**miners_config** | [**\Swagger\Client\Model\MinersConfig**](MinersConfig.md) |  | [optional] 
**watchdog** | **object** | Watchdog system | [optional] 
**options** | **object** | Worker options. This object will be merged with existing one on update. | [optional] 
**hardware_power_draw** | **int** | Power consumption of worker&#39;s hardware, watts | [optional] 
**psu_efficiency** | **int** | Efficiency of power supply unit, % | [optional] 
**octofan_correct_power** | **bool** | Apply power correction settings to power consumption value from Octominer fan controller. Default is false. | [optional] 
**autofan** | **object** | Autofan configuration | [optional] 
**octofan** | **object** | Configuration for Octominer fan controller | [optional] 
**coolbox** | **object** | Configuration for Coolbox fan controller | [optional] 
**fanflap** | **object** | Configuration for FanFlap controller | [optional] 
**powermeter** | **object** | Configuration for Powermeter controller | [optional] 
**ykeda_autofan** | **object** | Configuration for Ykeda Autofan controller | [optional] 
**asic_config** | **map[string,string]** | Settings for ASICs with Hive firmware, depends on model and firmware version | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)



# FarmFields

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **string** | Display name | [optional] 
**timezone** | **string** | Time zone for all farm workers. Default is account&#39;s time zone. | [optional] 
**gpu_red_temp** | **int** | Red Temperature for GPU workers, °C | [optional] 
**asic_red_temp** | **int** | Red Temperature for ASIC workers, °C | [optional] 
**asic_red_board_temp** | **float** | Red Board Temperature for ASIC workers, °C | [optional] 
**gpu_red_mem_temp** | **float** | Red memory temperature for GPU workers, °C | [optional] 
**gpu_red_cpu_temp** | **float** | Red CPU temperature for GPU workers, °C | [optional] 
**gpu_red_fan** | **int** | Red Fan speed for GPU workers, % | [optional] 
**asic_red_fan** | **int** | Red Fan speed for ASIC workers, % | [optional] 
**gpu_red_asr** | **int** | Red Accepted Shares Ratio for GPU workers, % | [optional] 
**asic_red_asr** | **int** | Red Accepted Shares Ratio for ASIC workers, % | [optional] 
**gpu_red_la** | **float** | Red Load Average per one CPU core for GPU workers | [optional] 
**asic_red_la** | **float** | Red Load Average per one CPU core for ASIC workers | [optional] 
**repo_urls** | **string[]** | Package repository URL list. Use this to override default list. | [optional] 
**power_price** | **float** | Electricity price per kilowatt hour | [optional] 
**power_price_currency** | **string** | Currency of electricity price | [optional] 
**charge_on_pool** | **bool** | Enable charging on brand pool | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)



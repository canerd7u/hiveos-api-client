# FarmStats

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**workers_total** | **int** | Total amount of workers | [optional] 
**workers_online** | **int** | Amount of online workers | [optional] 
**workers_offline** | **int** | Amount of offline workers | [optional] 
**workers_overheated** | **int** | Amount of overheated workers (GPUs/boards exceeds red value) | [optional] 
**workers_overloaded** | **int** | Amount of overloaded workers (15m CPU load average exceeds red value) | [optional] 
**workers_invalid** | **int** | Amount of workers with invalid shares | [optional] 
**workers_low_asr** | **int** | Amount of workers with low Accepted Shares Ratio (ASR is below red value) | [optional] 
**rigs_total** | **int** | Total amount of Rigs | [optional] 
**rigs_online** | **int** | Amount of online Rigs | [optional] 
**rigs_offline** | **int** | Amount of offline Rigs | [optional] 
**rigs_power** | **int** | Total power draw of all Rigs, watts | [optional] 
**gpus_total** | **int** | Total amount of GPUs | [optional] 
**gpus_online** | **int** | Amount of online GPUs | [optional] 
**gpus_offline** | **int** | Amount of offline GPUs | [optional] 
**gpus_overheated** | **int** | Amount of overheated GPUs | [optional] 
**asics_total** | **int** | Total amount of ASICs | [optional] 
**asics_online** | **int** | Amount of online ASICs | [optional] 
**asics_power** | **int** | Total power draw of all ASICs, watts | [optional] 
**asics_offline** | **int** | Amount of offline ASICs | [optional] 
**boards_total** | **int** | Total amount of ASIC boards | [optional] 
**boards_online** | **int** | Amount of online ASIC boards | [optional] 
**boards_offline** | **int** | Amount of offline ASIC boards | [optional] 
**boards_overheated** | **int** | Amount of overheated ASIC boards | [optional] 
**cpus_online** | **int** | Amount of online CPUs | [optional] 
**devices_total** | **int** | Total amount of Devices | [optional] 
**devices_online** | **int** | Amount of online Devices | [optional] 
**devices_offline** | **int** | Amount of offline Devices | [optional] 
**power_draw** | **float** | Total power draw of all workers, watts | [optional] 
**power_cost** | **float** | Consuming electricity cost per hour (in configured currency) | [optional] 
**asr** | **float** | Accepted Shares Ratio, % Calculated as: &#x60;accepted_shares / total_shares * 100&#x60; | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)



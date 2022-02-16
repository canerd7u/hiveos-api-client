# TransactionFarm

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | Transaction ID | [optional] 
**timestamp** | **int** | Transaction timestamp | [optional] 
**type_id** | [**\Swagger\Client\Model\TransactionTypeFarm**](TransactionTypeFarm.md) |  | [optional] 
**amount** | **float** | Transaction amount in currency | [optional] 
**currency** | **string** | Transaction currency | [optional] 
**cost_details** | [**\Swagger\Client\Model\TransactionCostItem[]**](TransactionCostItem.md) | Cost details for type 2. | [optional] 
**comment** | **string** | Comment for type 4 | [optional] 
**user** | **object** | User who performed the opertation | [optional] 
**source_user** | **object** | Source user for type 7 | [optional] 
**target_farm** | **object** | Target farm for type 10 | [optional] 
**source_farm** | **object** | Source farm for type 11 | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)



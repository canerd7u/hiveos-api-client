# WalletCreateRequest

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **string** | Display name | [optional] 
**wal** | **string** |  | [optional] 
**source** | **string** | Wallet source. Can be either exchange name or any string. For supported exchanges see /hive/wallet_sources endpoint. | [optional] 
**fetch_balance** | **bool** | Try to retrieve wallet balance from blockchain or exchange | [optional] [default to false]
**api_key_id** | **int** | ID of attached API key for balance fetching (if required) | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)



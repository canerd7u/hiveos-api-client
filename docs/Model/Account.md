# Account

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**user_id** | **int** |  | [optional] 
**profile** | [**\Swagger\Client\Model\UserProfile**](UserProfile.md) |  | [optional] 
**email_confirmed** | **bool** |  | [optional] 
**balance** | **float** | Balance | [optional] 
**min_deposit_amount** | **float** | Minimum deposit amount to get 30% bonus | [optional] 
**referral_reward** | **int** | Reward in % from referrer payments | [optional] 
**referrers_count** | **int** | Amount of users who were registered as current user&#39;s referral | [optional] 
**referrer_workers_count** | **int** | Amount of workers that were created as current user&#39;s referral | [optional] 
**promocode** | **string** | Referral promocode | [optional] 
**can_set_promocode** | **bool** | Only accounts older than 14 days can set promocode | [optional] 
**_2fa_enabled** | **bool** | Indicates that Two Factor Authentication (2FA) is enabled for this account | [optional] 
**whitelist_ips** | **string[]** |  | [optional] 
**ip** | **string** | Current IP address | [optional] 
**recent_commands** | **string[]** | Recently executed custom commands (via exec). Maximum 10 unique commands are stored. | [optional] 
**farms** | [**\Swagger\Client\Model\FarmShortInfoAccount[]**](FarmShortInfoAccount.md) | Farms list | [optional] 
**meta** | **object** | Meta data keyed by namespace | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)



# Swagger\Client\FarmsApi

All URIs are relative to *https://api2.hiveos.farm/api/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**farmsDelete**](FarmsApi.md#farmsDelete) | **DELETE** /farms | Delete multiple farms
[**farmsFarmIdConfigsConfigGet**](FarmsApi.md#farmsFarmIdConfigsConfigGet) | **GET** /farms/{farmId}/configs/{config} | Get configuration file for farm
[**farmsFarmIdConfigsGet**](FarmsApi.md#farmsFarmIdConfigsGet) | **GET** /farms/{farmId}/configs | Get configuration files for farm
[**farmsFarmIdDelete**](FarmsApi.md#farmsFarmIdDelete) | **DELETE** /farms/{farmId} | Delete farm
[**farmsFarmIdDepositAddressGet**](FarmsApi.md#farmsFarmIdDepositAddressGet) | **GET** /farms/{farmId}/deposit/address | Get list of generated payment addresses
[**farmsFarmIdDepositAddressPost**](FarmsApi.md#farmsFarmIdDepositAddressPost) | **POST** /farms/{farmId}/deposit/address | Generate payment address for deposits
[**farmsFarmIdDepositPost**](FarmsApi.md#farmsFarmIdDepositPost) | **POST** /farms/{farmId}/deposit | Make deposit to the farm from account balance
[**farmsFarmIdEventsGet**](FarmsApi.md#farmsFarmIdEventsGet) | **GET** /farms/{farmId}/events | Farm events
[**farmsFarmIdGet**](FarmsApi.md#farmsFarmIdGet) | **GET** /farms/{farmId} | Farm info
[**farmsFarmIdInvoiceGet**](FarmsApi.md#farmsFarmIdInvoiceGet) | **GET** /farms/{farmId}/invoice | Generate invoice for specified period
[**farmsFarmIdMetricsGet**](FarmsApi.md#farmsFarmIdMetricsGet) | **GET** /farms/{farmId}/metrics | Farm metrics
[**farmsFarmIdNotificationsGet**](FarmsApi.md#farmsFarmIdNotificationsGet) | **GET** /farms/{farmId}/notifications | Get notifications settings
[**farmsFarmIdNotificationsPatch**](FarmsApi.md#farmsFarmIdNotificationsPatch) | **PATCH** /farms/{farmId}/notifications | Update notifications settings
[**farmsFarmIdPatch**](FarmsApi.md#farmsFarmIdPatch) | **PATCH** /farms/{farmId} | Edit farm
[**farmsFarmIdPayerDelete**](FarmsApi.md#farmsFarmIdPayerDelete) | **DELETE** /farms/{farmId}/payer | Unassign farm payer and restore default value
[**farmsFarmIdPersonalSettingsPatch**](FarmsApi.md#farmsFarmIdPersonalSettingsPatch) | **PATCH** /farms/{farmId}/personal_settings | Update personal settings for the farm
[**farmsFarmIdPowerReportGet**](FarmsApi.md#farmsFarmIdPowerReportGet) | **GET** /farms/{farmId}/power_report | Generate report about power consumption for specified period
[**farmsFarmIdSendMoneyPost**](FarmsApi.md#farmsFarmIdSendMoneyPost) | **POST** /farms/{farmId}/send_money | Send money to user
[**farmsFarmIdStatsGet**](FarmsApi.md#farmsFarmIdStatsGet) | **GET** /farms/{farmId}/stats | Farm stats
[**farmsFarmIdTransactionsGet**](FarmsApi.md#farmsFarmIdTransactionsGet) | **GET** /farms/{farmId}/transactions | Transactions history
[**farmsFarmIdTransferDelete**](FarmsApi.md#farmsFarmIdTransferDelete) | **DELETE** /farms/{farmId}/transfer | Cancel farm transfer request
[**farmsFarmIdTransferGet**](FarmsApi.md#farmsFarmIdTransferGet) | **GET** /farms/{farmId}/transfer | Get active farm transfer request
[**farmsFarmIdTransferPost**](FarmsApi.md#farmsFarmIdTransferPost) | **POST** /farms/{farmId}/transfer | Create farm transfer request
[**farmsGet**](FarmsApi.md#farmsGet) | **GET** /farms | List of accessed farms
[**farmsIncomingConfirmPost**](FarmsApi.md#farmsIncomingConfirmPost) | **POST** /farms/incoming/confirm | Confirm transfer request
[**farmsIncomingGet**](FarmsApi.md#farmsIncomingGet) | **GET** /farms/incoming | Get incoming farm transfer requests
[**farmsIncomingRejectPost**](FarmsApi.md#farmsIncomingRejectPost) | **POST** /farms/incoming/reject | Reject transfer request
[**farmsPost**](FarmsApi.md#farmsPost) | **POST** /farms | Create new farm
[**farmsTransfersGet**](FarmsApi.md#farmsTransfersGet) | **GET** /farms/transfers | Get active transfers requests of all available farms


# **farmsDelete**
> farmsDelete($body)

Delete multiple farms

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: ApiKey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\FarmsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\IDs(); // \Swagger\Client\Model\IDs | 

try {
    $apiInstance->farmsDelete($body);
} catch (Exception $e) {
    echo 'Exception when calling FarmsApi->farmsDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\IDs**](../Model/IDs.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

[ApiKey](../../README.md#ApiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **farmsFarmIdConfigsConfigGet**
> \Swagger\Client\Model\FarmConfigFiles farmsFarmIdConfigsConfigGet($farm_id, $config, $download)

Get configuration file for farm

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: ApiKey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\FarmsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$farm_id = 56; // int | 
$config = "config_example"; // string | 
$download = true; // bool | Download response as a file

try {
    $result = $apiInstance->farmsFarmIdConfigsConfigGet($farm_id, $config, $download);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FarmsApi->farmsFarmIdConfigsConfigGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **farm_id** | **int**|  |
 **config** | **string**|  |
 **download** | **bool**| Download response as a file | [optional]

### Return type

[**\Swagger\Client\Model\FarmConfigFiles**](../Model/FarmConfigFiles.md)

### Authorization

[ApiKey](../../README.md#ApiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **farmsFarmIdConfigsGet**
> \Swagger\Client\Model\FarmConfigFiles farmsFarmIdConfigsGet($farm_id)

Get configuration files for farm

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: ApiKey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\FarmsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$farm_id = 56; // int | 

try {
    $result = $apiInstance->farmsFarmIdConfigsGet($farm_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FarmsApi->farmsFarmIdConfigsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **farm_id** | **int**|  |

### Return type

[**\Swagger\Client\Model\FarmConfigFiles**](../Model/FarmConfigFiles.md)

### Authorization

[ApiKey](../../README.md#ApiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **farmsFarmIdDelete**
> farmsFarmIdDelete($farm_id)

Delete farm

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: ApiKey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\FarmsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$farm_id = 56; // int | 

try {
    $apiInstance->farmsFarmIdDelete($farm_id);
} catch (Exception $e) {
    echo 'Exception when calling FarmsApi->farmsFarmIdDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **farm_id** | **int**|  |

### Return type

void (empty response body)

### Authorization

[ApiKey](../../README.md#ApiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **farmsFarmIdDepositAddressGet**
> object farmsFarmIdDepositAddressGet($farm_id)

Get list of generated payment addresses

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: ApiKey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\FarmsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$farm_id = 56; // int | 

try {
    $result = $apiInstance->farmsFarmIdDepositAddressGet($farm_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FarmsApi->farmsFarmIdDepositAddressGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **farm_id** | **int**|  |

### Return type

**object**

### Authorization

[ApiKey](../../README.md#ApiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **farmsFarmIdDepositAddressPost**
> \Swagger\Client\Model\DepositAddress farmsFarmIdDepositAddressPost($farm_id, $body)

Generate payment address for deposits

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: ApiKey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\FarmsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$farm_id = 56; // int | 
$body = new \Swagger\Client\Model\DepositAddressCreateRequest(); // \Swagger\Client\Model\DepositAddressCreateRequest | 

try {
    $result = $apiInstance->farmsFarmIdDepositAddressPost($farm_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FarmsApi->farmsFarmIdDepositAddressPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **farm_id** | **int**|  |
 **body** | [**\Swagger\Client\Model\DepositAddressCreateRequest**](../Model/DepositAddressCreateRequest.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\DepositAddress**](../Model/DepositAddress.md)

### Authorization

[ApiKey](../../README.md#ApiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **farmsFarmIdDepositPost**
> farmsFarmIdDepositPost($farm_id, $body)

Make deposit to the farm from account balance

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: ApiKey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\FarmsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$farm_id = 56; // int | 
$body = new \Swagger\Client\Model\Deposit(); // \Swagger\Client\Model\Deposit | 

try {
    $apiInstance->farmsFarmIdDepositPost($farm_id, $body);
} catch (Exception $e) {
    echo 'Exception when calling FarmsApi->farmsFarmIdDepositPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **farm_id** | **int**|  |
 **body** | [**\Swagger\Client\Model\Deposit**](../Model/Deposit.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

[ApiKey](../../README.md#ApiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **farmsFarmIdEventsGet**
> object farmsFarmIdEventsGet($farm_id, $page, $per_page, $type_id, $exclude_type_id, $worker_id, $config_type, $search, $user, $start_date, $end_date, $group, $group_id)

Farm events

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: ApiKey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\FarmsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$farm_id = 56; // int | 
$page = 1; // int | Page number
$per_page = 56; // int | Per-page count (default is 15)
$type_id = "type_id_example"; // string | Return only records of these types, comma-separated list of IDs
$exclude_type_id = "exclude_type_id_example"; // string | Exclude records of these types, comma-separated list of IDs
$worker_id = "worker_id_example"; // string | Return only records for these workers, comma-separated list of IDs
$config_type = "config_type_example"; // string | Comma-separated list of config types
$search = "search_example"; // string | String with searched value
$user = "user_example"; // string | Filter by user. Both login and name are used for searching. This filter is searching by \"contains\", not \"equals\".
$start_date = "start_date_example"; // string | Start date
$end_date = "end_date_example"; // string | End date (inclusive)
$group = 0; // int | Output grouped events when possible
$group_id = 56; // int | Output events cotained in this group

try {
    $result = $apiInstance->farmsFarmIdEventsGet($farm_id, $page, $per_page, $type_id, $exclude_type_id, $worker_id, $config_type, $search, $user, $start_date, $end_date, $group, $group_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FarmsApi->farmsFarmIdEventsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **farm_id** | **int**|  |
 **page** | **int**| Page number | [optional] [default to 1]
 **per_page** | **int**| Per-page count (default is 15) | [optional]
 **type_id** | **string**| Return only records of these types, comma-separated list of IDs | [optional]
 **exclude_type_id** | **string**| Exclude records of these types, comma-separated list of IDs | [optional]
 **worker_id** | **string**| Return only records for these workers, comma-separated list of IDs | [optional]
 **config_type** | **string**| Comma-separated list of config types | [optional]
 **search** | **string**| String with searched value | [optional]
 **user** | **string**| Filter by user. Both login and name are used for searching. This filter is searching by \&quot;contains\&quot;, not \&quot;equals\&quot;. | [optional]
 **start_date** | **string**| Start date | [optional]
 **end_date** | **string**| End date (inclusive) | [optional]
 **group** | **int**| Output grouped events when possible | [optional] [default to 0]
 **group_id** | **int**| Output events cotained in this group | [optional]

### Return type

**object**

### Authorization

[ApiKey](../../README.md#ApiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **farmsFarmIdGet**
> \Swagger\Client\Model\Farm farmsFarmIdGet($farm_id)

Farm info

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: ApiKey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\FarmsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$farm_id = 56; // int | 

try {
    $result = $apiInstance->farmsFarmIdGet($farm_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FarmsApi->farmsFarmIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **farm_id** | **int**|  |

### Return type

[**\Swagger\Client\Model\Farm**](../Model/Farm.md)

### Authorization

[ApiKey](../../README.md#ApiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **farmsFarmIdInvoiceGet**
> \SplFileObject farmsFarmIdInvoiceGet($farm_id, $start_date, $end_date)

Generate invoice for specified period

If period is not set - invoice for last month will be generated.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: ApiKey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\FarmsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$farm_id = 56; // int | 
$start_date = "start_date_example"; // string | Start date
$end_date = "end_date_example"; // string | End date (inclusive)

try {
    $result = $apiInstance->farmsFarmIdInvoiceGet($farm_id, $start_date, $end_date);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FarmsApi->farmsFarmIdInvoiceGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **farm_id** | **int**|  |
 **start_date** | **string**| Start date | [optional]
 **end_date** | **string**| End date (inclusive) | [optional]

### Return type

[**\SplFileObject**](../Model/\SplFileObject.md)

### Authorization

[ApiKey](../../README.md#ApiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/pdf

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **farmsFarmIdMetricsGet**
> object farmsFarmIdMetricsGet($farm_id, $date, $period, $fill_gaps)

Farm metrics

Provides metrics for current farm. Data is refreshed every 5 minutes. For 1 week period - metrics are downsampled by 15 minutes. For 1 month period - metrics are downsampled by 1 hour.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: ApiKey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\FarmsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$farm_id = 56; // int | 
$date = "today"; // string | Start date
$period = "1d"; // string | Period (1 day, 1 week, 1 month)
$fill_gaps = 0; // int | Fill gaps with empty points

try {
    $result = $apiInstance->farmsFarmIdMetricsGet($farm_id, $date, $period, $fill_gaps);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FarmsApi->farmsFarmIdMetricsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **farm_id** | **int**|  |
 **date** | **string**| Start date | [optional] [default to today]
 **period** | **string**| Period (1 day, 1 week, 1 month) | [optional] [default to 1d]
 **fill_gaps** | **int**| Fill gaps with empty points | [optional] [default to 0]

### Return type

**object**

### Authorization

[ApiKey](../../README.md#ApiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **farmsFarmIdNotificationsGet**
> object farmsFarmIdNotificationsGet($farm_id)

Get notifications settings

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: ApiKey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\FarmsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$farm_id = 56; // int | 

try {
    $result = $apiInstance->farmsFarmIdNotificationsGet($farm_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FarmsApi->farmsFarmIdNotificationsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **farm_id** | **int**|  |

### Return type

**object**

### Authorization

[ApiKey](../../README.md#ApiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **farmsFarmIdNotificationsPatch**
> farmsFarmIdNotificationsPatch($farm_id, $body)

Update notifications settings

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: ApiKey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\FarmsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$farm_id = 56; // int | 
$body = new \Swagger\Client\Model\NotificationSubscriptionsFarm(); // \Swagger\Client\Model\NotificationSubscriptionsFarm | 

try {
    $apiInstance->farmsFarmIdNotificationsPatch($farm_id, $body);
} catch (Exception $e) {
    echo 'Exception when calling FarmsApi->farmsFarmIdNotificationsPatch: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **farm_id** | **int**|  |
 **body** | [**\Swagger\Client\Model\NotificationSubscriptionsFarm**](../Model/NotificationSubscriptionsFarm.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

[ApiKey](../../README.md#ApiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **farmsFarmIdPatch**
> farmsFarmIdPatch($farm_id, $body)

Edit farm

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: ApiKey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\FarmsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$farm_id = 56; // int | 
$body = new \Swagger\Client\Model\FarmUpdateRequest(); // \Swagger\Client\Model\FarmUpdateRequest | 

try {
    $apiInstance->farmsFarmIdPatch($farm_id, $body);
} catch (Exception $e) {
    echo 'Exception when calling FarmsApi->farmsFarmIdPatch: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **farm_id** | **int**|  |
 **body** | [**\Swagger\Client\Model\FarmUpdateRequest**](../Model/FarmUpdateRequest.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

[ApiKey](../../README.md#ApiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **farmsFarmIdPayerDelete**
> farmsFarmIdPayerDelete($farm_id)

Unassign farm payer and restore default value

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: ApiKey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\FarmsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$farm_id = 56; // int | 

try {
    $apiInstance->farmsFarmIdPayerDelete($farm_id);
} catch (Exception $e) {
    echo 'Exception when calling FarmsApi->farmsFarmIdPayerDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **farm_id** | **int**|  |

### Return type

void (empty response body)

### Authorization

[ApiKey](../../README.md#ApiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **farmsFarmIdPersonalSettingsPatch**
> farmsFarmIdPersonalSettingsPatch($farm_id, $body)

Update personal settings for the farm

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: ApiKey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\FarmsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$farm_id = 56; // int | 
$body = new \Swagger\Client\Model\FarmPersonalSettings(); // \Swagger\Client\Model\FarmPersonalSettings | 

try {
    $apiInstance->farmsFarmIdPersonalSettingsPatch($farm_id, $body);
} catch (Exception $e) {
    echo 'Exception when calling FarmsApi->farmsFarmIdPersonalSettingsPatch: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **farm_id** | **int**|  |
 **body** | [**\Swagger\Client\Model\FarmPersonalSettings**](../Model/FarmPersonalSettings.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

[ApiKey](../../README.md#ApiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **farmsFarmIdPowerReportGet**
> \SplFileObject farmsFarmIdPowerReportGet($farm_id, $start_date, $period, $action, $worker_ids)

Generate report about power consumption for specified period

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: ApiKey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\FarmsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$farm_id = 56; // int | 
$start_date = "start_date_example"; // string | Start date
$period = "period_example"; // string | The period for which the report will be generated.
$action = "action_example"; // string | The action with report after generation.
$worker_ids = "worker_ids_example"; // string | Comma-separated list of worker ids for generating workers-specific report

try {
    $result = $apiInstance->farmsFarmIdPowerReportGet($farm_id, $start_date, $period, $action, $worker_ids);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FarmsApi->farmsFarmIdPowerReportGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **farm_id** | **int**|  |
 **start_date** | **string**| Start date |
 **period** | **string**| The period for which the report will be generated. |
 **action** | **string**| The action with report after generation. |
 **worker_ids** | **string**| Comma-separated list of worker ids for generating workers-specific report | [optional]

### Return type

[**\SplFileObject**](../Model/\SplFileObject.md)

### Authorization

[ApiKey](../../README.md#ApiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/pdf

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **farmsFarmIdSendMoneyPost**
> farmsFarmIdSendMoneyPost($farm_id, $body)

Send money to user

This action requires Security code.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: ApiKey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');
// Configure API key authorization: SecurityCode
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Security-Code', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Security-Code', 'Bearer');

$apiInstance = new Swagger\Client\Api\FarmsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$farm_id = 56; // int | 
$body = new \Swagger\Client\Model\\Swagger\Client\Model\Body(); // \Swagger\Client\Model\Body | 

try {
    $apiInstance->farmsFarmIdSendMoneyPost($farm_id, $body);
} catch (Exception $e) {
    echo 'Exception when calling FarmsApi->farmsFarmIdSendMoneyPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **farm_id** | **int**|  |
 **body** | [**\Swagger\Client\Model\Body**](../Model/.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

[ApiKey](../../README.md#ApiKey), [SecurityCode](../../README.md#SecurityCode)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **farmsFarmIdStatsGet**
> object farmsFarmIdStatsGet($farm_id, $search_id, $worker_ids)

Farm stats

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: ApiKey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\FarmsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$farm_id = 56; // int | 
$search_id = "search_id_example"; // string | ID of cached workers selection
$worker_ids = "worker_ids_example"; // string | Calculate stats only for these workers. Comma-separated IDs list.

try {
    $result = $apiInstance->farmsFarmIdStatsGet($farm_id, $search_id, $worker_ids);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FarmsApi->farmsFarmIdStatsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **farm_id** | **int**|  |
 **search_id** | **string**| ID of cached workers selection | [optional]
 **worker_ids** | **string**| Calculate stats only for these workers. Comma-separated IDs list. | [optional]

### Return type

**object**

### Authorization

[ApiKey](../../README.md#ApiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **farmsFarmIdTransactionsGet**
> object farmsFarmIdTransactionsGet($farm_id, $page, $per_page, $type_id, $exclude_type_id)

Transactions history

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: ApiKey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\FarmsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$farm_id = 56; // int | 
$page = 1; // int | Page number
$per_page = 56; // int | Per-page count (default is 15)
$type_id = "type_id_example"; // string | Return only records of these types, comma-separated list of IDs
$exclude_type_id = "exclude_type_id_example"; // string | Exclude records of these types, comma-separated list of IDs

try {
    $result = $apiInstance->farmsFarmIdTransactionsGet($farm_id, $page, $per_page, $type_id, $exclude_type_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FarmsApi->farmsFarmIdTransactionsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **farm_id** | **int**|  |
 **page** | **int**| Page number | [optional] [default to 1]
 **per_page** | **int**| Per-page count (default is 15) | [optional]
 **type_id** | **string**| Return only records of these types, comma-separated list of IDs | [optional]
 **exclude_type_id** | **string**| Exclude records of these types, comma-separated list of IDs | [optional]

### Return type

**object**

### Authorization

[ApiKey](../../README.md#ApiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **farmsFarmIdTransferDelete**
> farmsFarmIdTransferDelete($farm_id)

Cancel farm transfer request

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: ApiKey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\FarmsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$farm_id = 56; // int | 

try {
    $apiInstance->farmsFarmIdTransferDelete($farm_id);
} catch (Exception $e) {
    echo 'Exception when calling FarmsApi->farmsFarmIdTransferDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **farm_id** | **int**|  |

### Return type

void (empty response body)

### Authorization

[ApiKey](../../README.md#ApiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **farmsFarmIdTransferGet**
> \Swagger\Client\Model\FarmTransfer farmsFarmIdTransferGet($farm_id)

Get active farm transfer request

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: ApiKey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\FarmsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$farm_id = 56; // int | 

try {
    $result = $apiInstance->farmsFarmIdTransferGet($farm_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FarmsApi->farmsFarmIdTransferGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **farm_id** | **int**|  |

### Return type

[**\Swagger\Client\Model\FarmTransfer**](../Model/FarmTransfer.md)

### Authorization

[ApiKey](../../README.md#ApiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **farmsFarmIdTransferPost**
> \Swagger\Client\Model\FarmTransfer farmsFarmIdTransferPost($farm_id, $body)

Create farm transfer request

This action sends a request to target user and the farm will be transferred when that user confirm the request.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: ApiKey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\FarmsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$farm_id = 56; // int | 
$body = new \Swagger\Client\Model\\Swagger\Client\Model\Body(); // \Swagger\Client\Model\Body | 

try {
    $result = $apiInstance->farmsFarmIdTransferPost($farm_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FarmsApi->farmsFarmIdTransferPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **farm_id** | **int**|  |
 **body** | [**\Swagger\Client\Model\Body**](../Model/.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\FarmTransfer**](../Model/FarmTransfer.md)

### Authorization

[ApiKey](../../README.md#ApiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **farmsGet**
> object farmsGet()

List of accessed farms

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: ApiKey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\FarmsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->farmsGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FarmsApi->farmsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

**object**

### Authorization

[ApiKey](../../README.md#ApiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **farmsIncomingConfirmPost**
> farmsIncomingConfirmPost($body)

Confirm transfer request

This action must be performed by user who received transfer request.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: ApiKey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\FarmsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\\Swagger\Client\Model\Body(); // \Swagger\Client\Model\Body | 

try {
    $apiInstance->farmsIncomingConfirmPost($body);
} catch (Exception $e) {
    echo 'Exception when calling FarmsApi->farmsIncomingConfirmPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\Body**](../Model/.md)|  |

### Return type

void (empty response body)

### Authorization

[ApiKey](../../README.md#ApiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **farmsIncomingGet**
> object farmsIncomingGet($farm_id)

Get incoming farm transfer requests

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: ApiKey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\FarmsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$farm_id = 56; // int | 

try {
    $result = $apiInstance->farmsIncomingGet($farm_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FarmsApi->farmsIncomingGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **farm_id** | **int**|  |

### Return type

**object**

### Authorization

[ApiKey](../../README.md#ApiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **farmsIncomingRejectPost**
> farmsIncomingRejectPost($body)

Reject transfer request

This action must be performed by user who received transfer request.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: ApiKey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\FarmsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\\Swagger\Client\Model\Body(); // \Swagger\Client\Model\Body | 

try {
    $apiInstance->farmsIncomingRejectPost($body);
} catch (Exception $e) {
    echo 'Exception when calling FarmsApi->farmsIncomingRejectPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\Body**](../Model/.md)|  |

### Return type

void (empty response body)

### Authorization

[ApiKey](../../README.md#ApiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **farmsPost**
> \Swagger\Client\Model\Farm farmsPost($body)

Create new farm

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: ApiKey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\FarmsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\FarmCreateRequest(); // \Swagger\Client\Model\FarmCreateRequest | 

try {
    $result = $apiInstance->farmsPost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FarmsApi->farmsPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\FarmCreateRequest**](../Model/FarmCreateRequest.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\Farm**](../Model/Farm.md)

### Authorization

[ApiKey](../../README.md#ApiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **farmsTransfersGet**
> object farmsTransfersGet()

Get active transfers requests of all available farms

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: ApiKey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\FarmsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->farmsTransfersGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FarmsApi->farmsTransfersGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

**object**

### Authorization

[ApiKey](../../README.md#ApiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


# Swagger\Client\SchedulesApi

All URIs are relative to *https://api2.hiveos.farm/api/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**farmsFarmIdSchedulesDelete**](SchedulesApi.md#farmsFarmIdSchedulesDelete) | **DELETE** /farms/{farmId}/schedules | Delete multiple Schedules
[**farmsFarmIdSchedulesGet**](SchedulesApi.md#farmsFarmIdSchedulesGet) | **GET** /farms/{farmId}/schedules | Schedules list
[**farmsFarmIdSchedulesPost**](SchedulesApi.md#farmsFarmIdSchedulesPost) | **POST** /farms/{farmId}/schedules | Create new Schedule
[**farmsFarmIdSchedulesScheduleIdDelete**](SchedulesApi.md#farmsFarmIdSchedulesScheduleIdDelete) | **DELETE** /farms/{farmId}/schedules/{scheduleId} | Delete Schedule
[**farmsFarmIdSchedulesScheduleIdGet**](SchedulesApi.md#farmsFarmIdSchedulesScheduleIdGet) | **GET** /farms/{farmId}/schedules/{scheduleId} | Get Schedule
[**farmsFarmIdSchedulesScheduleIdPatch**](SchedulesApi.md#farmsFarmIdSchedulesScheduleIdPatch) | **PATCH** /farms/{farmId}/schedules/{scheduleId} | Edit Schedule
[**schedulesDelete**](SchedulesApi.md#schedulesDelete) | **DELETE** /schedules | Delete multiple Schedules
[**schedulesGet**](SchedulesApi.md#schedulesGet) | **GET** /schedules | Schedules list
[**schedulesPost**](SchedulesApi.md#schedulesPost) | **POST** /schedules | Create new Schedule
[**schedulesScheduleIdDelete**](SchedulesApi.md#schedulesScheduleIdDelete) | **DELETE** /schedules/{scheduleId} | Delete Schedule
[**schedulesScheduleIdGet**](SchedulesApi.md#schedulesScheduleIdGet) | **GET** /schedules/{scheduleId} | Get Schedule
[**schedulesScheduleIdPatch**](SchedulesApi.md#schedulesScheduleIdPatch) | **PATCH** /schedules/{scheduleId} | Edit Schedule


# **farmsFarmIdSchedulesDelete**
> farmsFarmIdSchedulesDelete($farm_id, $body)

Delete multiple Schedules

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: ApiKey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\SchedulesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$farm_id = 56; // int | 
$body = new \Swagger\Client\Model\IDs(); // \Swagger\Client\Model\IDs | 

try {
    $apiInstance->farmsFarmIdSchedulesDelete($farm_id, $body);
} catch (Exception $e) {
    echo 'Exception when calling SchedulesApi->farmsFarmIdSchedulesDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **farm_id** | **int**|  |
 **body** | [**\Swagger\Client\Model\IDs**](../Model/IDs.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

[ApiKey](../../README.md#ApiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **farmsFarmIdSchedulesGet**
> object farmsFarmIdSchedulesGet($farm_id, $performed, $planned, $action, $command, $tag_ids)

Schedules list

Returns Schedules that belong to given farm

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: ApiKey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\SchedulesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$farm_id = 56; // int | 
$performed = true; // bool | Get only performed schedules
$planned = true; // bool | Get only planned schedules
$action = "action_example"; // string | Get schedules with next actions. Supported multiple comma-separated actions
$command = "command_example"; // string | Get schedules with next commands. Supported multiple comma-separated values
$tag_ids = "tag_ids_example"; // string | Return only records for these tags, comma-separated list of IDs

try {
    $result = $apiInstance->farmsFarmIdSchedulesGet($farm_id, $performed, $planned, $action, $command, $tag_ids);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SchedulesApi->farmsFarmIdSchedulesGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **farm_id** | **int**|  |
 **performed** | **bool**| Get only performed schedules | [optional]
 **planned** | **bool**| Get only planned schedules | [optional]
 **action** | **string**| Get schedules with next actions. Supported multiple comma-separated actions | [optional]
 **command** | **string**| Get schedules with next commands. Supported multiple comma-separated values | [optional]
 **tag_ids** | **string**| Return only records for these tags, comma-separated list of IDs | [optional]

### Return type

**object**

### Authorization

[ApiKey](../../README.md#ApiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **farmsFarmIdSchedulesPost**
> \Swagger\Client\Model\ScheduleF farmsFarmIdSchedulesPost($farm_id, $body)

Create new Schedule

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: ApiKey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\SchedulesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$farm_id = 56; // int | 
$body = new \Swagger\Client\Model\ScheduleCreateUpdateRequestF(); // \Swagger\Client\Model\ScheduleCreateUpdateRequestF | 

try {
    $result = $apiInstance->farmsFarmIdSchedulesPost($farm_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SchedulesApi->farmsFarmIdSchedulesPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **farm_id** | **int**|  |
 **body** | [**\Swagger\Client\Model\ScheduleCreateUpdateRequestF**](../Model/ScheduleCreateUpdateRequestF.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\ScheduleF**](../Model/ScheduleF.md)

### Authorization

[ApiKey](../../README.md#ApiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **farmsFarmIdSchedulesScheduleIdDelete**
> farmsFarmIdSchedulesScheduleIdDelete($farm_id, $schedule_id)

Delete Schedule

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: ApiKey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\SchedulesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$farm_id = 56; // int | 
$schedule_id = 56; // int | 

try {
    $apiInstance->farmsFarmIdSchedulesScheduleIdDelete($farm_id, $schedule_id);
} catch (Exception $e) {
    echo 'Exception when calling SchedulesApi->farmsFarmIdSchedulesScheduleIdDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **farm_id** | **int**|  |
 **schedule_id** | **int**|  |

### Return type

void (empty response body)

### Authorization

[ApiKey](../../README.md#ApiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **farmsFarmIdSchedulesScheduleIdGet**
> \Swagger\Client\Model\ScheduleF farmsFarmIdSchedulesScheduleIdGet($farm_id, $schedule_id)

Get Schedule

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: ApiKey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\SchedulesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$farm_id = 56; // int | 
$schedule_id = 56; // int | 

try {
    $result = $apiInstance->farmsFarmIdSchedulesScheduleIdGet($farm_id, $schedule_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SchedulesApi->farmsFarmIdSchedulesScheduleIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **farm_id** | **int**|  |
 **schedule_id** | **int**|  |

### Return type

[**\Swagger\Client\Model\ScheduleF**](../Model/ScheduleF.md)

### Authorization

[ApiKey](../../README.md#ApiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **farmsFarmIdSchedulesScheduleIdPatch**
> farmsFarmIdSchedulesScheduleIdPatch($farm_id, $schedule_id, $body)

Edit Schedule

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: ApiKey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\SchedulesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$farm_id = 56; // int | 
$schedule_id = 56; // int | 
$body = new \Swagger\Client\Model\ScheduleCreateUpdateRequestF(); // \Swagger\Client\Model\ScheduleCreateUpdateRequestF | 

try {
    $apiInstance->farmsFarmIdSchedulesScheduleIdPatch($farm_id, $schedule_id, $body);
} catch (Exception $e) {
    echo 'Exception when calling SchedulesApi->farmsFarmIdSchedulesScheduleIdPatch: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **farm_id** | **int**|  |
 **schedule_id** | **int**|  |
 **body** | [**\Swagger\Client\Model\ScheduleCreateUpdateRequestF**](../Model/ScheduleCreateUpdateRequestF.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

[ApiKey](../../README.md#ApiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **schedulesDelete**
> schedulesDelete($body)

Delete multiple Schedules

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: ApiKey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\SchedulesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\IDs(); // \Swagger\Client\Model\IDs | 

try {
    $apiInstance->schedulesDelete($body);
} catch (Exception $e) {
    echo 'Exception when calling SchedulesApi->schedulesDelete: ', $e->getMessage(), PHP_EOL;
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

# **schedulesGet**
> object schedulesGet()

Schedules list

Returns Schedules that belong to current user

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: ApiKey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\SchedulesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->schedulesGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SchedulesApi->schedulesGet: ', $e->getMessage(), PHP_EOL;
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

# **schedulesPost**
> \Swagger\Client\Model\ScheduleU schedulesPost($body)

Create new Schedule

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: ApiKey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\SchedulesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\ScheduleCreateUpdateRequestU(); // \Swagger\Client\Model\ScheduleCreateUpdateRequestU | 

try {
    $result = $apiInstance->schedulesPost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SchedulesApi->schedulesPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\ScheduleCreateUpdateRequestU**](../Model/ScheduleCreateUpdateRequestU.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\ScheduleU**](../Model/ScheduleU.md)

### Authorization

[ApiKey](../../README.md#ApiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **schedulesScheduleIdDelete**
> schedulesScheduleIdDelete($schedule_id)

Delete Schedule

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: ApiKey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\SchedulesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$schedule_id = 56; // int | 

try {
    $apiInstance->schedulesScheduleIdDelete($schedule_id);
} catch (Exception $e) {
    echo 'Exception when calling SchedulesApi->schedulesScheduleIdDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **schedule_id** | **int**|  |

### Return type

void (empty response body)

### Authorization

[ApiKey](../../README.md#ApiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **schedulesScheduleIdGet**
> \Swagger\Client\Model\ScheduleU schedulesScheduleIdGet($schedule_id)

Get Schedule

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: ApiKey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\SchedulesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$schedule_id = 56; // int | 

try {
    $result = $apiInstance->schedulesScheduleIdGet($schedule_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SchedulesApi->schedulesScheduleIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **schedule_id** | **int**|  |

### Return type

[**\Swagger\Client\Model\ScheduleU**](../Model/ScheduleU.md)

### Authorization

[ApiKey](../../README.md#ApiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **schedulesScheduleIdPatch**
> schedulesScheduleIdPatch($schedule_id, $body)

Edit Schedule

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: ApiKey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\SchedulesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$schedule_id = 56; // int | 
$body = new \Swagger\Client\Model\ScheduleCreateUpdateRequestU(); // \Swagger\Client\Model\ScheduleCreateUpdateRequestU | 

try {
    $apiInstance->schedulesScheduleIdPatch($schedule_id, $body);
} catch (Exception $e) {
    echo 'Exception when calling SchedulesApi->schedulesScheduleIdPatch: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **schedule_id** | **int**|  |
 **body** | [**\Swagger\Client\Model\ScheduleCreateUpdateRequestU**](../Model/ScheduleCreateUpdateRequestU.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

[ApiKey](../../README.md#ApiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


# Swagger\Client\WorkersApi

All URIs are relative to *https://api2.hiveos.farm/api/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**farmsFarmIdWorkersCommandAmdUploadPost**](WorkersApi.md#farmsFarmIdWorkersCommandAmdUploadPost) | **POST** /farms/{farmId}/workers/command/amd_upload | Extended version of \&quot;amd_upload\&quot; command
[**farmsFarmIdWorkersCommandNvidiaUploadPost**](WorkersApi.md#farmsFarmIdWorkersCommandNvidiaUploadPost) | **POST** /farms/{farmId}/workers/command/nvidia_upload | Extended version of \&quot;nvidia_upload\&quot; command
[**farmsFarmIdWorkersCommandPost**](WorkersApi.md#farmsFarmIdWorkersCommandPost) | **POST** /farms/{farmId}/workers/command | Execute command on multiple workers
[**farmsFarmIdWorkersDelete**](WorkersApi.md#farmsFarmIdWorkersDelete) | **DELETE** /farms/{farmId}/workers | Delete multiple workers
[**farmsFarmIdWorkersFiltersGet**](WorkersApi.md#farmsFarmIdWorkersFiltersGet) | **GET** /farms/{farmId}/workers/filters | Available values for filters that are used in worker and GPU lists
[**farmsFarmIdWorkersFixAutoTagsPost**](WorkersApi.md#farmsFarmIdWorkersFixAutoTagsPost) | **POST** /farms/{farmId}/workers/fix_auto_tags | Synchronize auto-tags of all workers of the farm
[**farmsFarmIdWorkersGet**](WorkersApi.md#farmsFarmIdWorkersGet) | **GET** /farms/{farmId}/workers | Farm workers list
[**farmsFarmIdWorkersGpusGet**](WorkersApi.md#farmsFarmIdWorkersGpusGet) | **GET** /farms/{farmId}/workers/gpus | Farm workers GPUs list
[**farmsFarmIdWorkersMessagesDelete**](WorkersApi.md#farmsFarmIdWorkersMessagesDelete) | **DELETE** /farms/{farmId}/workers/messages | Delete all messages of all or provided workers
[**farmsFarmIdWorkersMessagesGet**](WorkersApi.md#farmsFarmIdWorkersMessagesGet) | **GET** /farms/{farmId}/workers/messages | Farm workers messages list
[**farmsFarmIdWorkersMultiPatch**](WorkersApi.md#farmsFarmIdWorkersMultiPatch) | **PATCH** /farms/{farmId}/workers/multi | Edit multiple workers
[**farmsFarmIdWorkersMultiPost**](WorkersApi.md#farmsFarmIdWorkersMultiPost) | **POST** /farms/{farmId}/workers/multi | Create multiple workers
[**farmsFarmIdWorkersOverclockPost**](WorkersApi.md#farmsFarmIdWorkersOverclockPost) | **POST** /farms/{farmId}/workers/overclock | Extended overclocking
[**farmsFarmIdWorkersPatch**](WorkersApi.md#farmsFarmIdWorkersPatch) | **PATCH** /farms/{farmId}/workers | Edit multiple workers at once
[**farmsFarmIdWorkersPost**](WorkersApi.md#farmsFarmIdWorkersPost) | **POST** /farms/{farmId}/workers | Create new worker
[**farmsFarmIdWorkersPreviewGet**](WorkersApi.md#farmsFarmIdWorkersPreviewGet) | **GET** /farms/{farmId}/workers/preview | Preview all workers of the farm
[**farmsFarmIdWorkersReloadPost**](WorkersApi.md#farmsFarmIdWorkersReloadPost) | **POST** /farms/{farmId}/workers/reload | Reload multiple workers
[**farmsFarmIdWorkersTransferPost**](WorkersApi.md#farmsFarmIdWorkersTransferPost) | **POST** /farms/{farmId}/workers/transfer | Transfer multiple workers to another farm
[**farmsFarmIdWorkersWorkerIdCommandPost**](WorkersApi.md#farmsFarmIdWorkersWorkerIdCommandPost) | **POST** /farms/{farmId}/workers/{workerId}/command | Execute command
[**farmsFarmIdWorkersWorkerIdConfigsConfigGet**](WorkersApi.md#farmsFarmIdWorkersWorkerIdConfigsConfigGet) | **GET** /farms/{farmId}/workers/{workerId}/configs/{config} | Get configuration file for worker
[**farmsFarmIdWorkersWorkerIdConfigsGet**](WorkersApi.md#farmsFarmIdWorkersWorkerIdConfigsGet) | **GET** /farms/{farmId}/workers/{workerId}/configs | Get configuration files for worker
[**farmsFarmIdWorkersWorkerIdDelete**](WorkersApi.md#farmsFarmIdWorkersWorkerIdDelete) | **DELETE** /farms/{farmId}/workers/{workerId} | Delete worker
[**farmsFarmIdWorkersWorkerIdFixAutoTagsPost**](WorkersApi.md#farmsFarmIdWorkersWorkerIdFixAutoTagsPost) | **POST** /farms/{farmId}/workers/{workerId}/fix_auto_tags | Synchronize auto-tags of the worker
[**farmsFarmIdWorkersWorkerIdGet**](WorkersApi.md#farmsFarmIdWorkersWorkerIdGet) | **GET** /farms/{farmId}/workers/{workerId} | Worker info
[**farmsFarmIdWorkersWorkerIdMessagesDelete**](WorkersApi.md#farmsFarmIdWorkersWorkerIdMessagesDelete) | **DELETE** /farms/{farmId}/workers/{workerId}/messages | Delete all worker messages
[**farmsFarmIdWorkersWorkerIdMessagesGet**](WorkersApi.md#farmsFarmIdWorkersWorkerIdMessagesGet) | **GET** /farms/{farmId}/workers/{workerId}/messages | Worker messages
[**farmsFarmIdWorkersWorkerIdMessagesMessageIdDelete**](WorkersApi.md#farmsFarmIdWorkersWorkerIdMessagesMessageIdDelete) | **DELETE** /farms/{farmId}/workers/{workerId}/messages/{messageId} | Delete message
[**farmsFarmIdWorkersWorkerIdMessagesMessageIdGet**](WorkersApi.md#farmsFarmIdWorkersWorkerIdMessagesMessageIdGet) | **GET** /farms/{farmId}/workers/{workerId}/messages/{messageId} | Get worker message
[**farmsFarmIdWorkersWorkerIdMetricsGet**](WorkersApi.md#farmsFarmIdWorkersWorkerIdMetricsGet) | **GET** /farms/{farmId}/workers/{workerId}/metrics | Worker metrics
[**farmsFarmIdWorkersWorkerIdPasswordPut**](WorkersApi.md#farmsFarmIdWorkersWorkerIdPasswordPut) | **PUT** /farms/{farmId}/workers/{workerId}/password | Update worker password
[**farmsFarmIdWorkersWorkerIdPatch**](WorkersApi.md#farmsFarmIdWorkersWorkerIdPatch) | **PATCH** /farms/{farmId}/workers/{workerId} | Edit worker
[**farmsFarmIdWorkersWorkerIdPersonalSettingsPatch**](WorkersApi.md#farmsFarmIdWorkersWorkerIdPersonalSettingsPatch) | **PATCH** /farms/{farmId}/workers/{workerId}/personal_settings | Update personal settings for the worker
[**farmsFarmIdWorkersWorkerIdReloadPost**](WorkersApi.md#farmsFarmIdWorkersWorkerIdReloadPost) | **POST** /farms/{farmId}/workers/{workerId}/reload | Reload worker
[**farmsFarmIdWorkersWorkerIdTransferPost**](WorkersApi.md#farmsFarmIdWorkersWorkerIdTransferPost) | **POST** /farms/{farmId}/workers/{workerId}/transfer | Transfer worker to another farm


# **farmsFarmIdWorkersCommandAmdUploadPost**
> object farmsFarmIdWorkersCommandAmdUploadPost($farm_id, $body)

Extended version of \"amd_upload\" command

Allows to flash different AMD GPUs of different workers in one request.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: ApiKey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\WorkersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$farm_id = 56; // int | 
$body = new \Swagger\Client\Model\\Swagger\Client\Model\Body(); // \Swagger\Client\Model\Body | 

try {
    $result = $apiInstance->farmsFarmIdWorkersCommandAmdUploadPost($farm_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorkersApi->farmsFarmIdWorkersCommandAmdUploadPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **farm_id** | **int**|  |
 **body** | [**\Swagger\Client\Model\Body**](../Model/.md)|  | [optional]

### Return type

**object**

### Authorization

[ApiKey](../../README.md#ApiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **farmsFarmIdWorkersCommandNvidiaUploadPost**
> object farmsFarmIdWorkersCommandNvidiaUploadPost($farm_id, $body)

Extended version of \"nvidia_upload\" command

Allows to flash different Nvidia GPUs of different workers in one request.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: ApiKey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\WorkersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$farm_id = 56; // int | 
$body = new \Swagger\Client\Model\\Swagger\Client\Model\Body(); // \Swagger\Client\Model\Body | 

try {
    $result = $apiInstance->farmsFarmIdWorkersCommandNvidiaUploadPost($farm_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorkersApi->farmsFarmIdWorkersCommandNvidiaUploadPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **farm_id** | **int**|  |
 **body** | [**\Swagger\Client\Model\Body**](../Model/.md)|  | [optional]

### Return type

**object**

### Authorization

[ApiKey](../../README.md#ApiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **farmsFarmIdWorkersCommandPost**
> object farmsFarmIdWorkersCommandPost($farm_id, $body)

Execute command on multiple workers

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: ApiKey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\WorkersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$farm_id = 56; // int | 
$body = new \stdClass; // object | 

try {
    $result = $apiInstance->farmsFarmIdWorkersCommandPost($farm_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorkersApi->farmsFarmIdWorkersCommandPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **farm_id** | **int**|  |
 **body** | [**object**](../Model/.md)|  | [optional]

### Return type

**object**

### Authorization

[ApiKey](../../README.md#ApiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **farmsFarmIdWorkersDelete**
> farmsFarmIdWorkersDelete($farm_id, $body)

Delete multiple workers

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: ApiKey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\WorkersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$farm_id = 56; // int | 
$body = new \stdClass; // object | 

try {
    $apiInstance->farmsFarmIdWorkersDelete($farm_id, $body);
} catch (Exception $e) {
    echo 'Exception when calling WorkersApi->farmsFarmIdWorkersDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **farm_id** | **int**|  |
 **body** | [**object**](../Model/.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

[ApiKey](../../README.md#ApiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **farmsFarmIdWorkersFiltersGet**
> object farmsFarmIdWorkersFiltersGet($farm_id)

Available values for filters that are used in worker and GPU lists

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: ApiKey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\WorkersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$farm_id = 56; // int | 

try {
    $result = $apiInstance->farmsFarmIdWorkersFiltersGet($farm_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorkersApi->farmsFarmIdWorkersFiltersGet: ', $e->getMessage(), PHP_EOL;
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

# **farmsFarmIdWorkersFixAutoTagsPost**
> farmsFarmIdWorkersFixAutoTagsPost($farm_id)

Synchronize auto-tags of all workers of the farm

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: ApiKey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\WorkersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$farm_id = 56; // int | 

try {
    $apiInstance->farmsFarmIdWorkersFixAutoTagsPost($farm_id);
} catch (Exception $e) {
    echo 'Exception when calling WorkersApi->farmsFarmIdWorkersFixAutoTagsPost: ', $e->getMessage(), PHP_EOL;
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

# **farmsFarmIdWorkersGet**
> object farmsFarmIdWorkersGet($farm_id, $filter, $tags, $platform)

Farm workers list

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: ApiKey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\WorkersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$farm_id = 56; // int | 
$filter = "filter_example"; // string | Optional filter for workers
$tags = "tags_example"; // string | Filter by tags. Comma-separated list of Tag IDs.
$platform = 56; // int | Worker platform: * 1 - GPU * 2 - ASIC

try {
    $result = $apiInstance->farmsFarmIdWorkersGet($farm_id, $filter, $tags, $platform);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorkersApi->farmsFarmIdWorkersGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **farm_id** | **int**|  |
 **filter** | **string**| Optional filter for workers | [optional]
 **tags** | **string**| Filter by tags. Comma-separated list of Tag IDs. | [optional]
 **platform** | **int**| Worker platform: * 1 - GPU * 2 - ASIC | [optional]

### Return type

**object**

### Authorization

[ApiKey](../../README.md#ApiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **farmsFarmIdWorkersGpusGet**
> object farmsFarmIdWorkersGpusGet($farm_id, $worker_ids, $tags)

Farm workers GPUs list

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: ApiKey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\WorkersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$farm_id = 56; // int | 
$worker_ids = "worker_ids_example"; // string | Return only records for these workers, comma-separated list of IDs
$tags = "tags_example"; // string | Filter by tags. Comma-separated list of Tag IDs.

try {
    $result = $apiInstance->farmsFarmIdWorkersGpusGet($farm_id, $worker_ids, $tags);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorkersApi->farmsFarmIdWorkersGpusGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **farm_id** | **int**|  |
 **worker_ids** | **string**| Return only records for these workers, comma-separated list of IDs | [optional]
 **tags** | **string**| Filter by tags. Comma-separated list of Tag IDs. | [optional]

### Return type

**object**

### Authorization

[ApiKey](../../README.md#ApiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **farmsFarmIdWorkersMessagesDelete**
> farmsFarmIdWorkersMessagesDelete($farm_id, $body)

Delete all messages of all or provided workers

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: ApiKey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\WorkersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$farm_id = 56; // int | 
$body = new \Swagger\Client\Model\\Swagger\Client\Model\Body(); // \Swagger\Client\Model\Body | 

try {
    $apiInstance->farmsFarmIdWorkersMessagesDelete($farm_id, $body);
} catch (Exception $e) {
    echo 'Exception when calling WorkersApi->farmsFarmIdWorkersMessagesDelete: ', $e->getMessage(), PHP_EOL;
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

[ApiKey](../../README.md#ApiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **farmsFarmIdWorkersMessagesGet**
> object farmsFarmIdWorkersMessagesGet($farm_id, $page, $per_page, $worker_ids, $message_ids, $with_payload, $start_time)

Farm workers messages list

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: ApiKey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\WorkersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$farm_id = 56; // int | 
$page = 1; // int | Page number
$per_page = 56; // int | Per-page count (default is 15)
$worker_ids = "worker_ids_example"; // string | Return only records for these workers, comma-separated list of IDs
$message_ids = "message_ids_example"; // string | Return only these messages, comma-separated list of IDs
$with_payload = 0; // int | Include message payload to ouput
$start_time = 56; // int | Return only messages starting from given timestamp

try {
    $result = $apiInstance->farmsFarmIdWorkersMessagesGet($farm_id, $page, $per_page, $worker_ids, $message_ids, $with_payload, $start_time);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorkersApi->farmsFarmIdWorkersMessagesGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **farm_id** | **int**|  |
 **page** | **int**| Page number | [optional] [default to 1]
 **per_page** | **int**| Per-page count (default is 15) | [optional]
 **worker_ids** | **string**| Return only records for these workers, comma-separated list of IDs | [optional]
 **message_ids** | **string**| Return only these messages, comma-separated list of IDs | [optional]
 **with_payload** | **int**| Include message payload to ouput | [optional] [default to 0]
 **start_time** | **int**| Return only messages starting from given timestamp | [optional]

### Return type

**object**

### Authorization

[ApiKey](../../README.md#ApiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **farmsFarmIdWorkersMultiPatch**
> object farmsFarmIdWorkersMultiPatch($farm_id, $body)

Edit multiple workers

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: ApiKey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\WorkersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$farm_id = 56; // int | 
$body = new \Swagger\Client\Model\\Swagger\Client\Model\Body(); // \Swagger\Client\Model\Body | 

try {
    $result = $apiInstance->farmsFarmIdWorkersMultiPatch($farm_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorkersApi->farmsFarmIdWorkersMultiPatch: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **farm_id** | **int**|  |
 **body** | [**\Swagger\Client\Model\Body**](../Model/.md)|  | [optional]

### Return type

**object**

### Authorization

[ApiKey](../../README.md#ApiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **farmsFarmIdWorkersMultiPost**
> object farmsFarmIdWorkersMultiPost($farm_id, $body)

Create multiple workers

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: ApiKey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\WorkersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$farm_id = 56; // int | 
$body = new \Swagger\Client\Model\\Swagger\Client\Model\Body(); // \Swagger\Client\Model\Body | 

try {
    $result = $apiInstance->farmsFarmIdWorkersMultiPost($farm_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorkersApi->farmsFarmIdWorkersMultiPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **farm_id** | **int**|  |
 **body** | [**\Swagger\Client\Model\Body**](../Model/.md)|  | [optional]

### Return type

**object**

### Authorization

[ApiKey](../../README.md#ApiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **farmsFarmIdWorkersOverclockPost**
> object farmsFarmIdWorkersOverclockPost($farm_id, $body)

Extended overclocking

Allows to overlock individual GPUs of different workers in one request. Provided configurations will be merged into actual overclock of corresponding worker.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: ApiKey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\WorkersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$farm_id = 56; // int | 
$body = new \Swagger\Client\Model\\Swagger\Client\Model\Body(); // \Swagger\Client\Model\Body | 

try {
    $result = $apiInstance->farmsFarmIdWorkersOverclockPost($farm_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorkersApi->farmsFarmIdWorkersOverclockPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **farm_id** | **int**|  |
 **body** | [**\Swagger\Client\Model\Body**](../Model/.md)|  | [optional]

### Return type

**object**

### Authorization

[ApiKey](../../README.md#ApiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **farmsFarmIdWorkersPatch**
> object farmsFarmIdWorkersPatch($farm_id, $merge, $body)

Edit multiple workers at once

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: ApiKey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\WorkersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$farm_id = 56; // int | 
$merge = true; // bool | Merge some fields instead of replace them. These fields are: * miners_config * watchdog * autofan * octofan * coolbox * fanflap * powermeter
$body = new \stdClass; // object | 

try {
    $result = $apiInstance->farmsFarmIdWorkersPatch($farm_id, $merge, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorkersApi->farmsFarmIdWorkersPatch: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **farm_id** | **int**|  |
 **merge** | **bool**| Merge some fields instead of replace them. These fields are: * miners_config * watchdog * autofan * octofan * coolbox * fanflap * powermeter | [optional]
 **body** | [**object**](../Model/.md)|  | [optional]

### Return type

**object**

### Authorization

[ApiKey](../../README.md#ApiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **farmsFarmIdWorkersPost**
> \Swagger\Client\Model\Worker farmsFarmIdWorkersPost($farm_id, $body)

Create new worker

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: ApiKey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\WorkersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$farm_id = 56; // int | 
$body = new \Swagger\Client\Model\WorkerCreateRequest(); // \Swagger\Client\Model\WorkerCreateRequest | 

try {
    $result = $apiInstance->farmsFarmIdWorkersPost($farm_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorkersApi->farmsFarmIdWorkersPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **farm_id** | **int**|  |
 **body** | [**\Swagger\Client\Model\WorkerCreateRequest**](../Model/WorkerCreateRequest.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\Worker**](../Model/Worker.md)

### Authorization

[ApiKey](../../README.md#ApiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **farmsFarmIdWorkersPreviewGet**
> object farmsFarmIdWorkersPreviewGet($farm_id, $search_id)

Preview all workers of the farm

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: ApiKey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\WorkersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$farm_id = 56; // int | 
$search_id = "search_id_example"; // string | ID of cached workers selection

try {
    $result = $apiInstance->farmsFarmIdWorkersPreviewGet($farm_id, $search_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorkersApi->farmsFarmIdWorkersPreviewGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **farm_id** | **int**|  |
 **search_id** | **string**| ID of cached workers selection | [optional]

### Return type

**object**

### Authorization

[ApiKey](../../README.md#ApiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **farmsFarmIdWorkersReloadPost**
> object farmsFarmIdWorkersReloadPost($farm_id, $body)

Reload multiple workers

Send configuration to workers, including flight sheet and overclock

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: ApiKey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\WorkersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$farm_id = 56; // int | 
$body = new \stdClass; // object | 

try {
    $result = $apiInstance->farmsFarmIdWorkersReloadPost($farm_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorkersApi->farmsFarmIdWorkersReloadPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **farm_id** | **int**|  |
 **body** | [**object**](../Model/.md)|  | [optional]

### Return type

**object**

### Authorization

[ApiKey](../../README.md#ApiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **farmsFarmIdWorkersTransferPost**
> farmsFarmIdWorkersTransferPost($farm_id, $body)

Transfer multiple workers to another farm

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: ApiKey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\WorkersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$farm_id = 56; // int | 
$body = new \stdClass; // object | 

try {
    $apiInstance->farmsFarmIdWorkersTransferPost($farm_id, $body);
} catch (Exception $e) {
    echo 'Exception when calling WorkersApi->farmsFarmIdWorkersTransferPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **farm_id** | **int**|  |
 **body** | [**object**](../Model/.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

[ApiKey](../../README.md#ApiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **farmsFarmIdWorkersWorkerIdCommandPost**
> object farmsFarmIdWorkersWorkerIdCommandPost($farm_id, $worker_id, $body)

Execute command

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: ApiKey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\WorkersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$farm_id = 56; // int | 
$worker_id = 56; // int | 
$body = new \Swagger\Client\Model\CommandRequest(); // \Swagger\Client\Model\CommandRequest | 

try {
    $result = $apiInstance->farmsFarmIdWorkersWorkerIdCommandPost($farm_id, $worker_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorkersApi->farmsFarmIdWorkersWorkerIdCommandPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **farm_id** | **int**|  |
 **worker_id** | **int**|  |
 **body** | [**\Swagger\Client\Model\CommandRequest**](../Model/CommandRequest.md)|  | [optional]

### Return type

**object**

### Authorization

[ApiKey](../../README.md#ApiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **farmsFarmIdWorkersWorkerIdConfigsConfigGet**
> \Swagger\Client\Model\WorkerConfigFiles farmsFarmIdWorkersWorkerIdConfigsConfigGet($farm_id, $worker_id, $config, $download)

Get configuration file for worker

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: ApiKey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\WorkersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$farm_id = 56; // int | 
$worker_id = 56; // int | 
$config = "config_example"; // string | 
$download = true; // bool | Download response as a file

try {
    $result = $apiInstance->farmsFarmIdWorkersWorkerIdConfigsConfigGet($farm_id, $worker_id, $config, $download);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorkersApi->farmsFarmIdWorkersWorkerIdConfigsConfigGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **farm_id** | **int**|  |
 **worker_id** | **int**|  |
 **config** | **string**|  |
 **download** | **bool**| Download response as a file | [optional]

### Return type

[**\Swagger\Client\Model\WorkerConfigFiles**](../Model/WorkerConfigFiles.md)

### Authorization

[ApiKey](../../README.md#ApiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **farmsFarmIdWorkersWorkerIdConfigsGet**
> \Swagger\Client\Model\WorkerConfigFiles farmsFarmIdWorkersWorkerIdConfigsGet($farm_id, $worker_id)

Get configuration files for worker

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: ApiKey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\WorkersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$farm_id = 56; // int | 
$worker_id = 56; // int | 

try {
    $result = $apiInstance->farmsFarmIdWorkersWorkerIdConfigsGet($farm_id, $worker_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorkersApi->farmsFarmIdWorkersWorkerIdConfigsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **farm_id** | **int**|  |
 **worker_id** | **int**|  |

### Return type

[**\Swagger\Client\Model\WorkerConfigFiles**](../Model/WorkerConfigFiles.md)

### Authorization

[ApiKey](../../README.md#ApiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **farmsFarmIdWorkersWorkerIdDelete**
> farmsFarmIdWorkersWorkerIdDelete($farm_id, $worker_id)

Delete worker

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: ApiKey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\WorkersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$farm_id = 56; // int | 
$worker_id = 56; // int | 

try {
    $apiInstance->farmsFarmIdWorkersWorkerIdDelete($farm_id, $worker_id);
} catch (Exception $e) {
    echo 'Exception when calling WorkersApi->farmsFarmIdWorkersWorkerIdDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **farm_id** | **int**|  |
 **worker_id** | **int**|  |

### Return type

void (empty response body)

### Authorization

[ApiKey](../../README.md#ApiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **farmsFarmIdWorkersWorkerIdFixAutoTagsPost**
> farmsFarmIdWorkersWorkerIdFixAutoTagsPost($farm_id, $worker_id)

Synchronize auto-tags of the worker

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: ApiKey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\WorkersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$farm_id = 56; // int | 
$worker_id = 56; // int | 

try {
    $apiInstance->farmsFarmIdWorkersWorkerIdFixAutoTagsPost($farm_id, $worker_id);
} catch (Exception $e) {
    echo 'Exception when calling WorkersApi->farmsFarmIdWorkersWorkerIdFixAutoTagsPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **farm_id** | **int**|  |
 **worker_id** | **int**|  |

### Return type

void (empty response body)

### Authorization

[ApiKey](../../README.md#ApiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **farmsFarmIdWorkersWorkerIdGet**
> \Swagger\Client\Model\Worker farmsFarmIdWorkersWorkerIdGet($farm_id, $worker_id)

Worker info

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: ApiKey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\WorkersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$farm_id = 56; // int | 
$worker_id = 56; // int | 

try {
    $result = $apiInstance->farmsFarmIdWorkersWorkerIdGet($farm_id, $worker_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorkersApi->farmsFarmIdWorkersWorkerIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **farm_id** | **int**|  |
 **worker_id** | **int**|  |

### Return type

[**\Swagger\Client\Model\Worker**](../Model/Worker.md)

### Authorization

[ApiKey](../../README.md#ApiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **farmsFarmIdWorkersWorkerIdMessagesDelete**
> farmsFarmIdWorkersWorkerIdMessagesDelete($farm_id, $worker_id, $body)

Delete all worker messages

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: ApiKey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\WorkersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$farm_id = 56; // int | 
$worker_id = 56; // int | 
$body = new \Swagger\Client\Model\\Swagger\Client\Model\Body(); // \Swagger\Client\Model\Body | 

try {
    $apiInstance->farmsFarmIdWorkersWorkerIdMessagesDelete($farm_id, $worker_id, $body);
} catch (Exception $e) {
    echo 'Exception when calling WorkersApi->farmsFarmIdWorkersWorkerIdMessagesDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **farm_id** | **int**|  |
 **worker_id** | **int**|  |
 **body** | [**\Swagger\Client\Model\Body**](../Model/.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

[ApiKey](../../README.md#ApiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **farmsFarmIdWorkersWorkerIdMessagesGet**
> object farmsFarmIdWorkersWorkerIdMessagesGet($farm_id, $worker_id, $page, $per_page, $message_ids, $with_payload, $start_time)

Worker messages

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: ApiKey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\WorkersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$farm_id = 56; // int | 
$worker_id = 56; // int | 
$page = 1; // int | Page number
$per_page = 56; // int | Per-page count (default is 15)
$message_ids = "message_ids_example"; // string | Return only these messages, comma-separated list of IDs
$with_payload = 0; // int | Include message payload to ouput
$start_time = 56; // int | Return only messages starting from given timestamp

try {
    $result = $apiInstance->farmsFarmIdWorkersWorkerIdMessagesGet($farm_id, $worker_id, $page, $per_page, $message_ids, $with_payload, $start_time);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorkersApi->farmsFarmIdWorkersWorkerIdMessagesGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **farm_id** | **int**|  |
 **worker_id** | **int**|  |
 **page** | **int**| Page number | [optional] [default to 1]
 **per_page** | **int**| Per-page count (default is 15) | [optional]
 **message_ids** | **string**| Return only these messages, comma-separated list of IDs | [optional]
 **with_payload** | **int**| Include message payload to ouput | [optional] [default to 0]
 **start_time** | **int**| Return only messages starting from given timestamp | [optional]

### Return type

**object**

### Authorization

[ApiKey](../../README.md#ApiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **farmsFarmIdWorkersWorkerIdMessagesMessageIdDelete**
> farmsFarmIdWorkersWorkerIdMessagesMessageIdDelete($farm_id, $worker_id, $message_id)

Delete message

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: ApiKey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\WorkersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$farm_id = 56; // int | 
$worker_id = 56; // int | 
$message_id = 56; // int | 

try {
    $apiInstance->farmsFarmIdWorkersWorkerIdMessagesMessageIdDelete($farm_id, $worker_id, $message_id);
} catch (Exception $e) {
    echo 'Exception when calling WorkersApi->farmsFarmIdWorkersWorkerIdMessagesMessageIdDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **farm_id** | **int**|  |
 **worker_id** | **int**|  |
 **message_id** | **int**|  |

### Return type

void (empty response body)

### Authorization

[ApiKey](../../README.md#ApiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **farmsFarmIdWorkersWorkerIdMessagesMessageIdGet**
> \Swagger\Client\Model\WorkerMessageFull farmsFarmIdWorkersWorkerIdMessagesMessageIdGet($farm_id, $worker_id, $message_id)

Get worker message

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: ApiKey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\WorkersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$farm_id = 56; // int | 
$worker_id = 56; // int | 
$message_id = 56; // int | 

try {
    $result = $apiInstance->farmsFarmIdWorkersWorkerIdMessagesMessageIdGet($farm_id, $worker_id, $message_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorkersApi->farmsFarmIdWorkersWorkerIdMessagesMessageIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **farm_id** | **int**|  |
 **worker_id** | **int**|  |
 **message_id** | **int**|  |

### Return type

[**\Swagger\Client\Model\WorkerMessageFull**](../Model/WorkerMessageFull.md)

### Authorization

[ApiKey](../../README.md#ApiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **farmsFarmIdWorkersWorkerIdMetricsGet**
> object farmsFarmIdWorkersWorkerIdMetricsGet($farm_id, $worker_id, $date, $period, $fill_gaps)

Worker metrics

Provides metrics for current worker. Data is refreshed every 5 minutes. For 1 week period - metrics are downsampled by 15 minutes. For 1 month period - metrics are downsampled by 1 hour.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: ApiKey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\WorkersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$farm_id = 56; // int | 
$worker_id = 56; // int | 
$date = "today"; // string | Start date
$period = "1d"; // string | Period (1 day, 1 week, 1 month)
$fill_gaps = 0; // int | Fill gaps with empty points

try {
    $result = $apiInstance->farmsFarmIdWorkersWorkerIdMetricsGet($farm_id, $worker_id, $date, $period, $fill_gaps);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorkersApi->farmsFarmIdWorkersWorkerIdMetricsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **farm_id** | **int**|  |
 **worker_id** | **int**|  |
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

# **farmsFarmIdWorkersWorkerIdPasswordPut**
> farmsFarmIdWorkersWorkerIdPasswordPut($farm_id, $worker_id, $body)

Update worker password

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: ApiKey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\WorkersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$farm_id = 56; // int | 
$worker_id = 56; // int | 
$body = new \Swagger\Client\Model\WorkerEditPassword(); // \Swagger\Client\Model\WorkerEditPassword | 

try {
    $apiInstance->farmsFarmIdWorkersWorkerIdPasswordPut($farm_id, $worker_id, $body);
} catch (Exception $e) {
    echo 'Exception when calling WorkersApi->farmsFarmIdWorkersWorkerIdPasswordPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **farm_id** | **int**|  |
 **worker_id** | **int**|  |
 **body** | [**\Swagger\Client\Model\WorkerEditPassword**](../Model/WorkerEditPassword.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

[ApiKey](../../README.md#ApiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **farmsFarmIdWorkersWorkerIdPatch**
> \Swagger\Client\Model\WorkerUpdatedResponse farmsFarmIdWorkersWorkerIdPatch($farm_id, $worker_id, $body)

Edit worker

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: ApiKey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\WorkersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$farm_id = 56; // int | 
$worker_id = 56; // int | 
$body = new \Swagger\Client\Model\WorkerEditRequest(); // \Swagger\Client\Model\WorkerEditRequest | 

try {
    $result = $apiInstance->farmsFarmIdWorkersWorkerIdPatch($farm_id, $worker_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorkersApi->farmsFarmIdWorkersWorkerIdPatch: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **farm_id** | **int**|  |
 **worker_id** | **int**|  |
 **body** | [**\Swagger\Client\Model\WorkerEditRequest**](../Model/WorkerEditRequest.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\WorkerUpdatedResponse**](../Model/WorkerUpdatedResponse.md)

### Authorization

[ApiKey](../../README.md#ApiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **farmsFarmIdWorkersWorkerIdPersonalSettingsPatch**
> farmsFarmIdWorkersWorkerIdPersonalSettingsPatch($farm_id, $worker_id, $body)

Update personal settings for the worker

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: ApiKey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\WorkersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$farm_id = 56; // int | 
$worker_id = 56; // int | 
$body = new \Swagger\Client\Model\FarmPersonalSettings(); // \Swagger\Client\Model\FarmPersonalSettings | 

try {
    $apiInstance->farmsFarmIdWorkersWorkerIdPersonalSettingsPatch($farm_id, $worker_id, $body);
} catch (Exception $e) {
    echo 'Exception when calling WorkersApi->farmsFarmIdWorkersWorkerIdPersonalSettingsPatch: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **farm_id** | **int**|  |
 **worker_id** | **int**|  |
 **body** | [**\Swagger\Client\Model\FarmPersonalSettings**](../Model/FarmPersonalSettings.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

[ApiKey](../../README.md#ApiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **farmsFarmIdWorkersWorkerIdReloadPost**
> object farmsFarmIdWorkersWorkerIdReloadPost($farm_id, $worker_id)

Reload worker

Send configuration to worker, including flight sheet and overclock

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: ApiKey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\WorkersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$farm_id = 56; // int | 
$worker_id = 56; // int | 

try {
    $result = $apiInstance->farmsFarmIdWorkersWorkerIdReloadPost($farm_id, $worker_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorkersApi->farmsFarmIdWorkersWorkerIdReloadPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **farm_id** | **int**|  |
 **worker_id** | **int**|  |

### Return type

**object**

### Authorization

[ApiKey](../../README.md#ApiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **farmsFarmIdWorkersWorkerIdTransferPost**
> farmsFarmIdWorkersWorkerIdTransferPost($farm_id, $worker_id, $body)

Transfer worker to another farm

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: ApiKey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\WorkersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$farm_id = 56; // int | 
$worker_id = 56; // int | 
$body = new \Swagger\Client\Model\WorkerTransferRequest(); // \Swagger\Client\Model\WorkerTransferRequest | 

try {
    $apiInstance->farmsFarmIdWorkersWorkerIdTransferPost($farm_id, $worker_id, $body);
} catch (Exception $e) {
    echo 'Exception when calling WorkersApi->farmsFarmIdWorkersWorkerIdTransferPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **farm_id** | **int**|  |
 **worker_id** | **int**|  |
 **body** | [**\Swagger\Client\Model\WorkerTransferRequest**](../Model/WorkerTransferRequest.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

[ApiKey](../../README.md#ApiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


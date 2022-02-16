# Swagger\Client\BenchmarksApi

All URIs are relative to *https://api2.hiveos.farm/api/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**farmsFarmIdBenchmarksBenchmarkIdDelete**](BenchmarksApi.md#farmsFarmIdBenchmarksBenchmarkIdDelete) | **DELETE** /farms/{farmId}/benchmarks/{benchmarkId} | Delete benchmark
[**farmsFarmIdBenchmarksBenchmarkIdGet**](BenchmarksApi.md#farmsFarmIdBenchmarksBenchmarkIdGet) | **GET** /farms/{farmId}/benchmarks/{benchmarkId} | Benchmark info
[**farmsFarmIdBenchmarksDelete**](BenchmarksApi.md#farmsFarmIdBenchmarksDelete) | **DELETE** /farms/{farmId}/benchmarks | Delete multiple benchmarks
[**farmsFarmIdBenchmarksGet**](BenchmarksApi.md#farmsFarmIdBenchmarksGet) | **GET** /farms/{farmId}/benchmarks | Get executed benchmarks
[**farmsFarmIdBenchmarksJobsGet**](BenchmarksApi.md#farmsFarmIdBenchmarksJobsGet) | **GET** /farms/{farmId}/benchmarks/jobs | Get available bechmark jobs (algos) that can be run.
[**farmsFarmIdBenchmarksPost**](BenchmarksApi.md#farmsFarmIdBenchmarksPost) | **POST** /farms/{farmId}/benchmarks | Start new benchmark


# **farmsFarmIdBenchmarksBenchmarkIdDelete**
> farmsFarmIdBenchmarksBenchmarkIdDelete($farm_id, $benchmark_id)

Delete benchmark

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: ApiKey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\BenchmarksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$farm_id = 56; // int | 
$benchmark_id = 56; // int | 

try {
    $apiInstance->farmsFarmIdBenchmarksBenchmarkIdDelete($farm_id, $benchmark_id);
} catch (Exception $e) {
    echo 'Exception when calling BenchmarksApi->farmsFarmIdBenchmarksBenchmarkIdDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **farm_id** | **int**|  |
 **benchmark_id** | **int**|  |

### Return type

void (empty response body)

### Authorization

[ApiKey](../../README.md#ApiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **farmsFarmIdBenchmarksBenchmarkIdGet**
> \Swagger\Client\Model\BenchmarkWithResults farmsFarmIdBenchmarksBenchmarkIdGet($farm_id, $benchmark_id)

Benchmark info

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: ApiKey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\BenchmarksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$farm_id = 56; // int | 
$benchmark_id = 56; // int | 

try {
    $result = $apiInstance->farmsFarmIdBenchmarksBenchmarkIdGet($farm_id, $benchmark_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BenchmarksApi->farmsFarmIdBenchmarksBenchmarkIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **farm_id** | **int**|  |
 **benchmark_id** | **int**|  |

### Return type

[**\Swagger\Client\Model\BenchmarkWithResults**](../Model/BenchmarkWithResults.md)

### Authorization

[ApiKey](../../README.md#ApiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **farmsFarmIdBenchmarksDelete**
> farmsFarmIdBenchmarksDelete($farm_id, $body)

Delete multiple benchmarks

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: ApiKey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\BenchmarksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$farm_id = 56; // int | 
$body = new \Swagger\Client\Model\IDs(); // \Swagger\Client\Model\IDs | 

try {
    $apiInstance->farmsFarmIdBenchmarksDelete($farm_id, $body);
} catch (Exception $e) {
    echo 'Exception when calling BenchmarksApi->farmsFarmIdBenchmarksDelete: ', $e->getMessage(), PHP_EOL;
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

# **farmsFarmIdBenchmarksGet**
> object farmsFarmIdBenchmarksGet($farm_id, $worker_id)

Get executed benchmarks

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: ApiKey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\BenchmarksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$farm_id = 56; // int | 
$worker_id = "worker_id_example"; // string | Return only records for these workers, comma-separated list of IDs

try {
    $result = $apiInstance->farmsFarmIdBenchmarksGet($farm_id, $worker_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BenchmarksApi->farmsFarmIdBenchmarksGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **farm_id** | **int**|  |
 **worker_id** | **string**| Return only records for these workers, comma-separated list of IDs | [optional]

### Return type

**object**

### Authorization

[ApiKey](../../README.md#ApiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **farmsFarmIdBenchmarksJobsGet**
> object farmsFarmIdBenchmarksJobsGet($farm_id, $worker_id, $tags)

Get available bechmark jobs (algos) that can be run.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: ApiKey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\BenchmarksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$farm_id = 56; // int | 
$worker_id = 56; // int | Worker ID for individual run
$tags = "tags_example"; // string | Tags for batch run. Comma-separated list of Tag IDs.

try {
    $result = $apiInstance->farmsFarmIdBenchmarksJobsGet($farm_id, $worker_id, $tags);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BenchmarksApi->farmsFarmIdBenchmarksJobsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **farm_id** | **int**|  |
 **worker_id** | **int**| Worker ID for individual run | [optional]
 **tags** | **string**| Tags for batch run. Comma-separated list of Tag IDs. | [optional]

### Return type

**object**

### Authorization

[ApiKey](../../README.md#ApiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **farmsFarmIdBenchmarksPost**
> \Swagger\Client\Model\Benchmark farmsFarmIdBenchmarksPost($farm_id, $body)

Start new benchmark

Benchmark can be started on single or multiple workers (only rigs). If `worker_id` is provided - benchmark is started only on this rig, otherwise benchmark is started on all farm's rigs, optionally filtered by `tag_ids`.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: ApiKey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\BenchmarksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$farm_id = 56; // int | 
$body = new \Swagger\Client\Model\BenchmarkRequest(); // \Swagger\Client\Model\BenchmarkRequest | 

try {
    $result = $apiInstance->farmsFarmIdBenchmarksPost($farm_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BenchmarksApi->farmsFarmIdBenchmarksPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **farm_id** | **int**|  |
 **body** | [**\Swagger\Client\Model\BenchmarkRequest**](../Model/BenchmarkRequest.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\Benchmark**](../Model/Benchmark.md)

### Authorization

[ApiKey](../../README.md#ApiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


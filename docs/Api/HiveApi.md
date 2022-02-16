# Swagger\Client\HiveApi

All URIs are relative to *https://api2.hiveos.farm/api/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**hiveAlgosGet**](HiveApi.md#hiveAlgosGet) | **GET** /hive/algos | List of available algorithms
[**hiveAsicFirmwaresGet**](HiveApi.md#hiveAsicFirmwaresGet) | **GET** /hive/asic_firmwares | Get ASIC firmwares list
[**hiveCoinsGet**](HiveApi.md#hiveCoinsGet) | **GET** /hive/coins | List of available coins
[**hiveCurrenciesGet**](HiveApi.md#hiveCurrenciesGet) | **GET** /hive/currencies | Get list of currencies that are used in deposits and referral payments.
[**hiveDepositAddressProvidersGet**](HiveApi.md#hiveDepositAddressProvidersGet) | **GET** /hive/deposit_address_providers | Get list of deposit address providers with options.
[**hiveMinersGet**](HiveApi.md#hiveMinersGet) | **GET** /hive/miners | List of available miners
[**hiveMirrorUrlsGet**](HiveApi.md#hiveMirrorUrlsGet) | **GET** /hive/mirror_urls | List of mirror URLs
[**hiveNotificationChannelsGet**](HiveApi.md#hiveNotificationChannelsGet) | **GET** /hive/notification_channels | Get list of supported notification channels
[**hiveOverclocksGet**](HiveApi.md#hiveOverclocksGet) | **GET** /hive/overclocks | Get popular overclock settings for different GPUs and algos. Result is sorted by rating.
[**hivePricingGet**](HiveApi.md#hivePricingGet) | **GET** /hive/pricing | Get pricing information
[**hiveStatsGet**](HiveApi.md#hiveStatsGet) | **GET** /hive/stats | Get Hive statistics
[**hiveVersionsGet**](HiveApi.md#hiveVersionsGet) | **GET** /hive/versions | Hive or Asic Hub changelog
[**hiveVersionsSystemTypeVersionGet**](HiveApi.md#hiveVersionsSystemTypeVersionGet) | **GET** /hive/versions/{systemType}/{version} | Hive version info
[**hiveWalletSourcesGet**](HiveApi.md#hiveWalletSourcesGet) | **GET** /hive/wallet_sources | List of supported wallet sources


# **hiveAlgosGet**
> object hiveAlgosGet()

List of available algorithms

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\HiveApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->hiveAlgosGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HiveApi->hiveAlgosGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **hiveAsicFirmwaresGet**
> object hiveAsicFirmwaresGet()

Get ASIC firmwares list

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\HiveApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->hiveAsicFirmwaresGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HiveApi->hiveAsicFirmwaresGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **hiveCoinsGet**
> object hiveCoinsGet()

List of available coins

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\HiveApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->hiveCoinsGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HiveApi->hiveCoinsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **hiveCurrenciesGet**
> object hiveCurrenciesGet()

Get list of currencies that are used in deposits and referral payments.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\HiveApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->hiveCurrenciesGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HiveApi->hiveCurrenciesGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **hiveDepositAddressProvidersGet**
> object hiveDepositAddressProvidersGet()

Get list of deposit address providers with options.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\HiveApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->hiveDepositAddressProvidersGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HiveApi->hiveDepositAddressProvidersGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **hiveMinersGet**
> object hiveMinersGet()

List of available miners

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\HiveApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->hiveMinersGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HiveApi->hiveMinersGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **hiveMirrorUrlsGet**
> object hiveMirrorUrlsGet()

List of mirror URLs

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\HiveApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->hiveMirrorUrlsGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HiveApi->hiveMirrorUrlsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **hiveNotificationChannelsGet**
> object hiveNotificationChannelsGet()

Get list of supported notification channels

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\HiveApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->hiveNotificationChannelsGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HiveApi->hiveNotificationChannelsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **hiveOverclocksGet**
> object hiveOverclocksGet($gpu_brand, $gpu_model, $gpu_mem, $algo, $page, $per_page)

Get popular overclock settings for different GPUs and algos. Result is sorted by rating.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\HiveApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$gpu_brand = "gpu_brand_example"; // string | Filter by GPU brand
$gpu_model = "gpu_model_example"; // string | Filter by GPU model
$gpu_mem = "gpu_mem_example"; // string | Filter by GPU memory
$algo = "algo_example"; // string | Filter by algo
$page = 1; // int | Page number
$per_page = 56; // int | Per-page count (default is 15)

try {
    $result = $apiInstance->hiveOverclocksGet($gpu_brand, $gpu_model, $gpu_mem, $algo, $page, $per_page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HiveApi->hiveOverclocksGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **gpu_brand** | **string**| Filter by GPU brand | [optional]
 **gpu_model** | **string**| Filter by GPU model | [optional]
 **gpu_mem** | **string**| Filter by GPU memory | [optional]
 **algo** | **string**| Filter by algo | [optional]
 **page** | **int**| Page number | [optional] [default to 1]
 **per_page** | **int**| Per-page count (default is 15) | [optional]

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **hivePricingGet**
> object hivePricingGet()

Get pricing information

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\HiveApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->hivePricingGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HiveApi->hivePricingGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **hiveStatsGet**
> object hiveStatsGet()

Get Hive statistics

Returns different proportional data. These statistics are updated once a day based on online workers for the moment. Items with amount < 0.01% is not included in the result, so they should be considered as \"other\".

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\HiveApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->hiveStatsGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HiveApi->hiveStatsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **hiveVersionsGet**
> object hiveVersionsGet($type, $system_type, $page, $per_page)

Hive or Asic Hub changelog

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\HiveApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$type = "type_example"; // string | Release versions type. os for Hive releases and asic_hub for Asic Hub releases
$system_type = "system_type_example"; // string | System type for OS changelog
$page = 1; // int | Page number
$per_page = 56; // int | Per-page count (default is 15)

try {
    $result = $apiInstance->hiveVersionsGet($type, $system_type, $page, $per_page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HiveApi->hiveVersionsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **type** | **string**| Release versions type. os for Hive releases and asic_hub for Asic Hub releases | [optional]
 **system_type** | **string**| System type for OS changelog | [optional]
 **page** | **int**| Page number | [optional] [default to 1]
 **per_page** | **int**| Per-page count (default is 15) | [optional]

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **hiveVersionsSystemTypeVersionGet**
> \Swagger\Client\Model\HiveVersion hiveVersionsSystemTypeVersionGet($system_type, $version)

Hive version info

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\HiveApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$system_type = "system_type_example"; // string | System type
$version = "version_example"; // string | Version number

try {
    $result = $apiInstance->hiveVersionsSystemTypeVersionGet($system_type, $version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HiveApi->hiveVersionsSystemTypeVersionGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **system_type** | **string**| System type |
 **version** | **string**| Version number |

### Return type

[**\Swagger\Client\Model\HiveVersion**](../Model/HiveVersion.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **hiveWalletSourcesGet**
> object hiveWalletSourcesGet()

List of supported wallet sources

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\HiveApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->hiveWalletSourcesGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HiveApi->hiveWalletSourcesGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


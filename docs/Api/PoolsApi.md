# Swagger\Client\PoolsApi

All URIs are relative to *https://api2.hiveos.farm/api/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**poolsByCoinCoinGet**](PoolsApi.md#poolsByCoinCoinGet) | **GET** /pools/by_coin/{coin} | Pool templates which suit coin name
[**poolsByNamePoolGet**](PoolsApi.md#poolsByNamePoolGet) | **GET** /pools/by_name/{pool} | Pool templates
[**poolsGet**](PoolsApi.md#poolsGet) | **GET** /pools | Available pools list and coins that we have in pools


# **poolsByCoinCoinGet**
> object poolsByCoinCoinGet($coin)

Pool templates which suit coin name

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\PoolsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$coin = "coin_example"; // string | Coin name like \"ETH\"

try {
    $result = $apiInstance->poolsByCoinCoinGet($coin);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PoolsApi->poolsByCoinCoinGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **coin** | **string**| Coin name like \&quot;ETH\&quot; |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **poolsByNamePoolGet**
> object poolsByNamePoolGet($pool)

Pool templates

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\PoolsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$pool = "pool_example"; // string | Pool name like \"nanopool\"

try {
    $result = $apiInstance->poolsByNamePoolGet($pool);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PoolsApi->poolsByNamePoolGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **pool** | **string**| Pool name like \&quot;nanopool\&quot; |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **poolsGet**
> object poolsGet()

Available pools list and coins that we have in pools

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\PoolsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->poolsGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PoolsApi->poolsGet: ', $e->getMessage(), PHP_EOL;
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


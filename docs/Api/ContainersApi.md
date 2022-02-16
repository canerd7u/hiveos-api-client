# Swagger\Client\ContainersApi

All URIs are relative to *https://api2.hiveos.farm/api/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**farmsFarmIdContainersContainerIdDelete**](ContainersApi.md#farmsFarmIdContainersContainerIdDelete) | **DELETE** /farms/{farmId}/containers/{containerId} | Delete container
[**farmsFarmIdContainersContainerIdGet**](ContainersApi.md#farmsFarmIdContainersContainerIdGet) | **GET** /farms/{farmId}/containers/{containerId} | Container info
[**farmsFarmIdContainersContainerIdPatch**](ContainersApi.md#farmsFarmIdContainersContainerIdPatch) | **PATCH** /farms/{farmId}/containers/{containerId} | Edit container
[**farmsFarmIdContainersDelete**](ContainersApi.md#farmsFarmIdContainersDelete) | **DELETE** /farms/{farmId}/containers | Delete multiple containers
[**farmsFarmIdContainersGet**](ContainersApi.md#farmsFarmIdContainersGet) | **GET** /farms/{farmId}/containers | Farm containers list
[**farmsFarmIdContainersPost**](ContainersApi.md#farmsFarmIdContainersPost) | **POST** /farms/{farmId}/containers | Create new container


# **farmsFarmIdContainersContainerIdDelete**
> farmsFarmIdContainersContainerIdDelete($farm_id, $container_id)

Delete container

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: ApiKey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\ContainersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$farm_id = 56; // int | 
$container_id = 56; // int | 

try {
    $apiInstance->farmsFarmIdContainersContainerIdDelete($farm_id, $container_id);
} catch (Exception $e) {
    echo 'Exception when calling ContainersApi->farmsFarmIdContainersContainerIdDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **farm_id** | **int**|  |
 **container_id** | **int**|  |

### Return type

void (empty response body)

### Authorization

[ApiKey](../../README.md#ApiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **farmsFarmIdContainersContainerIdGet**
> \Swagger\Client\Model\Container farmsFarmIdContainersContainerIdGet($farm_id, $container_id)

Container info

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: ApiKey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\ContainersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$farm_id = 56; // int | 
$container_id = 56; // int | 

try {
    $result = $apiInstance->farmsFarmIdContainersContainerIdGet($farm_id, $container_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContainersApi->farmsFarmIdContainersContainerIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **farm_id** | **int**|  |
 **container_id** | **int**|  |

### Return type

[**\Swagger\Client\Model\Container**](../Model/Container.md)

### Authorization

[ApiKey](../../README.md#ApiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **farmsFarmIdContainersContainerIdPatch**
> farmsFarmIdContainersContainerIdPatch($farm_id, $container_id, $body)

Edit container

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: ApiKey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\ContainersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$farm_id = 56; // int | 
$container_id = 56; // int | 
$body = new \Swagger\Client\Model\ContainerUpdateRequest(); // \Swagger\Client\Model\ContainerUpdateRequest | 

try {
    $apiInstance->farmsFarmIdContainersContainerIdPatch($farm_id, $container_id, $body);
} catch (Exception $e) {
    echo 'Exception when calling ContainersApi->farmsFarmIdContainersContainerIdPatch: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **farm_id** | **int**|  |
 **container_id** | **int**|  |
 **body** | [**\Swagger\Client\Model\ContainerUpdateRequest**](../Model/ContainerUpdateRequest.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

[ApiKey](../../README.md#ApiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **farmsFarmIdContainersDelete**
> farmsFarmIdContainersDelete($farm_id, $body)

Delete multiple containers

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: ApiKey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\ContainersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$farm_id = 56; // int | 
$body = new \Swagger\Client\Model\IDs(); // \Swagger\Client\Model\IDs | 

try {
    $apiInstance->farmsFarmIdContainersDelete($farm_id, $body);
} catch (Exception $e) {
    echo 'Exception when calling ContainersApi->farmsFarmIdContainersDelete: ', $e->getMessage(), PHP_EOL;
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

# **farmsFarmIdContainersGet**
> object farmsFarmIdContainersGet($farm_id)

Farm containers list

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: ApiKey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\ContainersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$farm_id = 56; // int | 

try {
    $result = $apiInstance->farmsFarmIdContainersGet($farm_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContainersApi->farmsFarmIdContainersGet: ', $e->getMessage(), PHP_EOL;
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

# **farmsFarmIdContainersPost**
> \Swagger\Client\Model\Container farmsFarmIdContainersPost($farm_id, $body)

Create new container

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: ApiKey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\ContainersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$farm_id = 56; // int | 
$body = new \Swagger\Client\Model\ContainerCreateRequest(); // \Swagger\Client\Model\ContainerCreateRequest | 

try {
    $result = $apiInstance->farmsFarmIdContainersPost($farm_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContainersApi->farmsFarmIdContainersPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **farm_id** | **int**|  |
 **body** | [**\Swagger\Client\Model\ContainerCreateRequest**](../Model/ContainerCreateRequest.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\Container**](../Model/Container.md)

### Authorization

[ApiKey](../../README.md#ApiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


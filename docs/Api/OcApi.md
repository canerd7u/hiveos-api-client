# Swagger\Client\OcApi

All URIs are relative to *https://api2.hiveos.farm/api/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**farmsFarmIdOcDelete**](OcApi.md#farmsFarmIdOcDelete) | **DELETE** /farms/{farmId}/oc | Delete multiple OC profiles
[**farmsFarmIdOcGet**](OcApi.md#farmsFarmIdOcGet) | **GET** /farms/{farmId}/oc | Farm OC list
[**farmsFarmIdOcOcIdDelete**](OcApi.md#farmsFarmIdOcOcIdDelete) | **DELETE** /farms/{farmId}/oc/{ocId} | Delete OC
[**farmsFarmIdOcOcIdGet**](OcApi.md#farmsFarmIdOcOcIdGet) | **GET** /farms/{farmId}/oc/{ocId} | OC info
[**farmsFarmIdOcOcIdPatch**](OcApi.md#farmsFarmIdOcOcIdPatch) | **PATCH** /farms/{farmId}/oc/{ocId} | Edit OC
[**farmsFarmIdOcPost**](OcApi.md#farmsFarmIdOcPost) | **POST** /farms/{farmId}/oc | Create new OC
[**ocDelete**](OcApi.md#ocDelete) | **DELETE** /oc | Delete multiple OC profiles
[**ocGet**](OcApi.md#ocGet) | **GET** /oc | OC list
[**ocOcIdDelete**](OcApi.md#ocOcIdDelete) | **DELETE** /oc/{ocId} | Delete OC
[**ocOcIdGet**](OcApi.md#ocOcIdGet) | **GET** /oc/{ocId} | OC info
[**ocOcIdPatch**](OcApi.md#ocOcIdPatch) | **PATCH** /oc/{ocId} | Edit OC
[**ocPost**](OcApi.md#ocPost) | **POST** /oc | Create new OC


# **farmsFarmIdOcDelete**
> farmsFarmIdOcDelete($farm_id, $body)

Delete multiple OC profiles

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: ApiKey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\OcApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$farm_id = 56; // int | 
$body = new \Swagger\Client\Model\IDs(); // \Swagger\Client\Model\IDs | 

try {
    $apiInstance->farmsFarmIdOcDelete($farm_id, $body);
} catch (Exception $e) {
    echo 'Exception when calling OcApi->farmsFarmIdOcDelete: ', $e->getMessage(), PHP_EOL;
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

# **farmsFarmIdOcGet**
> object farmsFarmIdOcGet($farm_id)

Farm OC list

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: ApiKey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\OcApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$farm_id = 56; // int | 

try {
    $result = $apiInstance->farmsFarmIdOcGet($farm_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OcApi->farmsFarmIdOcGet: ', $e->getMessage(), PHP_EOL;
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

# **farmsFarmIdOcOcIdDelete**
> farmsFarmIdOcOcIdDelete($farm_id, $oc_id)

Delete OC

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: ApiKey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\OcApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$farm_id = 56; // int | 
$oc_id = 56; // int | 

try {
    $apiInstance->farmsFarmIdOcOcIdDelete($farm_id, $oc_id);
} catch (Exception $e) {
    echo 'Exception when calling OcApi->farmsFarmIdOcOcIdDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **farm_id** | **int**|  |
 **oc_id** | **int**|  |

### Return type

void (empty response body)

### Authorization

[ApiKey](../../README.md#ApiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **farmsFarmIdOcOcIdGet**
> \Swagger\Client\Model\OCF farmsFarmIdOcOcIdGet($farm_id, $oc_id)

OC info

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: ApiKey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\OcApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$farm_id = 56; // int | 
$oc_id = 56; // int | 

try {
    $result = $apiInstance->farmsFarmIdOcOcIdGet($farm_id, $oc_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OcApi->farmsFarmIdOcOcIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **farm_id** | **int**|  |
 **oc_id** | **int**|  |

### Return type

[**\Swagger\Client\Model\OCF**](../Model/OCF.md)

### Authorization

[ApiKey](../../README.md#ApiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **farmsFarmIdOcOcIdPatch**
> farmsFarmIdOcOcIdPatch($farm_id, $oc_id, $body)

Edit OC

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: ApiKey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\OcApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$farm_id = 56; // int | 
$oc_id = 56; // int | 
$body = new \Swagger\Client\Model\OCUpdateRequest(); // \Swagger\Client\Model\OCUpdateRequest | 

try {
    $apiInstance->farmsFarmIdOcOcIdPatch($farm_id, $oc_id, $body);
} catch (Exception $e) {
    echo 'Exception when calling OcApi->farmsFarmIdOcOcIdPatch: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **farm_id** | **int**|  |
 **oc_id** | **int**|  |
 **body** | [**\Swagger\Client\Model\OCUpdateRequest**](../Model/OCUpdateRequest.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

[ApiKey](../../README.md#ApiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **farmsFarmIdOcPost**
> \Swagger\Client\Model\OCF farmsFarmIdOcPost($farm_id, $body)

Create new OC

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: ApiKey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\OcApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$farm_id = 56; // int | 
$body = new \Swagger\Client\Model\OCCreateRequest(); // \Swagger\Client\Model\OCCreateRequest | 

try {
    $result = $apiInstance->farmsFarmIdOcPost($farm_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OcApi->farmsFarmIdOcPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **farm_id** | **int**|  |
 **body** | [**\Swagger\Client\Model\OCCreateRequest**](../Model/OCCreateRequest.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\OCF**](../Model/OCF.md)

### Authorization

[ApiKey](../../README.md#ApiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **ocDelete**
> ocDelete($body)

Delete multiple OC profiles

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: ApiKey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\OcApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\IDs(); // \Swagger\Client\Model\IDs | 

try {
    $apiInstance->ocDelete($body);
} catch (Exception $e) {
    echo 'Exception when calling OcApi->ocDelete: ', $e->getMessage(), PHP_EOL;
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

# **ocGet**
> object ocGet()

OC list

Returns overclocking profiles that belong to current user

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: ApiKey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\OcApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->ocGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OcApi->ocGet: ', $e->getMessage(), PHP_EOL;
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

# **ocOcIdDelete**
> ocOcIdDelete($oc_id)

Delete OC

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: ApiKey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\OcApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$oc_id = 56; // int | 

try {
    $apiInstance->ocOcIdDelete($oc_id);
} catch (Exception $e) {
    echo 'Exception when calling OcApi->ocOcIdDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **oc_id** | **int**|  |

### Return type

void (empty response body)

### Authorization

[ApiKey](../../README.md#ApiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **ocOcIdGet**
> \Swagger\Client\Model\OCU ocOcIdGet($oc_id)

OC info

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: ApiKey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\OcApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$oc_id = 56; // int | 

try {
    $result = $apiInstance->ocOcIdGet($oc_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OcApi->ocOcIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **oc_id** | **int**|  |

### Return type

[**\Swagger\Client\Model\OCU**](../Model/OCU.md)

### Authorization

[ApiKey](../../README.md#ApiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **ocOcIdPatch**
> ocOcIdPatch($oc_id, $body)

Edit OC

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: ApiKey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\OcApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$oc_id = 56; // int | 
$body = new \Swagger\Client\Model\OCUpdateRequest(); // \Swagger\Client\Model\OCUpdateRequest | 

try {
    $apiInstance->ocOcIdPatch($oc_id, $body);
} catch (Exception $e) {
    echo 'Exception when calling OcApi->ocOcIdPatch: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **oc_id** | **int**|  |
 **body** | [**\Swagger\Client\Model\OCUpdateRequest**](../Model/OCUpdateRequest.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

[ApiKey](../../README.md#ApiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **ocPost**
> \Swagger\Client\Model\OCU ocPost($body)

Create new OC

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: ApiKey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\OcApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\OCCreateRequest(); // \Swagger\Client\Model\OCCreateRequest | 

try {
    $result = $apiInstance->ocPost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OcApi->ocPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\OCCreateRequest**](../Model/OCCreateRequest.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\OCU**](../Model/OCU.md)

### Authorization

[ApiKey](../../README.md#ApiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


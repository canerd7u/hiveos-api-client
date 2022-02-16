# Swagger\Client\KeysApi

All URIs are relative to *https://api2.hiveos.farm/api/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**farmsFarmIdKeysDelete**](KeysApi.md#farmsFarmIdKeysDelete) | **DELETE** /farms/{farmId}/keys | Delete multiple API keys
[**farmsFarmIdKeysGet**](KeysApi.md#farmsFarmIdKeysGet) | **GET** /farms/{farmId}/keys | Get list of attached API keys
[**farmsFarmIdKeysKeyIdDelete**](KeysApi.md#farmsFarmIdKeysKeyIdDelete) | **DELETE** /farms/{farmId}/keys/{keyId} | Detach API key
[**farmsFarmIdKeysKeyIdGet**](KeysApi.md#farmsFarmIdKeysKeyIdGet) | **GET** /farms/{farmId}/keys/{keyId} | Get attached API key info
[**farmsFarmIdKeysKeyIdPatch**](KeysApi.md#farmsFarmIdKeysKeyIdPatch) | **PATCH** /farms/{farmId}/keys/{keyId} | Edit attached API key
[**farmsFarmIdKeysPost**](KeysApi.md#farmsFarmIdKeysPost) | **POST** /farms/{farmId}/keys | Attach new API key
[**keysDelete**](KeysApi.md#keysDelete) | **DELETE** /keys | Delete multiple API keys
[**keysGet**](KeysApi.md#keysGet) | **GET** /keys | Get list of attached API keys
[**keysKeyIdDelete**](KeysApi.md#keysKeyIdDelete) | **DELETE** /keys/{keyId} | Detach API key
[**keysKeyIdGet**](KeysApi.md#keysKeyIdGet) | **GET** /keys/{keyId} | Get attached API key info
[**keysKeyIdPatch**](KeysApi.md#keysKeyIdPatch) | **PATCH** /keys/{keyId} | Edit attached API key
[**keysPost**](KeysApi.md#keysPost) | **POST** /keys | Attach new API key


# **farmsFarmIdKeysDelete**
> farmsFarmIdKeysDelete($farm_id, $body)

Delete multiple API keys

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: ApiKey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\KeysApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$farm_id = 56; // int | 
$body = new \Swagger\Client\Model\IDs(); // \Swagger\Client\Model\IDs | 

try {
    $apiInstance->farmsFarmIdKeysDelete($farm_id, $body);
} catch (Exception $e) {
    echo 'Exception when calling KeysApi->farmsFarmIdKeysDelete: ', $e->getMessage(), PHP_EOL;
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

# **farmsFarmIdKeysGet**
> object farmsFarmIdKeysGet($farm_id)

Get list of attached API keys

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: ApiKey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\KeysApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$farm_id = 56; // int | 

try {
    $result = $apiInstance->farmsFarmIdKeysGet($farm_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KeysApi->farmsFarmIdKeysGet: ', $e->getMessage(), PHP_EOL;
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

# **farmsFarmIdKeysKeyIdDelete**
> farmsFarmIdKeysKeyIdDelete($farm_id, $key_id)

Detach API key

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: ApiKey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\KeysApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$farm_id = 56; // int | 
$key_id = 56; // int | 

try {
    $apiInstance->farmsFarmIdKeysKeyIdDelete($farm_id, $key_id);
} catch (Exception $e) {
    echo 'Exception when calling KeysApi->farmsFarmIdKeysKeyIdDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **farm_id** | **int**|  |
 **key_id** | **int**|  |

### Return type

void (empty response body)

### Authorization

[ApiKey](../../README.md#ApiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **farmsFarmIdKeysKeyIdGet**
> \Swagger\Client\Model\ApiKeyF farmsFarmIdKeysKeyIdGet($farm_id, $key_id)

Get attached API key info

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: ApiKey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\KeysApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$farm_id = 56; // int | 
$key_id = 56; // int | 

try {
    $result = $apiInstance->farmsFarmIdKeysKeyIdGet($farm_id, $key_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KeysApi->farmsFarmIdKeysKeyIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **farm_id** | **int**|  |
 **key_id** | **int**|  |

### Return type

[**\Swagger\Client\Model\ApiKeyF**](../Model/ApiKeyF.md)

### Authorization

[ApiKey](../../README.md#ApiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **farmsFarmIdKeysKeyIdPatch**
> farmsFarmIdKeysKeyIdPatch($farm_id, $key_id, $body)

Edit attached API key

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: ApiKey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\KeysApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$farm_id = 56; // int | 
$key_id = 56; // int | 
$body = new \Swagger\Client\Model\ApiKeyUpdateRequest(); // \Swagger\Client\Model\ApiKeyUpdateRequest | 

try {
    $apiInstance->farmsFarmIdKeysKeyIdPatch($farm_id, $key_id, $body);
} catch (Exception $e) {
    echo 'Exception when calling KeysApi->farmsFarmIdKeysKeyIdPatch: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **farm_id** | **int**|  |
 **key_id** | **int**|  |
 **body** | [**\Swagger\Client\Model\ApiKeyUpdateRequest**](../Model/ApiKeyUpdateRequest.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

[ApiKey](../../README.md#ApiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **farmsFarmIdKeysPost**
> \Swagger\Client\Model\ApiKeyF farmsFarmIdKeysPost($farm_id, $body)

Attach new API key

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: ApiKey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\KeysApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$farm_id = 56; // int | 
$body = new \Swagger\Client\Model\ApiKeyCreateRequest(); // \Swagger\Client\Model\ApiKeyCreateRequest | 

try {
    $result = $apiInstance->farmsFarmIdKeysPost($farm_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KeysApi->farmsFarmIdKeysPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **farm_id** | **int**|  |
 **body** | [**\Swagger\Client\Model\ApiKeyCreateRequest**](../Model/ApiKeyCreateRequest.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\ApiKeyF**](../Model/ApiKeyF.md)

### Authorization

[ApiKey](../../README.md#ApiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **keysDelete**
> keysDelete($body)

Delete multiple API keys

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: ApiKey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\KeysApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\IDs(); // \Swagger\Client\Model\IDs | 

try {
    $apiInstance->keysDelete($body);
} catch (Exception $e) {
    echo 'Exception when calling KeysApi->keysDelete: ', $e->getMessage(), PHP_EOL;
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

# **keysGet**
> object keysGet()

Get list of attached API keys

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: ApiKey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\KeysApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->keysGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KeysApi->keysGet: ', $e->getMessage(), PHP_EOL;
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

# **keysKeyIdDelete**
> keysKeyIdDelete($key_id)

Detach API key

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: ApiKey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\KeysApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$key_id = 56; // int | 

try {
    $apiInstance->keysKeyIdDelete($key_id);
} catch (Exception $e) {
    echo 'Exception when calling KeysApi->keysKeyIdDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **key_id** | **int**|  |

### Return type

void (empty response body)

### Authorization

[ApiKey](../../README.md#ApiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **keysKeyIdGet**
> \Swagger\Client\Model\ApiKeyU keysKeyIdGet($key_id)

Get attached API key info

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: ApiKey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\KeysApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$key_id = 56; // int | 

try {
    $result = $apiInstance->keysKeyIdGet($key_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KeysApi->keysKeyIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **key_id** | **int**|  |

### Return type

[**\Swagger\Client\Model\ApiKeyU**](../Model/ApiKeyU.md)

### Authorization

[ApiKey](../../README.md#ApiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **keysKeyIdPatch**
> keysKeyIdPatch($key_id, $body)

Edit attached API key

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: ApiKey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\KeysApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$key_id = 56; // int | 
$body = new \Swagger\Client\Model\ApiKeyUpdateRequest(); // \Swagger\Client\Model\ApiKeyUpdateRequest | 

try {
    $apiInstance->keysKeyIdPatch($key_id, $body);
} catch (Exception $e) {
    echo 'Exception when calling KeysApi->keysKeyIdPatch: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **key_id** | **int**|  |
 **body** | [**\Swagger\Client\Model\ApiKeyUpdateRequest**](../Model/ApiKeyUpdateRequest.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

[ApiKey](../../README.md#ApiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **keysPost**
> \Swagger\Client\Model\ApiKeyU keysPost($body)

Attach new API key

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: ApiKey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\KeysApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\ApiKeyCreateRequest(); // \Swagger\Client\Model\ApiKeyCreateRequest | 

try {
    $result = $apiInstance->keysPost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KeysApi->keysPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\ApiKeyCreateRequest**](../Model/ApiKeyCreateRequest.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\ApiKeyU**](../Model/ApiKeyU.md)

### Authorization

[ApiKey](../../README.md#ApiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


# Swagger\Client\AclApi

All URIs are relative to *https://api2.hiveos.farm/api/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**farmsFarmIdAclAclIdDelete**](AclApi.md#farmsFarmIdAclAclIdDelete) | **DELETE** /farms/{farmId}/acl/{aclId} | Revoke farm privileges
[**farmsFarmIdAclAclIdGet**](AclApi.md#farmsFarmIdAclAclIdGet) | **GET** /farms/{farmId}/acl/{aclId} | Farm privileges for single user
[**farmsFarmIdAclAclIdPatch**](AclApi.md#farmsFarmIdAclAclIdPatch) | **PATCH** /farms/{farmId}/acl/{aclId} | Edit farm privileges
[**farmsFarmIdAclDelete**](AclApi.md#farmsFarmIdAclDelete) | **DELETE** /farms/{farmId}/acl | Revoke multiple privileges
[**farmsFarmIdAclGet**](AclApi.md#farmsFarmIdAclGet) | **GET** /farms/{farmId}/acl | Farm privileges
[**farmsFarmIdAclMeDelete**](AclApi.md#farmsFarmIdAclMeDelete) | **DELETE** /farms/{farmId}/acl/me | Remove my account from farm privileges
[**farmsFarmIdAclPost**](AclApi.md#farmsFarmIdAclPost) | **POST** /farms/{farmId}/acl | Grant farm privileges
[**farmsFarmIdAclSharePost**](AclApi.md#farmsFarmIdAclSharePost) | **POST** /farms/{farmId}/acl/share | Share access to farm for admins


# **farmsFarmIdAclAclIdDelete**
> farmsFarmIdAclAclIdDelete($farm_id, $acl_id)

Revoke farm privileges

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: ApiKey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\AclApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$farm_id = 56; // int | 
$acl_id = 56; // int | 

try {
    $apiInstance->farmsFarmIdAclAclIdDelete($farm_id, $acl_id);
} catch (Exception $e) {
    echo 'Exception when calling AclApi->farmsFarmIdAclAclIdDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **farm_id** | **int**|  |
 **acl_id** | **int**|  |

### Return type

void (empty response body)

### Authorization

[ApiKey](../../README.md#ApiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **farmsFarmIdAclAclIdGet**
> \Swagger\Client\Model\FarmAcl farmsFarmIdAclAclIdGet($farm_id, $acl_id)

Farm privileges for single user

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: ApiKey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\AclApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$farm_id = 56; // int | 
$acl_id = 56; // int | 

try {
    $result = $apiInstance->farmsFarmIdAclAclIdGet($farm_id, $acl_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AclApi->farmsFarmIdAclAclIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **farm_id** | **int**|  |
 **acl_id** | **int**|  |

### Return type

[**\Swagger\Client\Model\FarmAcl**](../Model/FarmAcl.md)

### Authorization

[ApiKey](../../README.md#ApiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **farmsFarmIdAclAclIdPatch**
> farmsFarmIdAclAclIdPatch($farm_id, $acl_id, $body)

Edit farm privileges

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: ApiKey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\AclApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$farm_id = 56; // int | 
$acl_id = 56; // int | 
$body = new \Swagger\Client\Model\AclUpdateRequest(); // \Swagger\Client\Model\AclUpdateRequest | 

try {
    $apiInstance->farmsFarmIdAclAclIdPatch($farm_id, $acl_id, $body);
} catch (Exception $e) {
    echo 'Exception when calling AclApi->farmsFarmIdAclAclIdPatch: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **farm_id** | **int**|  |
 **acl_id** | **int**|  |
 **body** | [**\Swagger\Client\Model\AclUpdateRequest**](../Model/AclUpdateRequest.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

[ApiKey](../../README.md#ApiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **farmsFarmIdAclDelete**
> farmsFarmIdAclDelete($farm_id, $body)

Revoke multiple privileges

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: ApiKey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\AclApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$farm_id = 56; // int | 
$body = new \Swagger\Client\Model\IDs(); // \Swagger\Client\Model\IDs | 

try {
    $apiInstance->farmsFarmIdAclDelete($farm_id, $body);
} catch (Exception $e) {
    echo 'Exception when calling AclApi->farmsFarmIdAclDelete: ', $e->getMessage(), PHP_EOL;
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

# **farmsFarmIdAclGet**
> object farmsFarmIdAclGet($farm_id)

Farm privileges

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: ApiKey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\AclApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$farm_id = 56; // int | 

try {
    $result = $apiInstance->farmsFarmIdAclGet($farm_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AclApi->farmsFarmIdAclGet: ', $e->getMessage(), PHP_EOL;
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

# **farmsFarmIdAclMeDelete**
> farmsFarmIdAclMeDelete($farm_id)

Remove my account from farm privileges

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: ApiKey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\AclApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$farm_id = 56; // int | 

try {
    $apiInstance->farmsFarmIdAclMeDelete($farm_id);
} catch (Exception $e) {
    echo 'Exception when calling AclApi->farmsFarmIdAclMeDelete: ', $e->getMessage(), PHP_EOL;
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

# **farmsFarmIdAclPost**
> \Swagger\Client\Model\FarmAcl farmsFarmIdAclPost($farm_id, $body)

Grant farm privileges

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: ApiKey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\AclApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$farm_id = 56; // int | 
$body = new \Swagger\Client\Model\AclCreateRequest(); // \Swagger\Client\Model\AclCreateRequest | 

try {
    $result = $apiInstance->farmsFarmIdAclPost($farm_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AclApi->farmsFarmIdAclPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **farm_id** | **int**|  |
 **body** | [**\Swagger\Client\Model\AclCreateRequest**](../Model/AclCreateRequest.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\FarmAcl**](../Model/FarmAcl.md)

### Authorization

[ApiKey](../../README.md#ApiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **farmsFarmIdAclSharePost**
> \Swagger\Client\Model\FarmAcl farmsFarmIdAclSharePost($farm_id, $body)

Share access to farm for admins

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: ApiKey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\AclApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$farm_id = 56; // int | 
$body = new \Swagger\Client\Model\\Swagger\Client\Model\Body(); // \Swagger\Client\Model\Body | 

try {
    $result = $apiInstance->farmsFarmIdAclSharePost($farm_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AclApi->farmsFarmIdAclSharePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **farm_id** | **int**|  |
 **body** | [**\Swagger\Client\Model\Body**](../Model/.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\FarmAcl**](../Model/FarmAcl.md)

### Authorization

[ApiKey](../../README.md#ApiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


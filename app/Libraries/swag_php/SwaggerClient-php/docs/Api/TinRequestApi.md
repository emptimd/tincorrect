# Swagger\Client\TinRequestApi

All URIs are relative to *https://api.tincorrect.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**tinRequestGetTinRequests**](TinRequestApi.md#tinRequestGetTinRequests) | **GET** /TinRequest/{id} | 
[**tinRequestPostTinRequest**](TinRequestApi.md#tinRequestPostTinRequest) | **POST** /TinRequest | 


# **tinRequestGetTinRequests**
> \Swagger\Client\Model\TinRequestResultSharedModel tinRequestGetTinRequests($id)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\TinRequestApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 56; // int | 

try {
    $result = $apiInstance->tinRequestGetTinRequests($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TinRequestApi->tinRequestGetTinRequests: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |

### Return type

[**\Swagger\Client\Model\TinRequestResultSharedModel**](../Model/TinRequestResultSharedModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **tinRequestPostTinRequest**
> int tinRequestPostTinRequest($tin_request)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\TinRequestApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tin_request = new \Swagger\Client\Model\AddTinRequestSharedModel(); // \Swagger\Client\Model\AddTinRequestSharedModel | 

try {
    $result = $apiInstance->tinRequestPostTinRequest($tin_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TinRequestApi->tinRequestPostTinRequest: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **tin_request** | [**\Swagger\Client\Model\AddTinRequestSharedModel**](../Model/AddTinRequestSharedModel.md)|  |

### Return type

**int**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


# Swagger\Client\BulkTinRequestApi

All URIs are relative to *https://api.tincorrect.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**bulkTinRequestGetBulkTinRequestResult**](BulkTinRequestApi.md#bulkTinRequestGetBulkTinRequestResult) | **GET** /BulkTinRequest/{id} | 
[**bulkTinRequestGetBulkTinRequestResultFile**](BulkTinRequestApi.md#bulkTinRequestGetBulkTinRequestResultFile) | **GET** /BulkTinRequestResultFile/{id} | 
[**bulkTinRequestPostBulkTinRequest**](BulkTinRequestApi.md#bulkTinRequestPostBulkTinRequest) | **POST** /BulkTinRequest | 


# **bulkTinRequestGetBulkTinRequestResult**
> \Swagger\Client\Model\BulkTinRequestResultSharedModel bulkTinRequestGetBulkTinRequestResult($id, $mask_tins)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\BulkTinRequestApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 56; // int | 
$mask_tins = true; // bool | 

try {
    $result = $apiInstance->bulkTinRequestGetBulkTinRequestResult($id, $mask_tins);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BulkTinRequestApi->bulkTinRequestGetBulkTinRequestResult: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |
 **mask_tins** | **bool**|  | [optional]

### Return type

[**\Swagger\Client\Model\BulkTinRequestResultSharedModel**](../Model/BulkTinRequestResultSharedModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **bulkTinRequestGetBulkTinRequestResultFile**
> object bulkTinRequestGetBulkTinRequestResultFile($id, $user_friendly_result, $mask_tins)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\BulkTinRequestApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 56; // int | 
$user_friendly_result = true; // bool | 
$mask_tins = true; // bool | 

try {
    $result = $apiInstance->bulkTinRequestGetBulkTinRequestResultFile($id, $user_friendly_result, $mask_tins);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BulkTinRequestApi->bulkTinRequestGetBulkTinRequestResultFile: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |
 **user_friendly_result** | **bool**|  | [optional]
 **mask_tins** | **bool**|  | [optional]

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **bulkTinRequestPostBulkTinRequest**
> int bulkTinRequestPostBulkTinRequest($bulk_tin_request)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\BulkTinRequestApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$bulk_tin_request = new \Swagger\Client\Model\AddBulkTinRequestSharedModel(); // \Swagger\Client\Model\AddBulkTinRequestSharedModel | 

try {
    $result = $apiInstance->bulkTinRequestPostBulkTinRequest($bulk_tin_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BulkTinRequestApi->bulkTinRequestPostBulkTinRequest: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **bulk_tin_request** | [**\Swagger\Client\Model\AddBulkTinRequestSharedModel**](../Model/AddBulkTinRequestSharedModel.md)|  |

### Return type

**int**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


# Swagger\Client\SearchCreditsApi

All URIs are relative to *https://api.tincorrect.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**searchCreditsGetSearchCredits**](SearchCreditsApi.md#searchCreditsGetSearchCredits) | **GET** /SearchCredits | 


# **searchCreditsGetSearchCredits**
> int searchCreditsGetSearchCredits()



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\SearchCreditsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->searchCreditsGetSearchCredits();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SearchCreditsApi->searchCreditsGetSearchCredits: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

**int**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


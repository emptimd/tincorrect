<?php

namespace App\Http\Controllers;

use App\Libraries\TincorrectApi;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function validateForm(Request $request)
    {

        $data = [
            'tin' => $request->tin,
            'name' => 'John Smith2'
        ];

        $asd = new TincorrectApi;

        $apiInstance = new \App\Libraries\TinCorrect\Api\TinRequestApi;

        $tin_request = new \App\Libraries\TinCorrect\Model\AddTinRequestSharedModel($data); // \Swagger\Client\Model\AddTinRequestSharedModel |

        try {
            $result = $apiInstance->tinRequestPostTinRequest($tin_request);
            print_r($result);
        } catch (\App\Libraries\TinCorrect\ApiException $e) {
            $body = json_decode($e->getResponseBody());
            $tin_error = $body->ModelState->{"tinRequest.Tin"};
            if(is_array($tin_error)) {
                $tin_error = $tin_error[0];
            }
        }

        dd($tin_error);

    }
}

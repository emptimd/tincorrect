<?php

namespace App\Http\Controllers;

use App\Libraries\TincorrectApi;
use App\Libraries\TincorrectException;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function validateForm(Request $request)
    {
        // here we can test getTIN. 19337 (dose not match) 19338 dose (match)
//        $tincorrect = new TincorrectApi;
//        $response = $tincorrect->getTIN(19337);

        // We got the tin_respons. now we can check if tin+name match or not.
//        if($response['ResultCategory'] === 'match') {
//            $is_valid = 1;
//        }else {
//            $is_valid = 0;
//        }
//        dd($is_valid);
//        exit;
        // valid tin ex: 81-1494143
        // Here is a valid TIN : 119622347
        // Name : William Perez
        // Try to validate TIN. catch exception
        try {
//            $response = (new TincorrectApi)->validateTIN(['tin' => $request->tin, 'name' => '$request->tin]);

            $tincorrect = new TincorrectApi;
            $tin = $tincorrect->validateTIN(['tin' => $request->tin, 'name' => $request->firstname.' '.$request->lastname]);

            /*Tincorrect works on the request some time. usually less than 2 seconds*/
            sleep(3);
            $response = $tincorrect->getTIN($tin);

            // We got the tin_respons. now we can check if tin+name match or not.
            if($response['ResultCategory'] === 'match') {
                $is_valid = 1;
            }else {
                $is_valid = 0;
            }

            dd($is_valid);

            // here we insert data into database.


        } catch (TincorrectException $e) { // here we have some error. Login error or validate Tin error.
            $response = $e->getOptions();
            // we can show user some error.
        }

        return view('welcome', $response);

    }
}

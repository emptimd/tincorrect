<?php

namespace App\Libraries;

use GuzzleHttp\Middleware;
use Illuminate\Support\Facades\Cache;

class TincorrectApi
{

    protected $client;

    private $api_username;
    private $api_password;

    // Access token used for every, request (except login). Send as Authorization: Bearer $token
    // token is available for 23.9h. So we cache the token for 23h.
    public $token;

    public $retry = 0;

    private $request;

    public function __construct($data = null)
    {
        $this->client = new \GuzzleHttp\Client([
            'base_uri' => 'https://api.tincorrect.com'
        ]);
        $this->request = $data;

        $this->api_username = env('TINCORRECT_USERNAME');
        $this->api_password = env('TINCORRECT_PASSWORD');


//        Cache::delete('tincorrect_token');
        //get token
        if(Cache::has('tincorrect_token')) $this->token = Cache::get('tincorrect_token');
        else {
            $this->token = $this->login()->access_token;

            Cache::add('tincorrect_token', $this->token, 23*60);
        }
    }

    public function login()
    {
        try {
            $res = $this->client->post('Token', [
                'form_params' => [
                    'username' => $this->api_username,
                    'password' => $this->api_password,
                    'grant_type' => 'password'
                ]
            ]);

            return json_decode($res->getBody());

        } catch (\Exception $e) {
            self::throwError($e, 'login');
        }

    }


    public function validateTIN($data)
    {

        try {
            $res = $this->client->post('TinRequest', [
                'json' => $data,
                'headers' =>['Authorization' => "Bearer ".$this->token]
            ]);

            // if its success it return the id of the TIN.
            return json_decode($res->getBody());

        } catch (\Exception $e) {
            self::throwError($e, 'validateTIN');
        }


        return view('validate', []);
    }


    public function getTIN($id)
    {
        try {
            $res = $this->client->get('TinRequest/'.$id, [
                'headers' => ['Authorization' => "Bearer ".$this->token]
            ]);

            // if its success it return the id of the TIN.
            $res = json_decode($res->getBody());

            //if the result inst ready. w8 2 more seconds and send getTIN again.
            if((!isset($res->ResultCategory) || ($res->ResultCategory !== 'nomatch' && $res->ResultCategory !== 'match')) && !$this->retry) {
                sleep(2);
                $this->retry++;
                return $this->getTIN($id);
            }


            $tin_result = [
                'ResultCategory' => $res->ResultCategory,
                'ResultDescription' => $res->ResultCategory
            ];
            
            /*Check if TIN and Name match*/
            return $tin_result;

        } catch (\Exception $e) {
            self::throwError($e, 'getTIN');
        }

    }



    protected static function throwError(\Exception $e, $method)
    {
        $response_body = json_decode($e->getResponse()->getBody()->getContents());

        $error = [
            'status' => 'error',
            'method' => $method,
        ];

        /* Login Error msg*/
        if(isset($response_body->error)) {
            $error += ['error' => $response_body->error];
        }

        if(isset($response_body->error_description)) {
            $error += ['error_description' => $response_body->error_description];
        }


        /* Tin validate Errors msg*/
        if(isset($response_body->Message)) {
            $error += ['error' => $response_body->Message];
        }

        if(isset($response_body->ModelState)) {

            if(isset($response_body->ModelState->{"tinRequest.Tin"})) {
                $error += ['error_description' => $response_body->ModelState->{"tinRequest.Tin"}[0]];
            }else {
                $state = (array) $response_body->ModelState;
                $error += ['error_description' => reset($state)[0]];
            }

        }

        $error += ['error_description' => 'Unknown error'];

        throw new TincorrectException(
            "[{$e->getCode()}] {$e->getMessage()}",
            $e->getCode(),
            null,
            $error
        );

    }

}
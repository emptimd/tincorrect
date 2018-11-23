<?php

namespace App\Libraries;

use GuzzleHttp\Middleware;
use Illuminate\Support\Facades\Cache;

class TincorrectApi
{

    protected $client;

    private $api_username;
    private $api_password;

    public $token;

    private $request;

    public function __construct($data = null)
    {
        $this->client = new \GuzzleHttp\Client([
            'base_uri' => 'https://api.tincorrect.com'
        ]);
        $this->request = $data;

        $this->api_username = env('TINCORRECT_USERNAME');
        $this->api_password = env('TINCORRECT_PASSWORD');


        Cache::delete('tincorrect_token');
        //get token
        if(Cache::has('tincorrect_token')) $this->token = Cache::get('tincorrect_token');
        else {
            $token = $this->login()->token;
            $this->token = $token;
            Cache::add('tincorrect_token', $token, 23*60);
        }
    }

    public function login()
    {
        $res = $this->client->post('Token', [
            'form_params' => [
                'username' => $this->api_username,
                'password' => $this->api_password,
                'grant_type' => 'password'
            ]
        ]);

//        return json_decode($res->getBody());
        dd(json_decode($res->getBody()));

    }


    public function validate($data = null)
    {
        if(!$data) return 'Error no $data';

        $res = $this->client->post('TinRequest', [
            'json' => $data
        ]);

        dd($res);


        return view('validate', []);
    }

}
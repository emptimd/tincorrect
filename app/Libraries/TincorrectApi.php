<?php

namespace App\Libraries;

use GuzzleHttp\Middleware;

class TincorrectApi
{

    protected $client;

    private $api_username;
    private $api_password;

    private $request;

    public function __construct($data = null)
    {
        $this->client = new \GuzzleHttp\Client([
            'base_uri' => 'https://api.tincorrect.com'
        ]);
        $this->request = $data;

        $this->api_username = env('TINCORRECT_USERNAME');
        $this->api_password = env('TINCORRECT_PASSWORD');

    }

}
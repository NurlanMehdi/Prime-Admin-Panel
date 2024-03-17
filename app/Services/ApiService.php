<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;
use GuzzleHttp\Client;

class ApiService
{
    private $baseUrl;
    private $accessToken;
    private $contentType;

    public function __construct()
    {
        $this->baseUrl = 'https://api.housecallpro.com/';
        $this->accessToken = 'Token 511dddc0cafa4ef29b2a9f479debd771';
        $this->contentType = 'application/json';
    }

    public function post($endpoint, $data)
    {
        $client = new Client();

        $response = $client->request('POST', $this->baseUrl . $endpoint, [
            'headers' => [
                'Accept' => $this->contentType,
                'Authorization' => $this->accessToken,
                'Content-Type' => $this->contentType,
            ],
            'json' => $data,
        ]);

        

        return $response;
    }

    public function get($endpoint)
    {
        return Http::withHeaders([
            'Accept' => 'application/json',
            'Authorization' => $this->accessToken,
        ])->get($this->baseUrl . $endpoint);
    }

    public function delete($endpoint)
    {
        $client = new Client();

        $response = $client->request('DELETE', $this->baseUrl . $endpoint, [
            'headers' => [
                'Accept' => $this->contentType,
                'Authorization' => $this->accessToken,
                'Content-Type' => $this->contentType,
            ],
        ]);

        return $response;
    }
}

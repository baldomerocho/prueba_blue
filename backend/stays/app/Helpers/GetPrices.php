<?php

namespace App\Helpers;

class GetPrices
{
    static function perPlate($plate) : float
    {
        // get http client env('PLATES_SERVICE')
        $client = new \GuzzleHttp\Client();
        $response = $client->request('GET', env('PLATES_SERVICE') . '/api/v1/plates/' . $plate);
        $body = json_decode($response->getBody());
        $price = $body->price->price;
        return floatval($price);

    }
}

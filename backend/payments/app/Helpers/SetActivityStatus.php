<?php

namespace App\Helpers;

use Illuminate\Support\Facades\Log;

class SetActivityStatus
{

    static function finished($plate)
    {
        $httpClient = new \GuzzleHttp\Client();
        try{
            $response = $httpClient->request('PUT', env("STAYS_SERVICE").'/api/v1/activities/set-status/'.$plate);
            $response = json_decode($response->getBody()->getContents());
            return $response;
        } catch (\Throwable $th) {
            Log::warning($th->getMessage());
            return false;
        }
    }

}

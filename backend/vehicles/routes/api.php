<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::group(['prefix' => 'v1'], function () {
    Route::apiResource('prices', \App\Http\Controllers\V1\PriceController::class);
    Route::apiResource('plates', \App\Http\Controllers\V1\PlateController::class);
});

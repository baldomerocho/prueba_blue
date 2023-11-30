<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::group(['prefix' => 'v1'], function () {
    Route::apiResource('activities', 'App\Http\Controllers\ActivityController');
    Route::get('balance/{plate}', 'App\Http\Controllers\BalanceController@diff');
});

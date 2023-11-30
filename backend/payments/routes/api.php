<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::group(['prefix' => 'v1'], function () {
    Route::post('payments', 'App\Http\Controllers\V1\PaymentController@store');
});

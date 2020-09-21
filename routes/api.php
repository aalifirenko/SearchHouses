<?php

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::group(['middleware' => ['guest:api'], 'namespace' => 'Api'], function() {
    Route::any('get-houses', 'HousesController@get_houses')->name('get_houses');
});


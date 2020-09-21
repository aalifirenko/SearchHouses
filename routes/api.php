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

Route::group(['middleware' => ['guest:api'], 'namespace' => 'Api', 'as' => 'api.'], function() {


    # House
    Route::group(['namespace' => 'House', 'as' => 'house.'], function() {
        Route::get('get-houses', ['as' => 'house.list', 'uses' => 'ListController']);
    });
});


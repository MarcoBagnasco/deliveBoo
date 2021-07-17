<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::namespace('Api')->group(function() {
    
    //Get restaurants
    // Route::get('/restaurants', 'RestaurantController@index');
    Route::get('/restaurants/{type}', 'RestaurantController@list');
    Route::get('/restaurant/{id}', 'DishController@index');
});

<?php

use Illuminate\Http\Request;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
Route::post('register', 'Auth\RegisterController@registered');
Route::post('login', 'Auth\LoginController@login')->name('login');
Route::post('logout', 'Auth\LoginController@logout');

/*
 * 'prefix'=>'api', 'middleware' => 'auth:api'
 */

Route::group(['middleware' => 'auth:api'], function() {
    Route::apiResource('profile', 'ProfileController');
    Route::apiResource('eventstype', 'Events_typeController');
    Route::apiResource('city', 'CityController');
    Route::apiResource('town', 'TownController');
    Route::apiResource('district', 'DistrictController');
    Route::apiResource('event', 'EventController');
    Route::apiResource('favorite', 'FavoriteController');
    Route::apiResource('hobby', 'HobbyController');
});

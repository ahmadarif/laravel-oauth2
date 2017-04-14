<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return response()->json(['message' => 'Larapass']);
});


Route::group([
    'prefix' => '/oauth',
    'middleware' => 'auth:api',
    'namespace' => 'Auth'
], function () {
    Route::get('/token', 'Oauth2Controller@profil');
    Route::delete('/token', 'Oauth2Controller@logout');
});
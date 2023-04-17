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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// URL API AUTH
Route::group([
    'namespace' => 'App\Http\Controllers\Api',
    'middleware' => ['auth','CekRole:admin,keuangan']
], function () {
    // Api Product
    // Route::resource('api', 'ApiController');

    // Api User
    Route::resource('api_user', 'Api_UserController');

    // Test Email
    Route::resource('api_email', 'Api_SendermailController');
});


// URL API PUBLIC
Route::group([
    'namespace' => 'App\Http\Controllers\Api',
], function () {
    // Api Product
    Route::resource('api_product', 'Api_ProductController');
});

<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\LatihanController;
use App\Http\Controllers\Log\Log_UserController;
use App\Http\Controllers\Log\Log_AuthController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Api\Api_WilayahController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Component\CaptchaController;
use RealRashid\SweetAlert\Facades\Alert;

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

    // Get Cb Wilayah Indonesia
    Route::resource('api_wilayah', 'Api_WilayahController');
    Route::get('/data/cb/kota/{id}', [Api_WilayahController::class,'ambilkota'])->name('ambil.kota');
    Route::get('/data/cb/kecamatan/{id}', [Api_WilayahController::class,'ambilkecamatan'])->name('ambil.kecamatan');
    Route::get('/data/cb/kelurahan/{id}', [Api_WilayahController::class,'ambilkelurahan'])->name('ambil.kelurahan');
});


// URL API PUBLIC
Route::group([
    'namespace' => 'App\Http\Controllers\Api',
], function () {
    // Api Product
    Route::resource('api_product', 'Api_ProductController');
});

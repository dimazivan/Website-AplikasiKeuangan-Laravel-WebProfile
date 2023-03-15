<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\LatihanController;
use App\Http\Controllers\Log\Log_UserController;
use App\Http\Controllers\Log\Log_AuthController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Auth\LoginController;
use RealRashid\SweetAlert\Facades\Alert;

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

// LOGIN
Route::get('/login', [LoginController::class,'index'])->name('index.login');
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

// URL Auth
Route::group([
    'prefix' => 'auth',
    'namespace' => 'App\Http\Controllers\Auth',
], function () {
    // Login
    Route::any('/login/cek', [LoginController::class, 'login'])->name('login');
    Route::resource('reset', 'ResetController');
});

// Homepage
Route::group([
    'namespace' => 'App\Http\Controllers\Admin',
    'middleware' => ['auth','CekRole:admin,keuangan']
], function () {
    Route::get('/', function () {
        return view('admin.index');
    });
});

// Admin
// URL ADMIN
Route::group([
    'prefix' => 'admin',
    'namespace' => 'App\Http\Controllers\Admin',
    'middleware' => ['auth','CekRole:admin']
], function () {
    // Route Latihan
    Route::resource('latihan', 'LatihanController');

    // Route User
    Route::resource('user', 'UserController');

    // Route Product
    Route::resource('product', 'ProductController');

    // Route Service
    Route::resource('service', 'ServiceController');
});

// Log Data
// URL LOG
Route::group([
    'prefix' => 'log',
    'namespace' => 'App\Http\Controllers\Log',
    'middleware' => ['auth','CekRole:admin']
], function () {
    // Route Log Data User
    Route::resource('log_user', 'Log_UserController');

    // Route Log Data User
    Route::resource('log_auth', 'Log_AuthController');
});

// User Keuangan
// URL API
Route::group([
    'prefix' => 'api',
    'namespace' => 'App\Http\Controllers\Api',
    'middleware' => ['auth','CekRole:admin,keuangan']
], function () {
    // Api Product
    Route::resource('api', 'ApiController');
    Route::resource('api_product', 'Api_ProductController');
    Route::resource('api_user', 'Api_UserController');
    Route::resource('api_email', 'Api_SendermailController');
});

Route::fallback(function () {
    // Alert::info('Proses Gagal', 'Halaman tidak ditemukan');
    return view('error.404');
});

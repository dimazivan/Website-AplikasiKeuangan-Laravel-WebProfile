<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Log\Log_UserController;
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
Route::any('/login/cek', [LoginController::class, 'login'])->name('login');
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

// Admin
Route::group([
    'namespace' => 'App\Http\Controllers\Admin',
    'middleware' => ['auth','CekRole:admin']
], function () {
    // Route User
    Route::resource('user', 'UserController');

    // Route Product
    Route::resource('product', 'ProductController');
});

// Log Data
Route::group([
    'namespace' => 'App\Http\Controllers\Log',
    'middleware' => ['auth','CekRole:admin']
], function () {
    // Route User
    Route::resource('log_user', 'Log_UserController');
});

// User Keuangan
Route::group([
    'namespace' => 'App\Http\Controllers\Admin',
    'middleware' => ['auth','CekRole:admin,keuangan']
], function () {
    // Api
    Route::resource('api', 'ApiController');

    Route::get('/', function () {
        return view('admin.index');
    });
});

Route::fallback(function () {
    // Alert::info('Proses Gagal', 'Halaman tidak ditemukan');
    return view('error.404');
});

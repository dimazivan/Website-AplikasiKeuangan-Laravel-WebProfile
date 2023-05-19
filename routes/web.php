<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\LatihanController;
use App\Http\Controllers\Log\Log_UserController;
use App\Http\Controllers\Log\Log_AuthController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Api\Api_WilayahController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Component\CaptchaController;
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
Route::get('/reload-captcha', [CaptchaController::class, 'generate'])->name('captcha.generate');

// REGISTER
// Route::get('/register', [RegisterController::class,'index'])->name('index.register');

Route::group([
    'namespace' => 'App\Http\Controllers\Auth',
], function () {
    // Landing
    Route::get('/', function () {
        return view('landing.index');
    });

    // Login
    Route::resource('register', 'RegisterController');
});


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
    Route::get('/dashboard', function () {
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
    // Cek Data
    Route::get('/data/cb/id/{id}', [UserController::class,'cekId'])->name('cek.id');
    Route::post('/data/cb/user/deactive', [UserController::class,'deactiveUser'])->name('deactive.user');

    // Route Product
    Route::resource('product', 'ProductController');

    // Route Service
    Route::resource('service', 'ServiceController');
});

// Admin
// URL ADMIN
Route::group([
    'prefix' => 'admin',
    'namespace' => 'App\Http\Controllers\Admin',
], function () {
    // Cek Data
    Route::get('/data/cb/username/{username}', [UserController::class,'cekUsername'])->name('cek.username');
    Route::get('/data/cb/email/{email}', [UserController::class,'cekEmail'])->name('cek.email');


    // Component
    Route::get("/data/component/user/", function () {
        return view("admin.components.modal_content.content_modaluser");
    });
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
    'prefix' => 'data_api',
    'namespace' => 'App\Http\Controllers\Api',
    'middleware' => ['auth','CekRole:admin,keuangan']
], function () {
    // Route::get('/api_wilayah/kota/{$id}', [Api_WilayahController::class, 'ambilKota'])->name('ambil.kota');
    // Route::get('/api_wilayah/kelurahan/{$id}', [Api_WilayahController::class, 'ambilKelurahan'])->name('ambil.kelurahan');
    // Route::get('/api_wilayah/kecamatan/{$id}', [Api_WilayahController::class, 'ambilKecamatan'])->name('ambil.kecamatan');

    // Test Email
    Route::resource('api_email', 'Api_SendermailController');

    // Api Product
    Route::resource('api', 'ApiController');
});

// Route::group([
//     'prefix' => 'asset','backend','data_file','gate','vendor',
//     'middleware' => ['auth','CekRole:admin,keuangan']
// ], function () {
//     Route::get('image/{imagename}', '...');
// });

Route::fallback(function () {
    return view('error.404');
});

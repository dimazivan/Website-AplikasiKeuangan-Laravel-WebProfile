<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\LatihanController;
use App\Http\Controllers\Log\Log_UserController;
use App\Http\Controllers\Log\Log_AuthController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Api\Api_WilayahController;
use App\Http\Controllers\Api\AuthApiController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Component\CaptchaController;
use App\Models\Product;
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

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

//API route for register new user
Route::post('/register', [AuthApiController::class, 'register']);
//API route for login user
Route::post('/login', [AuthApiController::class, 'login']);

Route::get('/cek_login', [AuthApiController::class, 'cek_login']);

//Protecting Routes
Route::group(['middleware' => ['auth:sanctum']], function () {
    Route::get('/profile', function (Request $request) {
        return auth()->user();
    });

    // API route for logout user
    Route::post('/logout', [AuthApiController::class, 'logout']);

    // Api User
    Route::resource('api_user', 'Api_UserController');

    // Get Cb Wilayah Indonesia
    Route::resource('api_wilayah', 'Api_WilayahController');
});



// URL API AUTH
// Route::group([
//     'namespace' => 'App\Http\Controllers\Api',
//     'middleware' => ['auth','CekRole:admin,keuangan']
// ], function () {
//     // Api User
//     Route::resource('api_user', 'Api_UserController');

//     // Get Cb Wilayah Indonesia
//     Route::resource('api_wilayah', 'Api_WilayahController');
// });


// URL API PUBLIC
Route::group([
    'namespace' => 'App\Http\Controllers\Api',
], function () {
    // Get Cb Wilayah Indonesia
    Route::get('/data/cb/kota/{id}', [Api_WilayahController::class,'ambilkota'])->name('ambil.kota');
    Route::get('/data/cb/kecamatan/{id}', [Api_WilayahController::class,'ambilkecamatan'])->name('ambil.kecamatan');
    Route::get('/data/cb/kelurahan/{id}', [Api_WilayahController::class,'ambilkelurahan'])->name('ambil.kelurahan');

    // Api Product
    Route::resource('api_product', 'Api_ProductController');
});

Route::get('/data/cb/brand/product', function () {
    // return Response::json(Product::Brand()->get());

    return response()->json([
        'success' => true,
        'message' => 'List Data Brand Product',
        'data'    => Product::Brand()->get()
    ], 200);
});

Route::get('/data/cb/category/product', function () {
    // return Response::json(Product::Brand()->get());

    return response()->json([
        'success' => true,
        'message' => 'List Data Category Product',
        'data'    => Product::Category()->get()
    ], 200);

});

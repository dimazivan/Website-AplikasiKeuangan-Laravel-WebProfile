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
use App\Http\Controllers\Log\Change_LogController;
use App\Models\Languages;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\App;

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
// $lang = "id";
// $prefix = "";

// LOGIN
Route::get('/login', [LoginController::class,'index'])->name('index.login');
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');
Route::get('/reload-captcha', [CaptchaController::class, 'generate'])->name('captcha.generate');

Route::get("/", function () {
    return redirect('/id');
});

// Bahasa
foreach (Languages::all() as $data) {
    Route::group([
        'prefix' => $data->alias,
        App::setLocale(request()->segment(1)),
        'namespace' => 'App\Http\Controllers\Landing',
    ], function ($router) {
        // ], function ($lange) use ($lang) {

        // dd(
        //     request()->segments(),
        //     request()->segment(1),
        // );

        // Landing
        Route::resource('/', 'LandingController');
        Route::resource('/project', 'ProjectController');
        Route::resource('/pricing', 'PricingController');
    });

    Route::group([
        'prefix' => $data->alias.'/log',
        'namespace' => 'App\Http\Controllers\Log',
    ], function () {
        // Route Log Data User
        Route::resource('change_log', 'Change_LogController');
    });

    // REGISTER
    // Route::get('/register', [RegisterController::class,'index'])->name('index.register');

    Route::group([
        'prefix' => $data->alias,
        'namespace' => 'App\Http\Controllers\Auth',
    ], function () {
        // Login
        Route::resource('register', 'RegisterController');
    });

    // URL Auth
    Route::group([
        'prefix' => $data->alias.'/auth',
        'namespace' => 'App\Http\Controllers\Auth',
    ], function () {
        // Login
        Route::any('/login/cek', [LoginController::class, 'login'])->name('login');
        Route::resource('reset', 'ResetController');
    });

    // Admin
    // Dashboard
    Route::group([
        'prefix' => $data->alias,
        'namespace' => 'App\Http\Controllers\Admin',
        'middleware' => ['auth','CekRole:super,admin,keuangan']
    ], function () {
        // Route::get('/dashboard', function () {
        //     return view('admin.index');
        // })->name('dashboard.index');

        Route::resource('dashboard', 'DashboardController');
    });

    // Admin
    // URL ADMIN
    Route::group([
        // 'prefix' => 'admin',
        'prefix' => $data->alias.'/admin',
        'namespace' => 'App\Http\Controllers\Admin',
        'middleware' => ['auth','CekRole:super,admin']
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
        // 'prefix' => 'log',
        'prefix' => $data->alias.'/log',
        'namespace' => 'App\Http\Controllers\Log',
        'middleware' => ['auth','CekRole:super,admin']
    ], function () {
        // Route Log Data User
        Route::resource('log_user', 'Log_UserController');

        // Route Log Data User
        Route::resource('log_auth', 'Log_AuthController');
    });
}

// NON LANG ADMIN
Route::group([
    'prefix' => 'admin',
    'namespace' => 'App\Http\Controllers\Admin',
    'middleware' => ['auth','CekRole:super,admin']
], function () {
    // Cek Data
    Route::get('/data/cb/id/{id}', [UserController::class,'cekId'])->name('cek.id');
    Route::post('/data/cb/user/deactive', [UserController::class,'deactiveUser'])->name('deactive.user');
    Route::post('/data/cb/user/active', [UserController::class,'activeUser'])->name('active.user');
});

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



// Cek Log User
Route::group([
    'prefix' => 'log',
    'namespace' => 'App\Http\Controllers\Log',
    'middleware' => ['auth','CekRole:super,admin']
], function () {
    Route::get('/data/user/format/json/', [Log_UserController::class,'jsonLog'])->name('cek.logUser');
});


// User Keuangan
// URL API
Route::group([
    'prefix' => 'data_api',
    'namespace' => 'App\Http\Controllers\Api',
    'middleware' => ['auth','CekRole:super,admin,keuangan']
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

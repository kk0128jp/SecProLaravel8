<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
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
    return view('welcome');
});

# GET /home
Route::get('/home', [HomeController::class, 'getHome'])->name('home');

# GET /sqli
Route::get('/sqli', [HomeController::class, 'getSqli'])->name('sqli');
# POST /sqli
Route::post('/sqli', [HomeController::class, 'postSqli'])->name('post_sqli');

# GET /os-com-i
Route::get('/os-com-i', [HomeController::class, 'getOsComI'])->name('get_os_com_i');
# POST /os-com-i
Route::post('/os-com-i', [HomeController::class, 'postOsComI'])->name('post_os_com_i');

# GET /path-i
Route::get('/path-i', [HomeController::class, 'getPathI'])->name('get_path_i');
# POST /path_i
Route::post('/path-i', [HomeController::class, 'postPathI'])->name('post_path_i');

# GET /xss
Route::get('/xss', [HomeController::class, 'getXss'])->name('get_xss');
# POST /xss
Route::post('/xss', [HomeController::class, 'postXss'])->name('post_xss');
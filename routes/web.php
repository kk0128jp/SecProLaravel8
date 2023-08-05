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

// Route::get('/', function () {
//     return view('welcome');
// });

# GET /home
Route::get('/', [HomeController::class, 'getHome'])->name('home');

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
# GET /xss/unmeasured
Route::get('/xss/unmeasured', [HomeController::class, 'getUnmXss'])->name('get_unm_xss');
# POST /xss/unmeasured
Route::post('/xss/unmeasured', [HomeController::class, 'postXss'])->name('post_xss');
# GET /xss/remedied
Route::get('/xss/remedied', [HomeController::class, 'getRemXss'])->name('get_rem_xss');
# GET /xss/fake
Route::get('/xss/fake', [HomeController::class, 'getXssFake'])->name('get_xss_fake');

# GET /csrf/unmeasured/login
Route::get('/csrf/unmeasured/login', [HomeController::class, 'getCsrfLogin'])->name('get_csrf_login');
# POST /csrf/unmeasured/login
Route::post('/csrf/unmeasured/login', [HomeController::class, 'postCsrfLogin'])->name('post_csrf_login');
# GET /csrf/unmeasured/edit
Route::get('/csrf/unmeasured/edit', [HomeController::class, 'getCsrfEdit'])->name('get_csrf_edit');
# POST /csrf/unmeasured/edit
Route::post('/csrf/unmeasured/edit', [HomeController::class, 'postCsrfEdit'])->name('post_csrf_edit');
# GET /csrf/unmeasured/fake
Route::get('/csrf/unmeasured/fake', [HomeController::class, 'getCsrfFake'])->name('get_csrf_fake');

# POST /csrf/remedied/login
Route::post('/csrf/remedied/login', [HomeController::class, 'postCsrfRemLogin'])->name('post_csrf_rem_login');
# GET /csrf/remedied/edit
Route::get('/csrf/remedied/login', [HomeController::class, 'getCsrfRemEdit'])->name('get_csrf_rem_edit');
# POST /csrfremedied/edit
Route::post('/csrf/remedied/edit', [HomeController::class, 'postCsrfRemEdit'])->name('post_csrf_rem_edit');
# GET /csrf/remedied/edit
Route::get('/csrf/remedied/fake', [HomeController::class, 'getCsrfRemFake'])->name('get_csrf_rem_fake');

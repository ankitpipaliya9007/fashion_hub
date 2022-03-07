<?php

use App\Http\Controllers\frontend\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\frontend\AboutController;
use App\Http\Controllers\frontend\ContectusController;
use App\Http\Controllers\frontend\LoginController;
use App\Http\Controllers\frontend\PrivacyPolicyController;
use App\Http\Controllers\frontend\RegisterController;
use App\Http\Controllers\frontend\ServicesController;
use App\Http\Controllers\frontend\TermsConditionsController;

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

Route::get('/', [HomeController::class, 'main']);
Route::get('/about', [AboutController::class, 'main']);
Route::get('/contect_us', [ContectusController::class, 'main']);
Route::get('/login', [LoginController::class, 'main']);
Route::get('/logout', [LoginController::class, 'logout']);
Route::get('/register', [RegisterController::class, 'main']);
Route::get('/index', [HomeController::class, 'main']);
Route::get('/home', [HomeController::class, 'main']);
Route::get('/services', [ServicesController::class, 'main']);
Route::get('/privacy_policy', [PrivacyPolicyController::class, 'main']);
Route::get('/terms_conditions', [TermsConditionsController::class, 'main']);

Route::post('/register', [RegisterController::class, 'insert']);
Route::post('/login', [LoginController::class, 'check']);

Route::middleware(['auth:sanctum', 'verified'])->get('/index', function () {
    return view('index');
})->name('index');

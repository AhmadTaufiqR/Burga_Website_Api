<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

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

Route::get('/')->middleware('isRoute');
Route::get('login', [AuthController::class, 'view_login'])->middleware('isHome');
Route::post('login-user', [AuthController::class, 'login'])->middleware('isHome');
Route::get('home', [AuthController::class, 'home'])->middleware('isLogin');
Route::get('register-BurgaCorp', [AuthController::class, 'index'])->middleware('isHome');
Route::post('register-user', [AuthController::class, 'register'])->middleware('isHome');
Route::get('logout', [AuthController::class, 'logout']);

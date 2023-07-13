<?php

use App\Http\Controllers\loginController;
use App\Http\Controllers\ProductController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function (){
   return response()->json([
    'status' => false,
    'massage'=> 'silahkan daftar terlebih dahulu untuk mendapatkan token'
   ]);
})->name('login');

Route::group(['middleware' => 'auth:sanctum'], function () {
    Route::get('product', [ProductController::class, 'index']);
    Route::post('login-user', [loginController::class, 'login_user']);
    Route::post('login-kasir', [loginController::class, 'login_kasir']);
});

Route::post('register-kasir', [loginController::class, 'register_kasir']);
Route::post('register-user', [loginController::class, 'register_user']);

// Route::post('register-kasir', [AuthController::class, 'register']);
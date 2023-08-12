<?php

use App\Http\Controllers\DetailTransactionController;
use App\Http\Controllers\loginController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\TransactionController;
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
    
    Route::prefix('product')->group(function () {
        Route::get('list', [ProductController::class, 'index']);
        Route::post('store', [ProductController::class, 'store']);
        Route::post('update/{id}', [ProductController::class, 'update']);
        Route::delete('destroy/{id}', [ProductController::class, 'destroy']);
    });

    Route::prefix('transaction')->group(function (){
        Route::get('list', [TransactionController::class, 'index']);
        Route::post('store', [TransactionController::class, 'store']);
    });
    Route::prefix('detail-transaction')->group(function (){
        Route::get('list', [DetailTransactionController::class, 'index']);
        Route::post('store', [DetailTransactionController::class, 'store']);
    });

    Route::post('login-user', [loginController::class, 'login_user']);
    Route::post('login-kasir', [loginController::class, 'login_kasir']);
});

Route::post('register-kasir', [loginController::class, 'register_kasir']);
Route::post('register-user', [loginController::class, 'register_user']);

Route::get('/storage-link', function(){
    $target_folder = base_path().'/storage/app/public';
     $link_folder = $_SERVER['DOCUMENT_ROOT']."/storage";
     symlink($target_folder, $link_folder);
});

// Route::post('register-kasir', [AuthController::class, 'register']);
<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CategoryController;
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

Route::middleware('moaz')->group(function () {

    Route::prefix('category')->group(function () {
        Route::get('/', [CategoryController::class,'getAll']);
        Route::get('/getOne', [CategoryController::class,'getOne']);
        Route::get('/all-with-products', [CategoryController::class, 'getAllWithProducts']);
        Route::get('/all-where-updatedAt', [CategoryController::class, 'getAllWhereUpdatedAt']);
        Route::get('/all-with-count', [CategoryController::class, 'getAllWithCount']);
        Route::post('/create', [CategoryController::class,'create']);
        Route::post('/update', [CategoryController::class,'update']);
        Route::post('/delete', [CategoryController::class,'destroy']);
    });
    
    Route::prefix('product')->group(function () {
        Route::get('/', [ProductController::class,'getAll']);
        Route::get('/getOne', [ProductController::class,'getOne']);
        Route::post('/create', [ProductController::class,'create']);
        Route::post('/update', [ProductController::class,'update']);
        Route::post('/delete', [ProductController::class,'destroy']);
    });

    Route::post('login', [AuthController::class, 'login']);
    Route::post('register', [AuthController::class, 'register']);
    Route::post('logout', [AuthController::class, 'logout']);
});
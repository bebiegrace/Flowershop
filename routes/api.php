<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\AuthController;
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

Route::middleware(['auth:sanctum', 'abilities:ver'])->get('/user', function (Request $request) {
    return $request->user();
});


Route::post('/login', [AuthController::class, 'login']);

Route::middleware('auth:sanctum')->group(function () {
Route::get('products', [ProductController::class, 'allproduct']);
Route::post('products', [ProductController::class, 'storeproduct']);
Route::get('products/{id}', [ProductController::class, 'showproduct']);
Route::put('products/{id}', [ProductController::class, 'updateproduct']);
Route::delete('products/{id}', [ProductController::class, 'destroyproduct']);
});



  Route::middleware('auth:sanctum')->group(function () {
    Route::get('orders', [OrderController::class, 'allorder']);
    Route::post('orders', [OrderController::class, 'storeorder']);
    Route::get('orders/{id}', [OrderController::class, 'showorder']);
    Route::put('orders/{id}', [OrderController::class, 'updateorder']);
    Route::delete('orders/{id}', [OrderController::class, 'destroyorder']);
    });





    
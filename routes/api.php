<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
Use App\Http\Controllers\ProductController;
Use App\Http\Controllers\SalesController;

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

Route::get('products', [ProductController::class, 'listProducts']);
Route::delete('delete/{id}', [ProductController::class, 'deleteProduct']);
Route::post('create', [ProductController::class, 'createProduct']);
Route::put('update/{id}', [ProductController::class, 'updateProduct']);
Route::post('create/sale', [SalesController::class, 'createSale']);
Route::put('update/stock/{id}/{stock}', [ProductController::class, 'updateStock']);

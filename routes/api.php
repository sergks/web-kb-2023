<?php

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

Route::prefix('products')->group(function () {
    Route::get('top', [\App\Http\Controllers\ProductController::class, 'top']);
    Route::get('list', [\App\Http\Controllers\ProductController::class, 'list']);
    Route::get('info/{id}', [\App\Http\Controllers\ProductController::class, 'info']);
});

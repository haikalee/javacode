<?php

use App\Http\Controllers\MenusController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\VoucersController;
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

Route::get('/menus', [MenusController::class, 'index']);
Route::get('/voucers', [VoucersController::class, 'index']);
Route::get('/voucer/{id}', [VoucersController::class, 'detail']);
Route::post('/order', [OrderController::class, 'save']);
Route::get('/order/{id}', [OrderController::class, 'detail']);
Route::post('/order/cancel/{id}', [OrderController::class, 'cancel']);

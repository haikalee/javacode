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
Route::post('/vouchers', [VoucersController::class, 'index']);
Route::post('/order', [OrderController::class, 'save']);
Route::post('/order/cancel/{id}', [OrderController::class, 'cancel']);
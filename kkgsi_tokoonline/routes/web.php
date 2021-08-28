<?php

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

Route::get('/', function () {
    return view('welcome');
});

//bagian mastertemplate belajar
Route::get('master', [App\Http\Controllers\BelajarController::class, 'index']);
Route::get('arkan', [App\Http\Controllers\ArkanController::class, 'index']);
//ini adalah route web
Route::resource('categories', App\Http\Controllers\CategoriController::class);
Route::resource('sub-catagories', App\Http\Controllers\SubCategoryController::class);
Route::resource('coupon', App\Http\Controllers\CouponController::class);
Route::resource('product',  App\Http\Controllers\ProductController::class);
Route::resource('order', App\Http\Controllers\OrderController::class);
Route::resource('dashboard',  App\Http\Controllers\DashboardController::class);
Route::resource('transaksi',  App\Http\Controllers\TransactionController::class);


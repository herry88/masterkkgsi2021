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
// Ini Lagi Mencoba
// Route::get('/Belajar/{nama}', function ($nama) {
//     return 'Sedang Bersama ' .$nama;
// });
//
Route::get('master', [App\Http\Controllers\BelajarController::class, 'index']);

Route::resource('categories',App\Http\Controllers\CategoryController::class);
Route::resource('sub-categories', App\Http\Controllers\SubCategoryController::class);
Route::resource('coupon', App\Http\Controllers\CouponController::class);
Route::resource('dataCoupon', App\Http\Controllers\DataCouponController::class);
Route::resource('product', App\Http\Controllers\ProductController::class);
Route::resource('dataProduct', App\Http\Controllers\DataProductController::class);
Route::resource('order', App\Http\Controllers\OrderController::class);
Route::resource('transaction', App\Http\Controllers\TransactionController::class);

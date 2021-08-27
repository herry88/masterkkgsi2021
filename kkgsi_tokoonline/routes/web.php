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
<<<<<<< HEAD
Route::get('master', [App\Http\Controllers\BelajarController::class, 'index']);
Route::get('arkan', [App\Http\Controllers\ArkanController::class, 'index']);
//ini adalah route web
Route::resource('categories', App\Http\Controllers\CategoriController::class);
Route::resource('sub-catagories', App\Http\Controllers\SubCategoryController::class);
Route::resource('coupon', App\Http\Controllers\CouponController::class);
Route::resource('product',  App\Http\Controllers\ProductController::class);
Route::resource('order', App\Http\Controllers\OrderController::class);
Route::resource('transaksi',  App\Http\Controllers\TransactionController::class);
Route::resource('dashboard',  App\Http\Controllers\DashboardController::class);

=======
Route::get('master',[App\Http\Controllers\BelajarController::class, 'index']);

Route::resource('categories',App\Http\Controllers\CategoryController::class);
Route::resource('sub-categories', App\Http\Controllers\SubCategoryController::class);
>>>>>>> 5e72877f25f3f91bf5c84a025b72ae3f38c3be53

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
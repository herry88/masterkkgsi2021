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
//
// Route::get('/belajar/{nama}', function ($nama) {
//     return 'sedangbelajar '.$nama;
// });

// Route::get('/user/{id}', function ($id) {
//     return 'User '.$id;
// });
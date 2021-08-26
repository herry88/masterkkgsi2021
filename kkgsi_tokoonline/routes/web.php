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
<<<<<<< HEAD
//
// Route::get('/belajar/{nama}', function ($nama) {
//     return 'sedangbelajar '.$nama;
// });

// Route::get('/user/{id}', function ($id) {
//     return 'User '.$id;
// });
=======

//bagian mastertemplate belajar
Route::get('master',[App\Http\Controllers\BelajarController::class, 'index']);
>>>>>>> 6a633921f02aa1d6066118c9d2a80c26217b0dde

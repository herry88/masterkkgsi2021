<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Route::get('master', [App\Http\Controllers\BelajarController::class, 'index']);
Route::resource('', UserController::class);
Route::resource('', UserController::class);
Route::resource('', UserController::class);
Route::resource('', UserController::class);
Route::resource('', UserController::class);
Route::resource('', UserController::class);

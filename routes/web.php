<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/welcome2', [App\Http\Controllers\HomeController::class, 'index2'])->name('welcome2');

Auth::routes();

Route::get('/mm', [App\Http\Controllers\HomeController::class, 'index3'])->name('mm');

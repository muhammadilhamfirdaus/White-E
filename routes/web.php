<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MaterialController;

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

Route::get('/create_material', [App\Http\Controllers\HomeController::class, 'index3'])->name('create_material');

Auth::routes();

Route::get('/inventory', [App\Http\Controllers\HomeController::class, 'index4'])->name('inventory');

Auth::routes();

Route::get('/inventory-table', [App\Http\Controllers\HomeController::class, 'table1'])->name('inventory-table');


Route::post('/materials', [MaterialController::class, 'store'])->name('materials.store');



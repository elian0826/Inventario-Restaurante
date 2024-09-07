<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;


Route::middleware("guest")->group(function () {
    Route::get('/',[AuthController::class, 'index'])->name('login');
    Route::get('/registro',[AuthController::class, 'registro'])->name('registro');
    Route::post('/registrar',[AuthController::class,'registrar'])->name('registrar');
    Route::post('/logear',[AuthController::class,'logear'])->name('logear');
});

Route::middleware("auth")->group(function () {
    Route::get('/home',[AuthController::class,'home'])->name('home');
    Route::get('/logout',[AuthController::class,'logout'])->name('logout');
});

//CRUD DE PRODUCTO
route::resource('products', ProductController::class);
Route::get('/home',[AuthController::class,'home'])->name('home');
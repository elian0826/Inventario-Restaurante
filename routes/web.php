<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;

Route::middleware('guest')->group(function () {
    Route::get('/', [AuthController::class, 'index'])->name('login');
    Route::get('/registro', [AuthController::class, 'registro'])->name('registro');
    Route::post('/registrar', [AuthController::class, 'registrar'])->name('registrar');
    Route::post('/logear', [AuthController::class, 'logear'])->name('logear');
});

Route::middleware('auth')->group(function () {
    Route::get('/home', [AdminController::class, 'home'])->name('home');
    Route::get('/mesas', [AdminController::class, 'mesas'])->name('mesas');
    Route::get('/pedidos', [AdminController::class, 'pedidos'])->name('pedidos');
    Route::get('/facturas', [AdminController::class, 'facturas'])->name('facturas');
    Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
});


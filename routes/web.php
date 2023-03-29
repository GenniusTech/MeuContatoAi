<?php

use App\Http\Controllers\DashController;
use App\Http\Controllers\InicialController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use Illuminate\Support\Facades\Route;


Route::get('/', [InicialController::class, 'index'])->name('index');

Route::get('/login', [LoginController::class, 'login'])->name('login');
Route::post('/login', [LoginController::class, 'login_action'])->name('login_action');

Route::get('/registrer', [RegisterController::class, 'register'])->name('register');
Route::post('/registrer', [RegisterController::class, 'register_action'])->name('register_action');

Route::middleware(['auth'])->group(function () {
    Route::get('/painel', [DashController::class, 'dashboard'])->name('dashboard');
    Route::get('/create', [DashController::class, 'create'])->name('create');
    Route::get('/app', [DashController::class, 'app'])->name('app');
    Route::get('/configurações', [DashController::class, 'config'])->name('config');
}); 
<?php

use App\Http\Controllers\ConfigController;
use App\Http\Controllers\CreateLinkController;
use App\Http\Controllers\DashController;
use App\Http\Controllers\InicialController;
use App\Http\Controllers\LinkController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MyAppController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\FinanceiroController;
use Illuminate\Support\Facades\Route;


Route::get('/', [InicialController::class, 'index'])->name('index');

Route::get('/login', [LoginController::class, 'login'])->name('login');
Route::post('/login', [LoginController::class, 'login_action'])->name('login_action');

Route::get('/registrer', [RegisterController::class, 'register'])->name('register');
Route::post('/registrer', [RegisterController::class, 'register_action'])->name('register_action');

Route::middleware(['auth'])->group(function () {

    Route::get('/painel', [DashController::class, 'dashboard'])->name('dashboard');

    Route::get('/create', [CreateLinkController::class, 'create'])->name('create');
    Route::post('/createLink', [CreateLinkController::class, 'createLink'])->name('createLink');

    Route::get('/app', [MyAppController::class, 'app'])->name('app');
    Route::get('/editLink/{id}', [MyAppController::class, 'editLink'])->name('editLink');
    Route::get('/editar-link/{id}',[ MyAppController::class,'editarLink'])->name('editarLink');

    Route::get('/configurações', [ConfigController::class, 'config'])->name('config');
    Route::put('/update', [ConfigController::class, 'update'])->name('update');

    //Financeiro
    Route::get('/fatura', [FinanceiroController::class, 'index'])->name('fatura');

    Route::get('/logout', [DashController::class, 'logout'])->name('logout');
});
Route::get('/{any}', [LinkController::class, 'handle'])->where('any', '.*');

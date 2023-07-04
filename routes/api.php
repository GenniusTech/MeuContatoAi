<?php

use App\Http\Controllers\ApiConnectionController;
use App\Http\Controllers\SuporteController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;



Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('addConnection', [ApiConnectionController::class, 'addConnection']);
Route::get('listConnection/{id}', [ApiConnectionController::class, 'listConnection']);
Route::get('delConnection/{id}', [ApiConnectionController::class, 'delConnection']);
Route::post('delLink/{id}', [ApiConnectionController::class,'excluirLink'])->name('delLink');

Route::post('addSuporte', [SuporteController::class, 'addSuporte']);
Route::post('upSuporte/{id}', [SuporteController::class, 'upSuporte']);

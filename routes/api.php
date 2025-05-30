<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\NoticiaController;
use App\Http\Controllers\CategoriaController;

Route::get('/noticias', [NoticiaController::class, 'index']);
Route::get('/noticias/{id}', [NoticiaController::class, 'show'])->where('id', '[0-9]+');
Route::post('/noticias', [NoticiaController::class, 'store']);
Route::get('/home', [PublicController::class, 'home']);
Route::get('/sobre', [PublicController::class, 'sobre']);
Route::post('/contato', [PublicController::class, 'contato']);
Route::get('/noticias/destaques', [NoticiaController::class, 'destaques']);
Route::get('/categorias', [CategoriaController::class, 'index']);
Route::get('/categorias/{id}', [CategoriaController::class, 'noticias']);
Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

<?php

use Illuminate\Support\Facades\Route;

// Importanção da classe controler
use App\Http\Controllers\CustomAuthController;
use App\Http\Controllers\PaginasController;

Route::get('/login', [CustomAuthController::class, 'login']);
Route::get('/registration', [CustomAuthController::class, 'registration']);
Route::post('/register-user', [CustomAuthController::class, 'registerUser'])->name('register-user');
Route::get('/login-user', [CustomAuthController::class, 'loginUser'])->name('login-user');



Route::get('/', [PaginasController::class, 'index']);
Route::get('/sobre', [PaginasController::class, 'sobre']);
Route::get('/postagem', [PaginasController::class, 'postagem']);
Route::get('/manchete', [PaginasController::class, 'manchete']);
Route::get('/postagens/{id?}', [PaginasController::class, 'postagens']);
Route::get('/artigos/{id?}', [PaginasController::class, 'artigosId']);
Route::get('/artigosTotal', [PaginasController::class, 'artigosTotal']);
Route::get('/podcasts', [PaginasController::class, 'podcasts']);
Route::get('/galeria', [PaginasController::class, 'galeria']);
Route::post('/posts', [PaginasController::class, 'store']);
Route::post('/posts_art', [PaginasController::class, 'store_artigo']);
Route::post('/posts_foto', [PaginasController::class, 'store_foto']);
Route::post('/posts_podcasts', [PaginasController::class, 'store_podcasts']);

/*Route::get('/', function () {
    return view('sobre');
});*/

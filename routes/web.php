<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;

// Rute untuk tampilan utama
Route::get('/', function () {
    return view('login.index');
});

// Rute untuk CRUD buku
Route::resource('books', BookController::class);

Route::get('/login', [LoginController::class, 'index'])->name('login') ->middleware('guest');

Route::post('/login', [LoginController::class, 'authenticate']);

Route::get('/register', [RegisterController::class, 'index'])
->middleware('guest');

Route::post('/register', [RegisterController::class, 'store'])
->middleware('guest');

Route::post('/logout', [LoginController::class, 'logout']);

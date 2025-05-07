<?php

use App\Http\Controllers\BookController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/produk', function () {
    return view('produk.index');
});

Route::get('/produk/{id}', function ($id) {
    return view('produk.index', ['id' => $id]);
});


Route::get('/books', [BookController::class, 'index']);
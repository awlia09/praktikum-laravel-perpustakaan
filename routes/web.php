<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;

Route::get('/', function () {
    return redirect()->route('books.index');
});

// Resource Route untuk CRUD Buku
Route::resource('books', BookController::class);
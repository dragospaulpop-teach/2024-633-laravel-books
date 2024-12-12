<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

use App\Http\Controllers\BookController;

// Route::middleware(['auth'])->group(function () {
    Route::resource('books', BookController::class);
// });


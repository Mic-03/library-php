<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

//route resource for products
Route::resource('/books', \App\Http\Controllers\BookController::class);
Route::resource('/cds', \App\Http\Controllers\CDController::class);
Route::resource('/newspapers', NewspaperController::class);
Route::resource('/fyps', FYPController::class);
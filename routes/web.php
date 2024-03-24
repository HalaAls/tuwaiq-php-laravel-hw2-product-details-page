<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/homework', function () {
//     return view('layouts.productCard');
// });


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/homework', [App\Http\Controllers\ProductController::class, 'getProduct'])->name('layouts.productCard');

<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('/articles', function () {
    return view('articles');
})->middleware(['auth'])->name('articles');

require __DIR__.'/auth.php';

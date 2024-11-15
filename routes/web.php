<?php

use Illuminate\Support\Facades\Route;

Route::get( '/', [\App\Http\Controllers\PostController::class, 'index'])->name('home');
Route::get( '/article', [\App\Http\Controllers\PostController::class, 'article'])->name('article');

<?php

use Illuminate\Support\Facades\Route;

Route::get( '/', [\App\Http\Controllers\PostController::class, 'index'])->name('home');
Route::get( '/article/{slug}', [\App\Http\Controllers\PostController::class, 'articleapp'])->name('articleapp');
Route::get( '/article', [\App\Http\Controllers\PostController::class, 'article'])->name('article');
Route::get('/facilities', [\App\Http\Controllers\PostController::class, 'showFacilities'])->name('facilities');


Route::get('/visi-misi', [\App\Http\Controllers\PostController::class, 'visiMisi'])->name('visimisi');





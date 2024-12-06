<?php

use Illuminate\Support\Facades\Route;

Route::get( '/', [\App\Http\Controllers\PostController::class, 'index'])->name('home');
Route::get( '/article/{slug}', [\App\Http\Controllers\PostController::class, 'articleapp'])->name('articleapp');
Route::get( '/article', [\App\Http\Controllers\PostController::class, 'article'])->name('article');
Route::get( '/alumni/{year}', [\App\Http\Controllers\PostController::class, 'alumniapp'])->name('alumniapp');
Route::get( '/alumni', [\App\Http\Controllers\PostController::class, 'alumni'])->name('alumni');
Route::get('/fasilitas', [\App\Http\Controllers\PostController::class, 'showFacilities'])->name('fasilitas');
Route::get('/visi-misi', [\App\Http\Controllers\PostController::class, 'visiMisi'])->name('visimisi');
Route::get('/contact', [\App\Http\Controllers\PostController::class, 'contact'])->name('contact');
Route::get('/profile', [\App\Http\Controllers\PostController::class, 'profile'])->name('profile');





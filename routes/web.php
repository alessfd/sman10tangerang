<?php

use Illuminate\Support\Facades\Route;

Route::get( '/', [\App\Http\Controllers\IndexController::class, 'index'])->name('home');
Route::get( '/article/{date}/{slug}', [\App\Http\Controllers\PostController::class, 'articleapp'])->name('articleapp');
Route::get( '/article', [\App\Http\Controllers\PostController::class, 'article'])->name('article');
Route::get( '/alumni/{year}', [\App\Http\Controllers\AlumniController::class, 'alumniapp'])->name('alumniapp');
Route::get( '/alumni', [\App\Http\Controllers\AlumniController::class, 'alumni'])->name('alumni');
Route::get( '/facilities', [\App\Http\Controllers\ProfileController::class, 'showFacilities'])->name('facilities');

Route::get('/visi-misi', [\App\Http\Controllers\ProfileController::class, 'visiMisi'])->name('visimisi');
Route::get('/contact', [\App\Http\Controllers\ProfileController::class, 'contact'])->name('contact');
Route::get('/profile', [\App\Http\Controllers\ProfileController::class, 'profile'])->name('profile');





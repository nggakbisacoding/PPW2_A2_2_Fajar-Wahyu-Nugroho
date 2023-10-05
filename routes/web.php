<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

Route::resource('/', PostController::class);

Route::get('/create', [PostController::class, 'create'])->name('posts.create');
Route::post('/create', [PostController::class, 'create'])->name('posts.post');
Route::post('/store', [PostController::class, 'store'])->name('posts.store');

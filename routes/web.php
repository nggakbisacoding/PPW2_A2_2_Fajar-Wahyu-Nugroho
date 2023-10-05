<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

Route::resource('/', PostController::class);

Route::get('/create', [PostController::class, 'create'])->name('posts.create');
Route::post('/create', [PostController::class, 'create'])->name('posts.post');
Route::post('/store', [PostController::class, 'store'])->name('posts.store');
Route::get('/edit/{id}', [PostController::class, 'edit'])->name('posts.edit');
Route::post('/update/{id}', [PostController::class, 'update'])->name('posts.update');
Route::get('/delete/{id}', [PostController::class, 'delete'])->name('posts.delete');
Route::get('/show/{id}', [PostController::class, 'show'])->name('posts.show');
Route::get('/search', [PostController::class, 'search'])->name('posts.search');
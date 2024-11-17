<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PostController::class,'home'])->name('home');

Route::get('/about', [PostController::class,'about'])->name('about');

Route::get('/posts', [PostController::class,'posts'])->name('posts');

Route::get('/posts/{post}', [PostController::class,'post'])->name('post');

Route::get('/slug/{name}', [PostController::class,'slug'])->name('slug');









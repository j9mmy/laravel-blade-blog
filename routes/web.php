<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

Route::post('/posts/{post}', [PostController::class, 'update']);
Route::get('/posts/{post}/edit', [PostController::class, 'edit']);

Route::post('/create', [PostController::class, 'store']);
Route::get('/create', [PostController::class, 'create']);

Route::get('/', [PostController::class, 'posts']);

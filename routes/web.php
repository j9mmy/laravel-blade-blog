<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

Route::delete('/posts/{postId}', [PostController::class, 'delete']);

Route::post('/posts/{postId}', [PostController::class, 'update']);
Route::get('/posts/{postId}/edit', [PostController::class, 'edit']);

Route::post('/create', [PostController::class, 'store']);
Route::get('/create', [PostController::class, 'create']);

Route::get('/posts/{postId}', [PostController::class, 'show']);
Route::get('/', [PostController::class, 'posts']);

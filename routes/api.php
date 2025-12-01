<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\PostApiController;

Route::get('/posts', [PostApiController::class, 'index']);
Route::get('/posts/{post}', [PostApiController::class, 'show']);
Route::post('/posts', [PostApiController::class, 'store']);
Route::put('/posts/{post}', [PostApiController::class, 'update']);
Route::delete('/posts/{post}', [PostApiController::class, 'destroy']);

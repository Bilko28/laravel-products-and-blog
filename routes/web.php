<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::get('/', [ProductController::class, 'home']);

Route::get('/product/add', [ProductController::class, 'form']);
Route::post('/product/add', [ProductController::class, 'create']);
Route::get('/product/edit/{id}', [ProductController::class, 'editForm']);
Route::put('/product/edit/{id}', [ProductController::class, 'edit']);
Route::get('/product/{id}', [ProductController::class, 'single']);
Route::delete('/product/{id}', [ProductController::class, 'delete']);

Route::get('/blog', [PostController::class, 'blog']);
Route::get('/blog/{id}', [PostController::class, 'single']);

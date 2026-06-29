<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

// Register

// Login
Route::post('/login', [\App\Http\Controllers\APILoginController::class, 'login']);

Route::get('/blogs', [\App\Http\Controllers\APIBlogController::class, 'index'])->middleware('auth:sanctum');
Route::get('/blogs/{blog}', [\App\Http\Controllers\APIBlogController::class, 'show']);
Route::get('/blogs/{blog}/delete', [\App\Http\Controllers\APIBlogController::class, 'delete']);
// Blogs Store
// Blogs Update

// Visitor Index
// Visitor Show
// Visitor Delete
// Blogs Store
// Blogs Update
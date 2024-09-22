<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\WelcomeController;
use Illuminate\Support\Facades\Route;

//Blog Index
Route::get('/',[WelcomeController::class, 'index'])->name('welcome');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//Post
Route::post('/posts/store',[PostController::class, 'store'])->name('post.store');
Route::get('/posts/{postId}/show',[PostController::class, 'show'])->name('posts.show');
Route::get('/posts/all',[HomeController::class, 'allPosts'])->name('posts.all');
Route::get('/posts/{postId}/edit',[PostController::class, 'edit'])->name('posts.edit');
Route::post('/posts/{postId}/update',[PostController::class, 'update'])->name('posts.update');
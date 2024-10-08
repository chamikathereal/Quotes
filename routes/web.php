<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\WelcomeController;
use App\Http\Middleware\IsAdmin;
use Illuminate\Support\Facades\Route;

//Blog Index
Route::get('/', [WelcomeController::class, 'index'])->name('welcome');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//Post
Route::get('/posts/{postId}/show', [PostController::class, 'show'])->name('posts.show');

Route::group(['middleware' => ['auth']], function () {
    Route::post('/posts/store', [PostController::class, 'store'])->name('post.store');
    Route::get('/posts/all', [HomeController::class, 'allPosts'])->name('posts.all');
    Route::get('/posts/{postId}/edit', [PostController::class, 'edit'])->name('posts.edit');
    Route::post('/posts/{postId}/update', [PostController::class, 'update'])->name('posts.update');
    Route::get('/posts/{postId}/delete', [PostController::class, 'delete'])->name('posts.delete');
});

//Admin Routes
// Route::group(['middleware' => ['admin','auth']], function () {
//     Route::get('/admin/dashboard', [DashboardController::class, 'index'])->middleware(IsAdmin::class)->name('admin.dashboard');
// });

//Admin Routes with middleware
Route::group(['middleware' => ['admin'], 'prefix' => 'admin', 'as' => 'admin.'], function () {
    Route::get('dashboard', [DashboardController::class, 'index'])->middleware(IsAdmin::class)->name('dashboard');
});

//Route::get('/admin/dashboard', [DashboardController::class, 'index'])->middleware('admin')->name('admin.dashboard');


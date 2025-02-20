<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FAQController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/profile', [ProfileController::class, 'index'])->name('profile');
Route::get('/faq', [FAQController::class, 'index'])->name('faq');
Route::get('/blogs', [PostController::class, 'index'])->name('blogs');
Route::get('/blogs/posts/experience', [PostController::class, 'experience'])->name('blogs.posts.experience');
Route::get('/blogs/posts/feedback', [PostController::class, 'feedback'])->name('blogs.posts.feedback');
Route::get('/blogs/posts/ict-field', [PostController::class, 'ictfield'])->name('blogs.posts.ict-field');
Route::get('/blogs/posts/index', [PostController::class, 'index'])->name('blogs.posts.index');
Route::get('/blogs/posts/personal-swot', [PostController::class, 'personalswot'])->name('blogs.posts.personal-swot');
Route::get('/blogs/posts/study-choice', [PostController::class, 'studychoice'])->name('blogs.posts.study-choice');
// Create a blog post
Route::get('/blogs/posts/create', [PostController::class, 'index'])->name('blogs.posts.create');
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
Route::post('/blogs/posts/store', [PostController::class, 'store'])->name('blogs.posts.store');
// Read a single blog post
Route::get('/blogs/posts/{id}', [PostController::class, 'show'])->name('blogs.posts.show');
// Edit a blog post
Route::get('/blogs/posts/{id}/edit', [PostController::class, 'edit'])->name('blogs.posts.edit');
Route::put('/blogs/posts/{id}', [PostController::class, 'update'])->name('blogs.posts.update');
// Delete a blog post
Route::delete('/blogs/posts/{id}', [PostController::class, 'destroy'])->name('blogs.posts.destroy');

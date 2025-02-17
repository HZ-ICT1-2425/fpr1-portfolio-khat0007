<?php

use App\Http\Controllers\BlogsController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FAQController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/profile', [ProfileController::class, 'index'])->name('profile');
Route::get('/faq', [FAQController::class, 'index'])->name('faq');
Route::get('/blogs', [BlogsController::class, 'index'])->name('blogs');
Route::get('/blogs/posts/experience', [BlogsController::class, 'experience'])->name('blogs.posts.experience');
Route::get('/blogs/posts/feedback', [BlogsController::class, 'feedback'])->name('blogs.posts.feedback');
Route::get('/blogs/posts/ict-field', [BlogsController::class, 'ictfield'])->name('blogs.posts.ict-field');
Route::get('/blogs/posts/index', [BlogsController::class, 'index'])->name('blogs.posts.index');
Route::get('/blogs/posts/personal-swot', [BlogsController::class, 'personalswot'])->name('blogs.posts.personal-swot');
Route::get('/blogs/posts/study-choice', [BlogsController::class, 'studychoice'])->name('blogs.posts.study-choice');
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

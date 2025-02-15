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
Route::get('/blogs/{slug}', [BlogsController::class, 'show'])->name('blogs.show');
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

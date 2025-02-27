<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FAQController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/profile', [ProfileController::class, 'index'])->name('profile');
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

/**
 * route all about faqs
 */
Route::get('/faq/index', [FAQController::class, 'index'])->name('faq.index');
Route::get('/faq/create', [FaqController::class, 'create'])->name('faq.create');
Route::post('/faq/store', [FaqController::class, 'store'])->name('faq.store');
Route::get('/faq/{faq}/edit', [FaqController::class, 'edit'])->name('faq.edit');
Route::put('/faq/{faq}', [FaqController::class, 'update'])->name('faq.update');
Route::delete('/faq/{faq}', [FaqController::class, 'destroy'])->name('faq.destroy');

/**
 * route related to all of my post pages
 */
Route::get('/blog', [PostController::class, 'index'])->name('posts.index');
Route::get('/blog/create', [PostController::class, 'create'])->name('posts.create');
Route::get('/blog/{post}/edit', [PostController::class, 'edit'])->name('posts.edit');
Route::delete('/blog/{post}', [PostController::class, 'destroy'])->name('posts.destroy');
Route::put('/posts/{post}', [PostController::class, 'update'])->name('posts.update');
Route::get('blog/{slug}', [PostController::class, 'show'])->name('posts.show');
Route::post('/blog', [PostController::class, 'store'])->name('posts.store');

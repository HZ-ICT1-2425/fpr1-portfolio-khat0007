<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        View::composer('*', function ($view) {
            $navItems = [
                ['route' => 'home', 'title' => 'Home'],
                ['route' => 'profile', 'title' => 'Profile'],
                ['route' => 'blogs', 'title' => 'Blogs'],
                ['route' => 'faq', 'title' => 'FAQ'],
                ['route' => 'dashboard', 'title' => 'Dashboard'],
            ];
            $view->with('navItems', $navItems);
        });
    }
}

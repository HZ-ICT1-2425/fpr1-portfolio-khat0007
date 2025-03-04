<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;

class DashboardController extends Controller
{
    /**
     * @return View - the dashboard.blade.php
     */
    public function index(): View
    {
        return view('dashboard');
    }
}

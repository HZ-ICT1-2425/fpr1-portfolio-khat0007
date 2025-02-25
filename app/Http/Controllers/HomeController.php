<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;

class HomeController extends Controller
{
    /**
     * @return View - the index.blade.php
     */
    public function index(): View
    {
        return view('welcome');
    }
}

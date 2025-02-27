<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;

class ProfileController extends Controller
{
    /**
     * @return View - the profile.blade.php
     */
    public function index(): View
    {
        return view('profile');
    }
}

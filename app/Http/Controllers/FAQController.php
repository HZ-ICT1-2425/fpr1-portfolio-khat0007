<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;

class FAQController extends Controller
{
    /**
     * @return View - the faq.blade.php
     */
    public function index(): View
    {
        return view('faq');
    }
}

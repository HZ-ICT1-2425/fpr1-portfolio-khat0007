<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;

class BlogsController extends Controller
{
    public function index()
    {
        return view('blogs.posts.index');
    }

    /**
     * @return \Illuminate\Contracts\View\Factory
     * |\Illuminate\Contracts\View\View|
     * \Illuminate\Foundation\Application
     */
    public function ictField()
    {
        return view('blogs.posts.ict-field');
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|
     * \Illuminate\Contracts\View\View|
     * \Illuminate\Foundation\Application
     */
    public function personalSwot()
    {
        return view('blogs.posts.personal-swot');
    }

    public function studyChoice()
    {
        return view('blogs.posts.study-choice');
    }
    public function feedback()
    {
        return view('blogs.posts.feedback');
    }

    public function experience()
    {
        return view('blogs.posts.experience');
    }
}

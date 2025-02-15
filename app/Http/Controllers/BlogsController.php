<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogsController extends Controller
{

    private $blogs = [
        [
            'title' => 'Study Choice',
            'slug' => 'study-choice',
            'content' => 'The increasing role of technology...',
            'image' => 'images/study-choice.jpg'
        ],
        [
            'title' => 'My Programming Experience',
            'slug' => 'programming-experience',
            'content' => 'I have some programming experience, primarily in C++...',
            'image' => 'images/my-programing-exp.jpg'
        ],
        [
            'title' => 'The Field of ICT',
            'slug' => 'field-of-ict',
            'content' => 'The Information and Communication Technology (ICT) field...',
            'image' => 'images/field-of-ICT.jpg'
        ]
    ];
    public function index()
    {
        return view('blogs', ['blogs' => $this->blogs]);
    }
    public function show($slug)
    {

        $blog = collect($this->blogs)->firstWhere('slug', $slug);

        if (!$blog) {
            abort(404);
        }

        return view('blog-details', ['blog' => $blog]);
    }
}

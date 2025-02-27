<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\View\View;

class PostController extends Controller
{
    /**
     * @return View - the posts.index.blade.php
     */
    public function index(): View
    {
        return view('posts.index', [
        'posts' => Post::all()

        ]);
    }

    /**
     * @param $slug
     * @return View - the posts.show.blade.php
     */
    public function show($slug): View
    {
        $post = Post::where('slug', $slug)->firstOrFail();
        return view('posts.show', ['post' => $post]);
    }

    /**
     * @return View - the posts.create.blade.php
     */
    public function create(): View
    {
        return view('posts.create');
    }

    /**
     * @param Request $request
     * @return RedirectResponse
     */
    public function store(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'title' => 'required',
            'slug' => 'required',
            'body' => 'required',
        ]);

        $post = Post::create($validated);
        return redirect()->route('posts.index');
    }

    /**
     * @param Post $post
     * @return View - the posts.edit.blade.php
     */
    public function edit(Post $post): View
    {
        return view('posts.edit', ['post' => $post]);
    }

    /**
     * @param Request $request
     * @param Post $post
     * @return RedirectResponse
     */
    public function update(Request $request, Post $post): RedirectResponse
    {
        $validated = $request->validate([
            'title' => 'required',
            'slug' => 'required',
            'body' => 'required',
        ]);

        $post->update($validated);
        return redirect()->route('posts.show', ['slug' => $post->slug]);
    }

    /**
     * @param Post $post
     * @return RedirectResponse
     */
    public function destroy(Post $post): RedirectResponse
    {
        $post->delete();
        return redirect()->route('posts.index');
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use PhpParser\Comment;
use Illuminate\Contracts\View\View;

/**
 * @method static orderBy(string $string, string $string1)
 * @method static create(array $validated)
 * @method static where(string $string, $slug)
 */
class Post extends Model
{
    use HasFactory;

    /**
     * @return View - the blog.index view
     */
    public function index(): View
    {
        $posts = Post::orderBy('created_at', 'desc')->get(); // Fetch posts in descending order
        return view('blog.index', compact('posts'));
    }
    protected $fillable = ['title', 'slug', 'body'];

    /**
     * @return HasMany
     */
    public function comments(): HasMany
    {
        return $this->hasMany(comment::class);
    }
}

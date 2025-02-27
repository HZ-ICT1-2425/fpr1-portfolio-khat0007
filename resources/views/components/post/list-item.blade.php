<li><a class="post-link">{{ $post->title }}</a></li>
<p3>
    {!! Str::limit($post->body, 200) !!}
    <a href="{{ route('posts.show', $post->slug) }}">

        <br> <button style="background-color: darkgreen; color: white; padding: 8px 15px; border: none; border-radius: 5px; cursor: pointer; font-size: 14px;"> Read more </button></a>
</p3>

<x-layout.layout>
    <div class="container-show">
        <!-- Image on the Left -->
        <img src="{{ asset('images/blog-posts.jpg') }}" width="600" height="600" alt="Blog Post Image">

        <!-- Content on the Right -->
        <div class="content">
            <h1 class="title is-8">{{ $post->title }}</h1>

            <!-- Buttons -->
            <div class="edit-page-buttons">
                <a href="{{ route('posts.edit', ['post' => $post->id]) }}" class="edit-button">Edit Post</a>

                <form action="{{ route('posts.destroy', $post->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="delete-button">Delete Post</button>
                </form>
            </div>

            <h2 class="subtitle is-6 is-italic">
                {!! $post->excerpt !!}
            </h2>
            <p>
                {!! $post->body !!}
            </p>

            <a href="{{ route('posts.index') }}">
                <button id="back-button-swot" type="button">BACK</button>
            </a>
        </div>
    </div>
</x-layout.layout>

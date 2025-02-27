<x-layout.layout>
    <div class="container">
        <h1 class="title is-4">Edit Blog Post</h1>
        <br>
        <form action="{{ route('posts.update', $post) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="field">
                <label class="label">Title</label>
                <div class="control">
                    <input class="input" type="text" name="title" value="{{ old('title', $post->title) }}">
                </div>
            </div>

            <div class="field">
                <label class="label">Slug</label>
                <div class="control">
                    <input class="input" type="text" name="slug" value="{{ old('slug', $post->slug) }}">
                </div>
            </div>

            <div class="field">
                <label class="label">Post</label>
                <div class="control">
                    <textarea class="textarea" name="body" rows="20" cols="150">{{ old('body', $post->body) }}</textarea>
                </div>
            </div>

            <div class="field is-grouped">
                <div class="control">
                    <button type="submit" class="button is-primary">Update</button>
                </div>
                <div class="control">
                    <a href="{{ route('posts.index') }}" class="button is-light">Cancel</a>
                </div>
            </div>
        </form>
    </div>
</x-layout.layout>


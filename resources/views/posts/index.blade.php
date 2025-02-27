<x-layout.layout>
    <section class="section">
        <div class="container">
    <h1 class="title is-4">Blog Posts</h1>
            <div class="post-page-button">
                <!-- Button aligned to the right -->
                <div class="has-text-right">
                    <a href="{{ route('posts.create') }}" class="create-button">Create New Post</a>
                </div>
                <br>

            </div>

            <p3 class="subtitle is-6 is-italic">
                Welcome to my blog page! Here, you'll find some of my posts related to studying. If you're in the ICT field,
                I've also mentioned potential career paths you can pursue after completing your studies. Additionally, I've
                shared my first feedback and more.
            </p3>

    <ul>
        @foreach($posts as $post)
            <x-post.list-item :post="$post"></x-post.list-item>
            @endforeach
    </ul>

        </div>
    </section>
    </x-layout.layout>

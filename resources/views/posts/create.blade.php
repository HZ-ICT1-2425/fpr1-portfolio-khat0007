<x-layout.layout>
    <div class="container">
            <h1 class="title is-4">Create a New Blog Post</h1>
        <br>
        <h1 class="subtitle is-6 is-italic">
            Please fill out all the form fields and click on 'submit'
        </h1>
        <form action="{{route ('posts.store')}}" method="POST">
            @csrf
{{--            @method('PUT')--}}
            <div class="field">
                <label class="label">Title</label>
                <div class="control">
                    <input class="input" type="text" name="title" placeholder="Enter post title" required>
                </div>
                </div>
            <div class="field">
                <label class="label">Slug</label>
                <div class="control">
                    <input class="input" type="text" name="slug" placeholder="Enter post slug" required>
                </div>
            </div>
            <div class="column">
            <div class="field">
                <label class="label">Post</label>
                <div class="control">
                    <textarea rows="20" cols="150" class="textarea is-" name="body" placeholder="Enter the blog post content"  required></textarea>
            </div>
            </div>
            </div>
            <div class="field is-grouped">
                <div class="control">
                    <button type="submit" class="button is-primary">Submit</button>
                </div>
                <div class="control">
                    <a href="{{ route('posts.index') }}" class="button is-light">Cancel</a>
                </div>
                <div class="control">
                    <button type="reset" class="button is-warning">Reset</button>
                </div>
            </div>
        </form>
    </div>
</x-layout.layout>

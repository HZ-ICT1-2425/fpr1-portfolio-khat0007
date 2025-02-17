<x-layout.layout>

@section('content')
    <h1>All Blog Posts</h1>
    <ul>
        <li><a href="{{ route('blogs.posts.ict-field') }}">The Field Of ICT</a></li>
        <li><a href="{{ route('blogs.posts.experience') }}">Experience</a></li>
        <li><a href="{{ route('blogs.posts.feedback') }}">Feedback</a></li>
        <li><a href="{{ route('blogs.posts.personal-swot') }}">Personal SWOT</a></li>
        <li><a href="{{ route('blogs.posts.study-choice') }}">Study Choice</a></li>
    </ul>
@endsection
</x-layout.layout>

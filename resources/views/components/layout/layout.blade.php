    <!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'My Portfolio')</title>
    @vite(['resources/js/app.js', 'resources/css/app.css'])
</head>
<body>
<header>
    <img src="{{ asset('images/HZ-logo-EN.jpg') }}" class="mylogo" alt="Logo">
    <nav>
        <ul class="navlist">
            <li><a class="active" href="{{ route('home') }}">Home</a></li>
            <li><a href="{{ route('profile') }}">Profile</a></li>
            <li><a href="{{ route('faq') }}">FAQ</a></li>
            <li><a href="{{ route('posts.index') }}">Blogs</a></li>
            <li><a href="{{ route('dashboard') }}">Dashboard</a></li>
        </ul>
    </nav>
</header>

<main>

    {{$slot}}
{{--    @yield('content')--}}
</main>

<footer class="contents">
    <a target="_blank" href="mailto:khat0007@hz.nl"><img src="{{ asset('images/email.png') }}" alt="Gmail icon" height="30" width="30"></a>
    <a target="_blank" href="https://github.com/khat0007"><img src="{{ asset('images/github.png') }}" alt="Github icon" height="30" width="30"></a>
</footer>
</body>
</html>

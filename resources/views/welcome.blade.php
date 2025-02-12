<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Home</title>

    {{-- Compiled assets --}}
    @vite(['resources/sass/app.scss', 'resources/js/app.js', 'resources/css/app.css'])
</head>
<body>
<img src="{{ asset('images/HZ-logo-EN.jpg') }}" class="mylogo" alt="">

<nav>
    <ul class="navlist">
        <li><a class="active" href="{{ route('home') }}">Home</a></li>
        <li><a href="{{ route('profile') }}">Profile</a></li>
        <li><a href="{{ route('faq') }}">FAQ</a></li>
        <li><a href="{{ route('blogs') }}">Blogs</a></li>
        <li><a href="{{ route('dashboard') }}">Dashboard</a></li>
    </ul>
</nav>

<div>
    <ul class="divlist">


        <h1>Welcome To My Home Page</h1>
    </ul>

</div>
<section>
    <h2>Hi! I am Shaiza</h2>
</section>

<section>
    <div class="container">
        <img src="{{asset ('images/my_img.jpg') }}" alt="Image" class="" width="250" height="350">
    </div>
</section>

<section>
    <h2> Links are here</h2>
    <section class="img-row">
        <img src="{{asset ('images/beauty of nature.png') }}" width="450" height="220" alt="">
        <img src="{{asset ('images/world beauty.jpg') }}" width="450" height="220" alt="">
    </section>
</section>
<a href="https://steemit.com/article/@mohammedfila/an-article-on-the-beauty-of-nature">
    An-article-on-the-beauty-of-nature."Click here"
</a>
<br><br>
<section class="img-row">
    <img src="{{asset ('images/tourist.png') }}" width="450" height="220" alt="">
    <img src="{{asset ('images/bike tour.png') }}" width="450" height="220" alt="">
    <img src="{{asset ('images/beauty for tourist.png') }}" width="450" height="220" alt="">
</section>
<a href="https://nlplatform.com/articles/7-reasons-why-you-should-visit-netherlands">
    Charm of Netherlands."Click here"
</a>


<h2>ICT field</h2>
<p>
I believe the field of Information and Communication Technology (ICT) suits me because of my deep
passion for problem-solving and my fascination with how technology can transform lives. In ICT, the
blend of creativity and logic is essential, and I find joy in both crafting innovative solutions and
optimizing systems for efficiency. The rapid evolution of technology keeps me engaged, and I enjoy the
constant learning that comes with staying updated on new tools, languages, and methodologies. My natural
curiosity drives me to explore how technology can improve communication, productivity, and access to
information in various fields.
</p>

<p>
    Additionally, ICT offers an opportunity to make a tangible impact on society, whether through developing
    user-friendly software, creating seamless digital experiences, or enabling secure and efficient
    communication. I thrive in dynamic environments where I can apply both technical skills and strategic
    thinking to solve complex problems. The interdisciplinary nature of ICT, combining software, hardware,
    and communication systems, aligns with my interest in collaborating across different domains to deliver
    innovative solutions. This makes me feel that ICT is not just a field I can excel in, but also one where
    I can continuously grow and contribute meaningfully.

</p>
<h1>After ICT oppertunities to go</h1>
<ol>
    <li>Programer</li>
    <li>IT Manager</li>
    <li>Database analyst</li>
    <li>Web Developer</li>
    <li>Computer service technician</li>
</ol>
<br><br>
<footer class="contents">
    <a target="_blank" href="mailto::khat0007@hz.nl"><img src="{{asset ('images/email.png') }}" alt="Gmail icon" height="30" width="30"></a>
    <a target="_blank" href="https://github.com/khat0007"> <img src="{{asset ('images/github.png') }}" alt="Github icon" height="30" width="30"></a>
</footer>
</body>
</html>

<x-layout.layout>
    <div class="container">
        <form action="{{ route('blogs.store') }}" method="POST">
        <h1 class="title is-8">My programing experience</h1>
        <img src="{{asset ('images/my-programing-exp.jpg') }}" width="400" height="220" alt="">
        <p3>I have some programming experience, primarily in C++, which I gained through online courses and self-study
            in my
            home country. These courses provided a solid foundation in basic programming concepts, such as variables,
            loops,
            conditionals, functions, and object-oriented programming (OOP), which is a core feature of C++.
            Additionally, I
            supplemented my learning by reading various books on programming and computer science, allowing me to dive
            deeper into algorithms, data structures, and problem-solving techniques. My initial goal was to become an IT
            expert, which fueled my passion for learning more about coding and software development. However, due to
            circumstances beyond my control, I was unable to pursue formal education or a career in IT, leading me to
            choose
            another field. Despite this, my interest in technology has remained, and I continue to nurture my
            programming
            skills whenever possible, believing that the knowledge and experience I've gained will always serve me in
            some
            capacity, whether professionally or personally. I am still deeply motivated by the ever-evolving tech
            industry
            and the possibilities it offers, which keeps my passion for programming alive.
        </p3>
        </form>
    </div>
        <a href="{{ route('blog') }}">
            <button id="back-button-swot" type="button">BACK</button>
        </a>
</x-layout.layout>

<x-layout.layout>
    <section class="section">
        <div class="container">
    <h1 class="title is-4">Posts</h1>
            <p3 class="subtitle is-6 is-italic">
                Welcome to my blog page! Here, you'll find some of my posts related to studying. If you're in the ICT field,
                I've also mentioned potential career paths you can pursue after completing your studies. Additionally, I've
                shared my first feedback and more......
            </p3>
    <ul>
        <li><a href="{{ route('blogs.posts.ict-field') }}">The Field Of ICT</a></li>
        <p3>
            The Information and Communication Technology (ICT) field at HZ University of Applied Sciences is
            designed to equip students with cutting-edge technical knowledge and practical skills, enabling them to
            thrive in the rapidly evolving tech landscape.
        </p3>
        <li><a href="{{ route('blogs.posts.experience') }}">Experience</a></li>
        <p3>
            I have some programming experience, primarily in C++, which I gained through online courses and self-study
            in my
            home country. These courses provided a solid foundation in basic programming concepts, such as variables,
            loops,
        </p3>
        <li><a href="{{ route('blogs.posts.feedback') }}">Feedback</a></li>
        <p3>
            I received feedback from the teacher's assistant and students about my dashboard design.
            Some people suggested making changes to improve it, while others said it looked amazing as it is.
            This mixed feedback left me feeling a bit confused about
        </p3>
        <li><a href="{{ route('blogs.posts.personal-swot') }}">Personal SWOT</a></li>
        <p3>
            A Personal SWOT analysis helps you understand your Strengths, Weaknesses, Opportunities, and Threats.
            It allows you to identify what you're good at, where you need improvement, potential chances for growth,
        </p3>
        <li><a href="{{ route('blogs.posts.study-choice') }}">Study Choice</a></li>
        <p3>
            The increasing role of Technology in shaping the modren world has also played a significant role in
            motivating
            my study choice,I realize this by studing ICT.From an early age I was drawn to computer and technology and I
            knew that this was the field where I wanted
        </p3>
    </ul>
        </div>
    </section>
    </x-layout.layout>

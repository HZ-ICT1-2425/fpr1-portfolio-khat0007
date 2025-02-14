@extends('layout')

@section('content')
    <title class="title is-1">Blogs</title>

<div class="container">
    <h1 class="title is-2">Study Choice</h1>
    <img src="{{asset ('images/study-choice.jpg') }}" width="320" height="220" alt="">

    <p>
        The increasing role of Technology in shaping the modren world has also played a significant role</p><br>
    <p>>read more...</p>

<br>
    <h1 class="title is-5 mt-5">Personal SWOT</h1>
    <img src="{{asset ('images/swot.png') }}" width="320" height="200" left="0" right="100" alt="">
    <section id="swot">
        <div>
            <img src="{{asset ('images/strength.jpg') }}" width="250" height="150" alt="">
            <h2 class="title is-5 mt-5">Strength</h2>
            <p> One of my key strength is to maintain full focus on my goals and tasks.Once I commit something so I
                give it
                my full attention and complete it on time.I am creative mindset also which allows me to think
                outside the
                box and approch challenges with innovative solution.
                This combination of focus and creativity helps me excel in achieving my objectivies efficiently and
                effectively. </p>
        </div>
        <div>
            <img src="{{asset ('images/weaknesses.webp') }}" width="250" height="150"  alt="">
            <h2 class="title is-5 mt-5">Weaknesses</h2>
            <p>
                My weaknesses is I was afraid of what people talk about me or what they think about me,which
                sometime
                effects my confidence and desigion making.
                My typing speed is relatively slow,which hider my productivity when working on computer based tasks.
            </p>
        </div>
        <div>
            <img src="{{asset ('images/oppertuinty-img.jpg') }}" width="250" height="150"  alt="">
            <h2 class="title is-5 mt-5">Oppertunity</h2>
            <p>
                My childhood dream was to become an IT expert, but my background was not related to it. However, I
                was
                always excited to study IT, and finally, I got admission to HZ University of Applied Sciences in the
                Netherlands. I was so happy because it is a great opportunity for me to fulfill my goals and dreams,
                and I
                am determined to make the most of it.
            </p>
        </div>
        <div>
            <img src="{{asset ('images/threats.html.jpg') }}" width="250" height="150"  alt="">
            <h2 class="title is-5 mt-5">Threats</h2>
            <p>
                In my previous study, my friend gave me a survey with the demand to complete it within just four
                days,
                accompanied by a sense of pressure or threat. This short timeframe made the task quite difficult for
                me, as
                I had to manage my time and focus intensely to meet the deadline. Despite the challenges, I pushed
                through
                and ultimately managed to complete the survey within the four-day window. While it was a stressful
                situation, I was proud of myself for overcoming the difficulties and meeting the deadline.</p>
        </div>
    </section>
    <section>
        <div>
            <h1 class="title is-5 mt-5">My programing experience</h1>
            <br>
            <img src="{{asset ('images/my-programing-exp.jpg') }}" width="400" height="220"  alt="">
            <p3>I have some programming experience, primarily in C++, which I gained through online courses and
                self-study in my home country. These courses provided<br> </p3>
            <p><a href="study.html">read more...</a></p>
        </div>
    </section>
    <br>
    <section>
        <h1 class="title is-5 mt-5">The Field of ICT</h1>
        <img src="{{asset ('images/field-of-ICT.jpg') }}" width="400" height="220"  alt="">
    </section>
    <section>
        <artical>The Information and Communication Technology (ICT) field at HZ University of Applied Sciences is
            designed to equip students with cutting-edge technical knowledge</artical>
        <p><a href="study.html">read more...</a></p>
    </section>
    @endsection

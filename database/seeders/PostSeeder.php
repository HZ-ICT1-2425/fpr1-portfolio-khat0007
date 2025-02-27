<?php

namespace Database\Seeders;

use App\Models\Post;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Post::create(
            ['title' => 'ICT Field',
                'slug' => 'ict-field',
                'body' => '<p>The Information and Communication Technology (ICT) field at HZ University of Applied
                        Sciences is designed to equip students with cutting-edge technical knowledge and practical
                        skills, enabling them to thrive in the rapidly evolving tech landscape.As one of the most
                        forward-thinking programs at HZ, the ICT curriculum emphasizes a hands-on approach, blending
                        theoretical foundations with real-world applications.From the fundamentals of programming to
                        advanced courses in cybersecurity, data science, and software development, students at HZ are
                        prepared to tackle the technological challenges of tomorrow. One of the core strengths
                        of the ICT program at HZ University is its focus on practical learning and industry
                        collaboration.The university maintains close ties with leading companies in the tech sector,
                        allowing students to work on real-world projects, internships, and collaborative assignments.
                        This approach ensures that graduates leave not only with academic knowledge but also with
                        industry-relevant experience and problem-solving skills. Moreover, HZ places a strong emphasis
                        on innovation, encouraging students to explore emerging technologies such as artificial
                        intelligence,blockchain, and Internet of Things (IoT). Through its  modern infrastructure,
                        expert faculty, and an engaging, supportive environment, the ICT field at HZ
                        University empowers students to become the tech innovators of the future.
</p>']
        );

        Post::create(['title' => 'Personal SWOT',
            'slug' => 'swot-analysis',
            'body' => '<p> A personal analysis helps you understand your strengths, weaknesses, oppertunities, and
Threats.
             It allows you to identify what you are good at, where you need improvement, potential chances for growth,
             and challenges you might face. This can help you make better decisions for your personal and professional
             life.</p>
              <h2 class="title is-2">Strength</h2>
             <p>One of my key strength is to maintain full focus on my goals and tasks.Once I commit something,
             so I give it
             my full attention and complete it on time.I am creative mindset also which allows me to think  outside the
             box and approch challenges with innovative solution. This combination of focus and creativity helps me
             excel in achieving my objectivies efficiently and effectively.</p>
               <h2 class="title is-2">Weaknesses</h2>
             <p> My weaknesses are I was afraid of what people talk about me or what they think about me,which
                    sometime effects my confidence and desigion making.
                    My typing speed is relatively slow,which hider my productivity when working on computer based
                    tasks.</p>
                       <h2 class="title is-2">Oppertunity </h2>
                    <p>My childhood dream was to become an IT expert, but my background was not related to it. However,
                    I was always excited to study IT, and finally, I got admission to HZ University of Applied
                    Sciences in
                    the Netherlands. I was so happy because it is a great opportunity for me to fulfill my goals and
                    dreams, and I am determined to make the most of it.</p>
                       <h2 class="title is-2">Threat</h2>
                    <p> In my previous study, my friend gave me a survey with the demand to complete it within just four
                    days, accompanied by a sense of pressure or threat. This short timeframe made the task quite
                    difficult
                    for me, as I had to manage my time and focus intensely to meet the deadline. Despite
                    the challenges, I
                    pushed through and ultimately managed to complete the survey within the four-day window.
                    While it was a
                    stressful situation, I was proud of myself for overcoming the difficulties and meeting the deadline.

</p>']);

        Post::create(['title' => 'First FeedBack',
            'slug' => 'first-feedback',
            'body' => '<p> I received feedback from the student teacher assistant and students about my dashboard design
.Some people suggested making changes to improve it, while others said it looked amazing as it is.
            This mixed feedback left me feeling a bit confused about what to do next. On one hand, I want to
            make improvements based on suggestions, but on the other hand, I don’t want to change something
            that is already working well for some users. I need to carefully analyze the comments and identify
            which changes would truly enhance the dashboard. It’s important to balance aesthetics, functionality,
            and user experience. I also want to ensure that any modifications align with the original purpose of
            the dashboard. Considering the diverse opinions, I might test different versions to see what works best.
            My ultimate goal is to create a dashboard that is both visually appealing and highly functional for everyone
             who uses it.</p>
             ']);

        Post::create(['title' => 'Experience',
            'slug' => 'programming-experience',
            'body' => '<p>I have some programming experience, primarily in C++, which I gained through online courses
and self-study in my home country. These courses provided a solid foundation in basic programming concepts, such as
variables, loops, conditionals, functions, and object-oriented programming (OOP), which is a core feature of C++.
            Additionally, I supplemented my learning by reading various books on programming and computer science,
            allowing me to dive deeper into algorithms, data structures, and problem-solving techniques. My initial
            goal was to become an IT expert, which fueled my passion for learning more about coding and software
            development. However, due to circumstances beyond my control, I was unable to pursue formal education
            or a career in IT, leading me to choose another field. Despite this, my interest in technology has remained,
            and I continue to nurture my programming skills whenever possible, believing that the knowledge and
            experience I have gained will always serve me in some capacity, whether professionally or personally.
            I am still deeply
            motivated by the ever-evolving tech industry and the possibilities it offers, which keeps my passion for
            programming alive.</p>']);

        Post::create(['title' => 'Study Choice',
            'slug' => 'study-choice',
            'body' => '<p> The increasing role of Technology in shaping the modren world has also played a significant
role in motivating my study choice,I realize this by studing ICT.From an early age I was drawn to computer
            and technology and I knew that this was the field where I wanted
            to make an impact.Activities like coding,problem-solving and learning about new technologies have always
            sparkled my intrest, which reinforced my decision to choose ICT as my acadmic path .And I hope that my
            education will allow me to not only fullfill my dreams and goals but also gives back to my country and help
            bridge the technology gap in Pakistan , and also I apply my knowledge in practical ways.</p>
            <h2 class="title is-2">Motivate your study choice </h2>
            <p>I chose this field of study because I am passionate about learning and growing in this area.
             It matches my
            interests, strengths, and future career goals. This subject will help me gain valuable skills and knowledge
            to make a positive impact. I believe it will open many opportunities for me in the future.</p>
             <h2 class="title is-2">After completing this education</h2>
             <p> After completing this education, I will be equipped with the skills and knowledge needed to
             succeed in my
            chosen career. I hope to apply what I have learned in real-world situations and make a meaningful
            contribution.
            This will also open up many job opportunities and allow me to continue growing professionally. Overall, I am
            excited to start this new chapter and build a successful future.</p>'
        ]);
    }
}

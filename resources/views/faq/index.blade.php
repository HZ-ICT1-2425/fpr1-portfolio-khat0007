<x-layout.layout>
    <h1 id="questions-header">FAQ List</h1>
    <!--the main content of the page-->
    <main class="faq-main">
        <!--questions and answers-->
        <h1>Are there any questions? Feel free to ask.</h1>
        <a href="{{ route('faq.create') }}" id="create-post-button">Create new FAQ</a>
        @if($faqs->isEmpty())
            <div id="message-empty-faq">
                <p>No FAQs available.</p>
            </div>
        @else
                    @foreach($faqs as $faq)

                        <x-faq.list-item :faq="$faq"></x-faq.list-item>
                    @endforeach
        @endif
    </main>
    </div>
</x-layout.layout>

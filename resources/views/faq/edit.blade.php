<x-layout.layout>
    <title class="title is-2">Edit Post</title>
    <div class="container">
        <form action="{{route ('faq.update',$faq)}}" method="POST">
            @method('PUT')
            @csrf
            <h2 class="subtitle is-6 is-italic">
                Please fill out all the form fields and click on 'submit'
            </h2>
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>

                        @endforeach
                    </ul>
                </div>
            @endif

            <div class="field">
                <label for="question" class="label">Question</label>
                <div class="control">
                    <input  type="text"  name="question" class="input" autofocus value="{{old('question', $faq->question)}}">
                </div>
            </div>

            <div class="field">
                <label for="answer" class="label">Answer</label>
                <div class="control">
                    <input type="text" name="answer" class="input" value="{{old('answer', $faq->answer) }}">
                </div>
            </div>

            <div class="field is-grouped">
                <div class="control">
                    <button type="submit" class="button is-primary" id="submit-form-button">Submit</button>
                </div>
                <div class="control">
                    <button type="button" class="button is-primary" id="submit-form-button-cancel">Cancel</button>
                </div>
                <div class="control">
                    <button type="reset" class="button is-primary" id="submit-form-button-reset">Reset</button>
                </div>
            </div>
        </form>
    </div>
</x-layout.layout>

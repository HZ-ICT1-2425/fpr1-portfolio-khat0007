<x-layout.layout>
    <div class="box">
        <form action="{{ route('faq.store') }}" method="POST">
            @csrf
            <h1 id="form-header">Create a New FAQ</h1>
            <p>
                Please fill out all the form fields and click 'Submit'
            </p>
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
         <input type="text" name="question" placeholder="Write your question" class="input" value="{{old('question')}}">
     </div>
     <label for="answer" class="label">Answer</label>
     <div class="control">
         <input type="text" name="answer" placeholder="Write your answer" class="input" value="{{old('answer')}}">
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
 </div>
        </form>
    </div>
</x-layout.layout>

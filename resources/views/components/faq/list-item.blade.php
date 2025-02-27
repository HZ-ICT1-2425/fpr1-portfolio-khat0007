<details>
        <summary> <b> <u>{!! $faq->question  !!} </u> </b> </summary>
        <div>
            {!! $faq->answer !!}
        </div>
    <!-- Debugging: Check if the ID exists -->
    <p>FAQ ID: {{ $faq->id ?? 'ID is missing' }}</p>

    <!-- Edit and Delete Buttons -->
    <div class="edit-page-buttons">
        <!-- Edit Button -->
        <a href="{{ route('faq.edit', ['faq' => $faq->id]) }}" class="edit-button">Edit FAQ</a>

        <!-- Delete Button -->
        <form action="{{ route('faq.destroy', $faq) }}" method="POST" style="display:inline;">
            @csrf
            @method('DELETE')
            <button type="submit" class="delete-button" onclick="return confirm('Are you sure you want to delete this FAQ?');">Delete FAQ</button>
        </form>
    </div>
    </details>

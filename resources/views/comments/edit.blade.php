<x-layout>
    <x-section>
        <x-form action="/comments/{{ $comment->id }}" method="PATCH">
            
            <div class="m6">
                <label for="texts" class="block mb-2 uppercase font-bold text-xs text-grey-700">Body</label>
            </div>
            <textarea name="texts" id="texts" cols="30" class="border border-gray-400 p-2 w-full"
                required>{{$comment->texts}}</textarea>

            @error('texts')
                <p class="text-red-500 text-xs mt-2"></p>
            @enderror

            <div class="mb-6">
                <button type="submit" class="bg-blue-400 text-rounded py-2 px-4 hover:bg-blue-500">
                    Submit
                </button>
            </div>
        </x-form>       
        
        
        <x-form-button action="/comments/{{ $comment->id }}" method="DELETE" class="bg-blue-400 text-rounded py-2 px-4 hover:bg-blue-500">
            Delete
        </x-form-button>

    </x-section>
</x-layout>
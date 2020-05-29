<div class="border border-blue-400 rounded-lg p-8 mb-8">
    <form action="/tweets" method="POST">
        @csrf
        <textarea name="body" 
        class="w-full" 
        placeholder="What's in your thought!"></textarea>
        <hr class="my-4">
        <footer class="flex justify-between">
            <img src="{{ auth()->user()->avatar }}" 
            alt="" 
            class="rounded-full mr-2">
            <button type="submit" class="rounded-lg shadow bg-blue-500 px-2 py-2 text-white">
                Chirp!
            </button>
        </footer>
    </form>
    @error('body')
        <p class="text-red-500 text-sm mt-2">{{ $message }}</p>
    @enderror
</div>
<div class="border border-blue-400 rounded-lg px-8 py-6 mb-8">
    <form action="/tweets" method="POST">
        @csrf

        <textarea 
            class="w-full"
            name="body"
            placeholder="What's up?"
            required
        >
        </textarea>

        <hr class="my-4">

        <div class="flex justify-between">

            <img 
                src="{{ auth()->user()->avatar }}" 
                alt="Avatar"
                class="rounded-full mr-2" 
            >

            <button 
                type="submit"
                class="bg-blue-500 rounded-lg shadow p-2 text-white"
            >
                Tweet!
            </button>

        </div>
    </form>

    @error('body')
        <p class="text-red-500 text-sm mt-2">{{ $message }}</p>
    @enderror
</div>
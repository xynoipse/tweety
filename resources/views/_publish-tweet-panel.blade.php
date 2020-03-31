<div class="border border-blue-400 rounded-lg px-8 pt-6 pb-4 mb-8">
    <form action="/tweets" method="POST">
        @csrf

        <textarea 
            name="body"
            placeholder="What's up?"
            required
            class="w-full outline-none"
        >
        </textarea>

        <hr class="mt-4 mb-2">

        <div class="flex justify-between items-center">

            <img 
                src="{{ auth()->user()->avatar }}" 
                alt="Avatar"
                class="rounded-full w-8 h-8"
            >

            <button 
                type="submit"
                class="bg-blue-500 rounded-lg shadow py-2 px-6 text-white text-sm"
            >
                Tweet
            </button>

        </div>
    </form>

    @error('body')
        <p class="text-red-500 text-sm mt-2">{{ $message }}</p>
    @enderror
</div>
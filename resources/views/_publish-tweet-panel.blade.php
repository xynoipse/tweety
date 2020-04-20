<div class="border border-blue-400 rounded-lg px-8 pt-6 pb-4 mb-8">
    <form action="{{ route('tweet') }}" method="POST">
        @csrf

        <textarea 
            name="body"
            placeholder="What's up?"
            required
            class="w-full outline-none"
            autofocus
        >
        </textarea>

        <hr class="mt-4 mb-2">

        <div class="flex justify-between items-center">

            <img 
                src="{{ current_user()->image }}" 
                alt="Profile Image"
                class="rounded-full w-8 h-8"
            >

            <button 
                type="submit"
                class="bg-blue-500 hover:bg-blue-600 rounded-lg shadow py-2 px-6 text-white text-sm"
            >
                Tweet
            </button>

        </div>
    </form>

    @error('body')
        <p class="text-red-500 text-sm mt-2">{{ $message }}</p>
    @enderror
</div>
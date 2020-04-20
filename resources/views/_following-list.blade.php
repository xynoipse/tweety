<div class="bg-gray-200 rounded-lg py-4 px-6">
    <h3 class="font-bold text-xl mb-4">Following</h3>
    <ul>
        @forelse (current_user()->follows as $user)
            <li class="{{ $loop->last ? '' : 'mb-4'}}">
                <div>
                    <a 
                        href="{{ route('profile', $user) }}"
                        class="flex items-center text-sm"
                    >
                        <img
                            src="{{ $user->image }}"
                            alt="Profile Image"
                            class="rounded-full w-10 h-10 mr-2"
                        >
                        {{ $user->name }}
                    </a>
                </div>
            </li>
        @empty
            <li>No following user</li>
        @endforelse
    </ul>
</div>
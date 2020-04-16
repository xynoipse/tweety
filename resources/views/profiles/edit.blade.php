@extends('layouts.app')

@section('app-content')
    <form action="{{ route('profile.update', $user) }}" method="POST" enctype="multipart/form-data">
        @method('PATCH')
        @csrf

        <div class="mb-6">
            <label for="name" class="block mb-2 uppercase font-bold text-xs text-gray-700">
                Name
            </label>

            <input 
                type="text" id="name" 
                name="name" value="{{ $user->name }}"
                class="border border-gray-400 p-2 w-full"
                placeholder="Name"
                required
            >
            
            @error('name')
                <p class="text-red-500 text-xs mt-2">
                    {{ $message }}
                </p>
            @enderror
        </div>

        <div class="mb-6">
            <label for="username" class="block mb-2 uppercase font-bold text-xs text-gray-700">
                Username
            </label>

            <input 
                type="text" id="username"
                name="username" value="{{ $user->username }}"
                class="border border-gray-400 p-2 w-full"
                placeholder="Username"
                required
            >
            
            @error('username')
                <p class="text-red-500 text-xs mt-2">
                    {{ $message }}
                </p>
            @enderror
		</div>
		
		<div class="mb-6">
            <label for="image" class="block mb-2 uppercase font-bold text-xs text-gray-700">
                Profile Image
            </label>

			<div class="flex">
				<input 
					type="file" id="image"
					name="image"
					class="border border-gray-400  p-2 w-full"
					required
				>

				<img 
					src="{{ $user->image }}" 
					alt="Profile Image"
					width="40"
				>
			</div>
           
            @error('image')
                <p class="text-red-500 text-xs mt-2">
                    {{ $message }}
                </p>
            @enderror
        </div>

        <div class="mb-6">
            <label for="email" class="block mb-2 uppercase font-bold text-xs text-gray-700">
                Email Address
            </label>

            <input 
                type="email" id="email"
                name="email" value="{{ $user->email }}"
                class="border border-gray-400 p-2 w-full"
                placeholder="Email Address"
                required
            >
            
            @error('email')
                <p class="text-red-500 text-xs mt-2">
                    {{ $message }}
                </p>
            @enderror
        </div>

        <div class="mb-6">
            <label for="password" class="block mb-2 uppercase font-bold text-xs text-gray-700">
                Password
            </label>

            <input 
                type="password" id="password"
                name="password"
                class="border border-gray-400 p-2 w-full"
                placeholder="Password"
                required
            >
            
            @error('password')
                <p class="text-red-500 text-xs mt-2">
                    {{ $message }}
                </p>
            @enderror
        </div>

        <div class="mb-6">
            <label for="password_confirmation" class="block mb-2 uppercase font-bold text-xs text-gray-700">
                Password Confirmation
            </label>

            <input 
                type="password" id="password_confirmation"
                name="password_confirmation"
                class="border border-gray-400 p-2 w-full"
                placeholder="Password Confirmation"
                required
            >
            
            @error('password_confirmation')
                <p class="text-red-500 text-xs mt-2">
                    {{ $message }}
                </p>
            @enderror
        </div>

        <div class="mb-6">
            <button type="submit" class="bg-blue-400 text-white rounded py-2 px-4 hover:bg-blue-500">
                Submit
            </button>
        </div>
    </form>
@endsection

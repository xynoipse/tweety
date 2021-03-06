@extends('layouts.master')

@section('content')
<div class="container mx-auto flex justify-center">
    <div class="px-12 py-8 bg-gray-200 rounded-lg lg:w-2/6">
        <div class="font-bold text-lg mb-4">Register</div>

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <div class="mb-4">
                <label 
                    for="username" 
                    class="block mb-2 uppercase font-bold text-xs text-gray-700"
                >
                    Username
                </label>

                <input 
                    id="username" 
                    type="username" 
                    class="border border-gray-400 p-1 w-full" 
                    name="username" 
                    value="{{ old('username') }}"
                    autocomplete="username"
                    required 
                >

                @error('username')
                    <p class="text-red-500 text-xs mt-2">
                        <strong>{{ $message }}</strong>
                    </p>
                @enderror
            </div>

            <div class="mb-4">
                <label 
                    for="name" 
                    class="block mb-2 uppercase font-bold text-xs text-gray-700"
                >
                    Name
                </label>

                <input 
                    id="name" 
                    type="name" 
                    class="border border-gray-400 p-1 w-full" 
                    name="name" 
                    value="{{ old('name') }}"
                    autocomplete="name"
                    required 
                >

                @error('name')
                    <p class="text-red-500 text-xs mt-2">
                        <strong>{{ $message }}</strong>
                    </p>
                @enderror
            </div>

            <div class="mb-4">
                <label 
                    for="email" 
                    class="block mb-2 uppercase font-bold text-xs text-gray-700"
                >
                    Email Address
                </label>

                <input 
                    id="email" 
                    type="email" 
                    class="border border-gray-400 p-1 w-full" 
                    name="email" 
                    value="{{ old('email') }}"
                    autocomplete="email"
                    required 
                >

                @error('email')
                    <p class="text-red-500 text-xs mt-2">
                        <strong>{{ $message }}</strong>
                    </p>
                @enderror
            </div>

            <div class="mb-4">
                <label 
                    for="password" 
                    class="block mb-2 uppercase font-bold text-xs text-gray-700"
                >
                    Password
                </label>

                <input 
                    id="password" 
                    type="password" 
                    class="border border-gray-400 p-1 w-full" 
                    name="password" 
                    autocomplete="new-password" 
                >

                @error('password')
                    <p class="text-red-500 text-xs mt-2">
                        <strong>{{ $message }}</strong>
                    </p>
                @enderror
            </div>

            <div class="mb-4">
                <label 
                    for="password-confirm" 
                    class="block mb-2 uppercase font-bold text-xs text-gray-700"
                >
                    Confirm Password
                </label>

                <input 
                    id="password-confirm" 
                    type="password" 
                    class="border border-gray-400 p-1 w-full" 
                    name="password_confirmation" 
                    autocomplete="new-password" 
                >
            </div>

            <div>
                <button 
                    type="submit" 
                    class="bg-blue-400 text-white rounded py-2 px-4 hover:bg-blue-500 mr-2"
                >
                    Register
                </button>
            </div>
        </form>
    </div>
</div>
@endsection

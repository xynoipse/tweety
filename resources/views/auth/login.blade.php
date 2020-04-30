@extends('layouts.master')

@section('content')
<div class="container mx-auto flex justify-center">
    <div class="px-12 py-8 bg-gray-200 rounded-lg lg:w-2/6">
        <div class="font-bold text-lg mb-4">Login</div>

        <form method="POST" action="{{ route('login') }}">
            @csrf

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
                    autocomplete="current-password" 
                >

                @error('password')
                    <p class="text-red-500 text-xs mt-2">
                        <strong>{{ $message }}</strong>
                    </p>
                @enderror
            </div>

            <div class="mb-4">
                <div>
                    <input 
                        id="remember" 
                        type="checkbox" 
                        class="mr-1" 
                        name="remember"
                        {{ old('remember') ? 'checked': '' }}
                    >

                    <label 
                        for="remember" 
                        class="uppercase font-bold text-xs text-gray-700"
                    >
                        Remember Me
                    </label>
                </div>
            </div>

            <div>
                <button 
                    type="submit" 
                    class="bg-blue-400 text-white rounded py-2 px-4 hover:bg-blue-500 mr-2"
                >
                    Login
                </button>

                @if (Route::has('password.request'))
                    <a class="text-xs text-gray-700" href="{{ route('password.request') }}">
                        Forgot Your Password?
                    </a>
                @endif
            </div>
        </form>
    </div>
</div>
@endsection

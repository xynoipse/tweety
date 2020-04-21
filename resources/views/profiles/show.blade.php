@extends('layouts.app')

@section('app-content')
    <header class="mb-6 relative">

        <div class="relative">
            <img 
                src="{{ asset('images/default_banner.jpg') }}" 
                alt="Profile Banner"
                class="rounded-lg w-full mb-2"
            >

            <img
                src="{{ $user->image }}"
                alt="Profile Image"
                class="rounded-full absolute bottom-0 left-1/2 transform -translate-x-1/2 translate-y-1/2"
                width="150"
            >
        </div>

        <div class="flex justify-between items-center mb-6">
            <div>
                <h2 class="font-bold text-2xl">{{ $user->name }}</h2>
                <p class="text-sm">Joined {{ $user->created_at->diffForHumans() }}</p>
            </div>

            <div class="flex ml-1">
                @can('edit', $user)
                    <a 
                        href="{{ route('profile.edit', current_user()) }}"
                        class="rounded-full border border-gray-300 py-2 px-6 text-black text-sm"
                    >
                        Edit Profile
                    </a>
                @endcan
                    
                <x-follow-button :user="$user"></x-follow-button>
            </div>
        </div>

        <p class="text-sm text-center">
            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nihil deserunt beatae est deleniti tempore architecto ab corrupti autem magni ullam dolor, atque aliquam maiores harum, porro dicta sint numquam maxime quisquam error neque odio culpa sit eaque? Aliquam, sapiente reprehenderit!
        </p>
    
    </header>

    @include('_timeline')
@endsection

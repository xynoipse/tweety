@extends('layouts.master')

@section('content')
    <section class="px-8">
        <main class="container mx-auto">
            <div class="lg:flex lg:justify-center">
                <div class="lg:w-32">
                    @include('_sidebar-links')
                </div>
                <div class="lg:flex-1 lg:mx-10" style="max-width: 700px">
                    @yield('app-content')
                </div>
                <div class="lg:w-1/6">
                    @include('_following-list')
                </div>
            </div>
        </main>
    </section>
@endsection
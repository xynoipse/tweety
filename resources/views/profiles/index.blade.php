@extends('layouts.app')

@section('content')
    profile page for {{ $user->name }}

    @include('_timeline', [
        'tweets' => $user->tweets
    ])
@endsection

@extends('components.app')

@section('title', 'Profile')

@section('content')
<h1 class="flex font-bold italic justify-center text-6xl text-ungu-gelap pb-20">Your AniNotee's Profile</h1>
<div class="min-h-3/4 flex justify-center p-4">
    <div class="w-full max-w-md bg-ungu-pucat text-ungu-normal p-8 rounded-lg shadow-lg">
        <h1 class="font-comic font-bold text-3xl sm:text-4xl md:text-5xl text-center mb-6">User's Profile Card</h1>

        <div class="text-lg sm:text-xl py-4 space-y-2">
            <p><strong>Username:</strong> {{ $username }}</p>

            @if (isset($status) && $status === 'Deactive')
                <p><strong>Status:</strong> {{$status}}</p>
            @else
                <p><strong>Status:</strong> Active</p>
            @endif

        </div>

        <a href="{{ route('logout') }}"
           class="block text-center bg-ungu-gelap hover:bg-ungu-terang text-white font-semibold px-4 py-2 rounded transition">
            Logout
        </a>
    </div>
</div>
@endsection

@extends('components.app')

@section('title', 'Profile')

@section('content')
    <a href="{{ route('logout') }}"
    class="bg-ungu-gelap hover:bg-ungu-terang text-white font-semibold px-4 py-2 rounded transition">
    Logout
    </a>
@endsection

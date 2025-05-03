@extends('components.app')

@section('title', 'Dashboard')

@section('content')
    <h1>Halo</h1>
    <h2>Ini sementara</h2>

    <p class="ml-2 font-bold text-ungu-gelap hover:text-ungu-pucat transition whitespace-nowrap overflow-hidden text-ellipsis max-w-[120px]">
         Hey, {{ $username }}
    </p>
@endsection

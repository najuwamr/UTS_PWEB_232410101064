@extends('components.app')

@section('title', 'Aninotee | Anime List')

@section('content')
<div class="container mx-auto py-6">
    <div class="flex justify-between mb-5">
        <h2 class="text-2xl font-bold text-ungu-normal">Anime List</h2>
        <button onclick="document.getElementById('add-list').classList.remove('hidden')"
            class="bg-ungu-normal cursor-pointer hover:bg-[#C3ACCE] hover:text-white text-ungu-pucat font-semibold px-4 py-2 rounded transition">
            Add
        </button>
    </div>

    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">
        @foreach($animelistItems as $anime)
            <div class="bg-ungu-pucat rounded-xl p-8 shadow-md flex flex-col items-center text-ungu-cokelat">
                <img src="{{ $anime['images'] }}" alt="{{ $anime['title'] }}" class="w-40 h-auto rounded-lg mb-4">
                <h3 class="text-xl font-bold text-ungu-gelap mb-2">{{ $anime['title'] }}</h3>
                <div class="flex flex-col pl-6 w-full text-left">
                    <p><strong>Studio: </strong> {{ $anime['studio'] }}</p>
                    <p><strong>Genre: </strong> {{ $anime['genre'] }}</p>
                    <p><strong>Score: </strong> {{ $anime['score'] }}/100</p>
                    <p><strong>Status: </strong><span class="bg-ungu-normal text-white px-2 py-0.5 rounded">{{ $anime['status'] }}</span></p>
                    <p><strong>Notes: </strong> {{ $anime['notes'] }}</p>
                </div>
            </div>
        @endforeach
    </div>
    @include('components.add-anime')
</div>
@endsection

<script>
    document.addEventListener('click', function (event) {
        const modal = document.getElementById('add-list');
        if (event.target === modal) {
            modal.classList.add('hidden');
        }
    });
</script>

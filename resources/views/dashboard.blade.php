@extends('components.app')

@section('title', 'Dashboard')

@section('content')

    <div class="mb-8">
        <h1 class="text-2xl font-bold mb-2">Hey, {{ $username }}</h1>
        <p class="text-gray-700 mb-4">
            This is your personal anime diary -- <span class="font-bold">AniNotee</span>.
            You can track what you’re planning to watch, currently watching, or have completed.
            Feel free to jot down your thoughts, impressions, or anything that makes each anime special to you.
        </p>
        <img src="https://plus.unsplash.com/premium_photo-1677402408071-232d1c3c3787?q=80&w=2080&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
             alt="Anime Banner" class="w-full rounded-lg shadow-md">
    </div>

    <div id="animeCarousel" class="relative w-full overflow-hidden">
        <div class="carousel-inner relative w-full flex transition-transform duration-500 ease-in-out" style="transform: translateX(0%);">
            @foreach($animelistItems as $index => $anime)
                <div class="carousel-item flex-shrink-0 w-full flex items-center justify-center px-4 {{ $index == 0 ? '' : 'hidden' }}">
                    <img src="{{ $anime['images'] }}" alt="{{ $anime['title'] }}" class="h-64 w-auto rounded-lg shadow-lg">
                    <div class="ml-6 max-w-md">
                        <h5 class="text-xl font-bold text-ungu-gelap">{{ $anime['title'] }}</h5>
                        <p class="text-sm text-ungu-gelap">{{ $anime['notes'] }}</p>
                    </div>
                </div>
            @endforeach
        </div>
    
        <button id="prevBtn" class="absolute top-1/2 left-4 transform -translate-y-1/2 bg-black bg-opacity-50 text-white p-2 rounded-full">
            <
        </button>
        <button id="nextBtn" class="absolute top-1/2 right-4 transform -translate-y-1/2 bg-black bg-opacity-50 text-white p-2 rounded-full">
            >
        </button>
    </div>
    <script>
        const items = document.querySelectorAll('.carousel-item');
        let current = 0;
    
        document.getElementById('prevBtn').addEventListener('click', () => {
            items[current].classList.add('hidden');
            current = (current - 1 + items.length) % items.length;
            items[current].classList.remove('hidden');
        });
    
        document.getElementById('nextBtn').addEventListener('click', () => {
            items[current].classList.add('hidden');
            current = (current + 1) % items.length;
            items[current].classList.remove('hidden');
        });
    </script>

    <div>

    </div>
@endsection

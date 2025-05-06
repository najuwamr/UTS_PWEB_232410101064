@extends('components.app')

@section('title', 'Dashboard')

@section('content')
<div class="py-6 px-10">
    <div class="flex flex-col md:flex-row items-start md:items-center mb-10 gap-6">
        <div class="text-ungu-normal md:w-2/3">
            <h1 class="text-4xl sm:text-6xl font-light mb-8">Hey, {{ $username }}!</h1>
            <p class="text-sm md:text-2xl sm:text-lg">
                This is your personal anime diary -- <span class="font-bold">AniNotee</span>.
                You can track what you’re planning to watch, currently watching, or have completed.
                Feel free to jot down your thoughts, impressions, or anything that makes each anime special to you.
            </p>
        </div>
        <img src="https://i.pinimg.com/1200x/53/85/85/53858589ba8bb6d95b8f204cf5a3e2f0.jpg"
            alt="Banner"
            class="w-full md:w-1/3 md:pb-12 p-0 rounded-lg">
    </div>

    <div id="animeCarousel" class="relative bg-ungu-pucat w-full rounded-lg p-8 overflow-hidden mt-10">
        <div id="carouselInner" class="flex transition-transform w-full duration-700 ease-in-out" style="transform: translateX(0%);">
            @foreach($animelistItems as $anime)
            <div class="cursor-default carousel-item px-4 w-full flex flex-col md:flex-row items-center justify-center flex-shrink-0">
                <img src="{{ $anime['images'] }}" alt="{{ $anime['title'] }}"
                    class="h-64 w-auto rounded-lg shadow-lg mx-auto">
                <div class="mt-4 md:mt-0 md:ml-6 w-full text-center md:text-left">
                    <h5 class="text-xl md:text-2xl font-bold text-ungu-gelap">{{ $anime['title'] }}</h5>
                    <p class="text-sm md:text-base mt-1 mb-2 md:mb-6 bg-ungu-normal text-white px-2 py-0.5 rounded"> {{ $anime['status'] }}</p>
                    <p class="text-sm md:text-base text-ungu-gelap mt-1">Genre: {{ $anime['genre'] }}</p>
                    <p class="text-sm md:text-base text-ungu-gelap mt-1">Score:
                        <span class="bg-ungu-gelap text-ungu-pucat px-2 rounded">{{ $anime['score'] }}/100</span>
                    </p>
                </div>
            </div>
            @endforeach
        </div>

        <button id="prev" class="absolute cursor-pointer top-1/2 left-4 transform -translate-y-1/2 bg-black/50 text-white p-2 rounded-full">
            &#x276E;
        </button>
        <button id="next" class="absolute cursor-pointer top-1/2 right-4 transform -translate-y-1/2 bg-black/50 text-white p-2 rounded-full">
            &#x276F;
        </button>
    </div>

    <script>
        const carouselInner = document.getElementById('carouselInner');
        const items = document.querySelectorAll('.carousel-item');
        let currentIndex = 0;

        function updateCarousel() {
            const itemWidth = items[0].offsetWidth;
            const offset = -itemWidth * currentIndex;
            carouselInner.style.transform = `translateX(${offset}px)`;
        }

        document.getElementById('prev').addEventListener('click', () => {
            currentIndex = (currentIndex - 1 + items.length) % items.length;
            updateCarousel();
        });

        document.getElementById('next').addEventListener('click', () => {
            currentIndex = (currentIndex + 1) % items.length;
            updateCarousel();
        });

        window.addEventListener('resize', updateCarousel);
    </script>

    <div class="m-4 text-ungu-normal">
        <div class="flex justify-center items-center">
            <h1 class="underline text-3xl">Your Resume</h1>
        </div>
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">
            @foreach($resumeList as $list)
                <div class="p-8 flex flex-col items-center">
                    <img src=" {{ $list['image'] }} " alt="image" class="w-40 h-auto mb-4 transition-transform duration-300 hover:scale-130">
                    <h3 class="text-lg mb-2">{{ $list['count'] }}</h3>
                </div>
            @endforeach

            <div class="p-8 flex flex-col items-center">
                <a href="{{ route('anime-list') }}?username={{ $username }}" class="cursor-pointer bg-ungu-gelap rounded-full mb-4 py-8 px-12 text-8xl">+</a>
                <a href="{{ route('anime-list') }}?username={{ $username }}" class="cursor-pointer text-lg mb-2">Add new</href=>
            </div>
        </div>
    </div>
</div>
@endsection

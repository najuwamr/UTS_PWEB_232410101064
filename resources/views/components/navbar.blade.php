<nav class="bg-ungu-normal sticky top-0 z-50 text-ungu-pucat px-4 py-3 flex flex-wrap items-center justify-between">
    <div class="md:hidden">
        <img src="{{ asset('storage/images/AniNotee-logo.png') }}" alt="Logo" class="size-10">
    </div>

    <div class="cursor-default text-2xl font-comic font-bold tracking-wide whitespace-nowrap hidden md:block">
        AniNotee
    </div>

    <div class="font-poppins flex flex-wrap gap-2 items-center justify-end max-w-full">
        <div class="flex space-x-4 px-2 py-1 flex-shrink-0 whitespace-nowrap">
            <a href="{{ route('dashboard', ['username' => $username]) }}" class="hover:text-white transition">
                Dashboard
            </a>
            <a href="{{ route('anime-list', ['username' => $username]) }}" class="hover:text-white transition">
                Anime List
            </a>
        </div>

        @if(isset($username))
            <a href="{{ route('profile', ['username' => $username]) }}"
               class="ml-2 font-bold border-b-4 border-violet-200 text-white hover:text-ungu-pucat transition whitespace-nowrap overflow-hidden text-ellipsis max-w-[120px]">
                Hi, {{ $username }}!
            </a>
        @endif
    </div>
</nav>

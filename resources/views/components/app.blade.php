<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css2?family=Comic+Neue&family=Poppins&display=swap" rel="stylesheet">
    <link rel="icon" href="{{ asset('storage/images/AniNotee-logo.png') }}" type="image/png">
    <title>@yield('title')</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <style type="text/tailwindcss">
        @layer utilities {
            .bg-ungu-cokelat { background-color: #261D19; }
            .bg-ungu-gelap { background-color: #553A49; }
            .bg-ungu-normal { background-color: #7C617E; }
            .bg-ungu-terang { background-color: #C3ACCE; }
            .bg-ungu-pucat { background-color: #DFD9E2; }
            .text-ungu-cokelat { color: #261D19; }
            .text-ungu-normal { color: #7C617E; }
            .text-ungu-gelap { color: #553A49; }
            .text-ungu-terang { color: #C3ACCE; }
            .text-ungu-pucat { color: #DFD9E2; }

            .font-poppins { font-family: 'Poppins', sans-serif; }
            .font-comic { font-family: 'Comic Neue', 'Comic Sans MS', cursive; }
        }
    </style>
</head>
<body class="min-h-screen flex flex-col">
    @include('components.navbar')

    <main class="flex-grow p-4">
        @yield('content')
    </main>

    @include('components.footer')
</body>
</html>

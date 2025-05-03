<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="icon" href="{{ asset('storage/images/AniNotee-logo.png') }}" type="image/png">
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
<body class="bg-ungu-normal min-h-screen flex items-center justify-center font-sans">
    <main class="w-full px-4">
        @yield('content')
    </main>
</body>
</html>

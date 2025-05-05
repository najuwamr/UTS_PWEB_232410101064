<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    private static $animelistItems =[
        [
            'images' => 'https://cdn.myanimelist.net/images/anime/1015/138006.jpg',
            'title' => 'Frieren: Beyond Journey\'s End',
            'studio' => 'Madhouse',
            'genre' => 'Adventure, Fantasy',
            'score' => '97',
            'status' => 'Rewatching',
            'notes' => 'Peaceful but emotional.',
        ],
        [
            'images' => 'https://cdn.myanimelist.net/images/anime/1263/132759.jpg',
            'title' => 'Bungo Stray Dogs',
            'studio' => 'Bones',
            'genre' => 'Action, Mystery',
            'score' => '95',
            'status' => 'Finish',
            'notes' => 'Bunch of plot twists. I personally hate you, Fedya.',
        ],
        [
            'images' => 'https://cdn.myanimelist.net/images/anime/11/81755.jpg',
            'title' => 'Natsume\'s Book of Friend',
            'studio' => 'Shuka',
            'genre' => 'Slice of Life',
            'score' => '89',
            'status' => 'Finish',
            'notes' => 'Emotional story and great visuals.',
        ],
        [
            'images' => 'https://cdn.myanimelist.net/images/anime/1708/138033.jpg',
            'title' => 'The Apothecary Diaries',
            'studio' => 'TOHO animation',
            'genre' => 'Mystery, Drama',
            'score' => '87',
            'status' => 'Watching',
            'notes' => '',
        ],
        [
            'images' => 'https://cdn.myanimelist.net/images/anime/1426/139388.jpg',
            'title' => 'SPY×FAMILY CODE: White',
            'studio' => 'Wit Studio, CloverWorks',
            'genre' => 'Comedy, Action',
            'score' => '85',
            'status' => 'To Watch',
            'notes' => 'Looking forward to this fun series.',
        ],
    ];
    // Bagian Autentikasi
    public function showLoginForm()
    {
        return view('login');
    }

    public function login(Request $request)
    {
        $username = $request->input('username');
        $password = $request->input('password');

        if ($username === 'naju' && $password === 'najumr') {
            return redirect()->route('dashboard', ['username' => $username]);
        }

        return back()->withErrors(['login' => 'Username atau password salah']);
    }

    public function logout()
    {
        return redirect()->route('login');
    }

    // Bagian Dashboard
    private static $carouselItems =[
        [
            'images' => 'https://cdn.myanimelist.net/images/anime/1015/138006.jpg',
            'title' => 'Frieren: Beyond Journey\'s End',
            'studio' => 'Madhouse',
            'genre' => 'Adventure, Fantasy',
            'score' => '97',
            'status' => 'Rewatching',
            'notes' => 'Peaceful but emotional.',
        ],
        [
            'images' => 'https://cdn.myanimelist.net/images/anime/1263/132759.jpg',
            'title' => 'Bungo Stray Dogs',
            'studio' => 'Bones',
            'genre' => 'Action, Mystery',
            'score' => '95',
            'status' => 'Finish',
            'notes' => 'Bunch of plot twists. I personally hate you, Fedya.',
        ],
        [
            'images' => 'https://cdn.myanimelist.net/images/anime/1708/138033.jpg',
            'title' => 'The Apothecary Diaries',
            'studio' => 'TOHO animation',
            'genre' => 'Mystery, Drama',
            'score' => '87',
            'status' => 'Watching',
            'notes' => '',
        ],
    ];

    public function dashboard(Request $request)
    {
        $username = $request->query('username');

        if (!$username) {
            return redirect()->route('login')->withErrors(['login' => 'Silakan login dulu.']);
        }

        $animelistItems = self::$animelistItems;
        return view('dashboard', compact('username', 'animelistItems'));
    }

    // Bagian Profile
    public function profile(Request $request)
    {
        $username = $request->query('username');

        if (!$username) {
            return redirect()->route('login')->withErrors(['login' => 'Silakan login dulu.']);
        }

        return view('profile', compact('username'));
    }

    // Bagian Pengelolaan Anime List
    public function animeList(Request $request)
    {
        $username = $request->query('username');

        if (!$username) {
            return redirect()->route('login')->withErrors(['login' => 'Silakan login dulu.']);
        }

        $animelistItems = self::$animelistItems;

        return view('anime-list', compact('username', 'animelistItems'));
    }

    public function addAnime(Request $request)
    {
        $username = $request->query('username');
        $newItem = [
            'images' => $request->input('imageUrl'),
            'title' => $request->input('title'),
            'studio' => $request->input('studio'),
            'genre' => $request->input('genre'),
            'score' => $request->input('score'),
            'status' => $request->input('status'),
            'notes' => $request->input('notes'),
        ];

        $animelistItems = self::$animelistItems;
        $animelistItems[] = $newItem;

        return view('anime-list', compact('username', 'animelistItems'));
    }
}

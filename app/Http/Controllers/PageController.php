<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
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
    public function dashboard(Request $request)
    {
        $username = $request->query('username');

        if (!$username) {
            return redirect()->route('login')->withErrors(['login' => 'Silakan login dulu.']);
        }

        return view('dashboard', compact('username'));
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

        return view('anime-list', compact('username'));
    }

    public function addList(Request $request)
    {

    }

    public function updateList(Request $request)
    {

    }
    public function delList(Request $request)
    {

    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function showLoginForm()
    {
        return view('login');
    }

    public function login(Request $request)
    {
        $username = $request->input('username');
        $password = $request->input('password');

        if ($username === 'admin' && $password === 'password123') {
            session(['user' => $username]);

            return redirect()->route('dashboard', ['username' => $username]);
        }

        return back()->withErrors(['login' => 'Username atau password salah']);
    }

    public function logout()
    {
        session()->forget('user');
        return redirect()->route('login');
    }
}

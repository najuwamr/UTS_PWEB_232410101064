@extends('components.guest')

@section('title', 'Login')

@section('content')
    <div class="bg-white rounded-xl shadow-lg p-8 w-full max-w-md mx-auto">
        <h2 class="text-3xl font-bold text-ungu-gelap mb-4 text-center">Welcome Back!</h2>
        <p class="text-sm text-gray-600 mb-6 text-center">
            Log in to your <span class="font-semibold text-ungu-normal">AniNote</span> and continue tracking your anime journey.
        </p>

        @if ($errors->has('login'))
            <div class="bg-red-100 text-red-700 px-4 py-2 rounded mb-4">
                {{ $errors->first('login') }}
            </div>
        @endif

        <form method="POST" action="{{ route('login.submit') }}" class="space-y-4">
            @csrf
            <!-- Username -->
            <div>
                <label class="block text-sm font-medium text-gray-700">Username</label>
                <input type="text" name="username" required autofocus value="{{ old('username') }}"
                    class="w-full px-4 py-2 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-ungu-normal">
                @error('username')
                    <p class="text-sm text-red-600 mt-1">{{ $message }}</p>
                @enderror
            </div>

            <!-- Password -->
            <div>
                <label class="block text-sm font-medium text-gray-700">Password</label>
                <input type="password" name="password" required
                    class="w-full px-4 py-2 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-ungu-normal">
                @error('password')
                    <p class="text-sm text-red-600 mt-1">{{ $message }}</p>
                @enderror
            </div>

            <!-- Submit -->
            <button type="submit"
                class="w-full bg-ungu-normal hover:bg-ungu-gelap text-white font-semibold py-2 rounded transition">
                Login
            </button>
        </form>

        <p class="text-center text-sm text-gray-500 mt-6">
            Don't have an account? <span class="text-ungu-normal font-medium">Try demo: naju / najumr</span>
        </p>
    </div>
@endsection

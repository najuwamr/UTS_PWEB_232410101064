<?php

use App\Http\Controllers\PageController;
use Illuminate\Http\Request as HttpRequest;
use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [PageController::class, 'showLoginForm'])->name('login');
Route::post('/login', [PageController::class, 'login'])->name('login.submit');
Route::get('/logout', [PageController::class, 'logout'])->name('logout');

Route::get('/dashboard', [PageController::class, 'dashboard'])->name('dashboard');
Route::get('/profile', [PageController::class, 'profile'])->name('profile');
Route::get('/anime-list', [PageController::class, 'animeList'])->name('anime-list');

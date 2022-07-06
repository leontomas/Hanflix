<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Landing
Route::get('/landing', function () {
    return view('landing');
});

// Home Page
Route::get('/homepage', function () {
    return view('homepage');
});

// Login
Route::get('/login', function () {
    return view('login');
});

// Register
Route::get('/register', function () {
    return view('register');
});

// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

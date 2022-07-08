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
Route::get('/landingpage', function () {
    return view('landingpage');
});

// Home Page
Route::get('/homepage', function () {
    return view('homepage');
});

Route::get('/home1', function () {
    return view('home1');
});


// Login
Route::get('/login', function () {
    return view('login');
});

// Register
Route::get('/register', function () {
    return view('register');
});

// Forgot
Route::get('/forgot', function () {
    return view('forgot');
});

// Forgot Reset
Route::get('/forgot-reset', function () {
    return view('forgot-reset');
});

// Term of Use
Route::get('/term', function () {
    return view('term');
});


// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

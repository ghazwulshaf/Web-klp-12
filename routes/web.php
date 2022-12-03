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

Route::get('/', function () {
    return view('landing.contents.home', [
        'title' => 'Home',
        'style' => 'home',
    ]);
});

Route::get('/login', function () {
    return view('login.contents.login', [
        'title' => 'Login',
    ]);
});

Route::get('/sign-up', function () {
    return view('login.contents.signup', [
        'title' => 'Sign Up',
    ]);
});
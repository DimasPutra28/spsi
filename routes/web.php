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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return view('landing');
});

Route::get('/dashboard', function () {
    return view('dashboard');
});

Route::get('/login', function () {
    return view('login.login');
});

Route::get('/register', function () {
    return view('register');
});

Route::get('/resetpassword', function () {
    return view('reset');
});

Route::get('/validreset', function () {
    return view('resetnotif');
});

Route::get('/decoration', function () {
    return view('decoration.vendordecor');
});

Route::get('/detaildecor', function () {
    return view('decoration.detildecor');
});

Route::get('/vendorfotovideo', function () {
    return view('fotografer.vendorfoto');
});

Route::get('/detailfotovideo', function () {
    return view('fotografer.detilvendor');
});

Route::get('/vendormakeup', function () {
    return view('makeup.vendormakeup');
});

Route::get('/detailmakeup', function () {
    return view('makeup.detilmakeup');
});

Route::get('/paket', function () {
    return view('paket.paket');
});

Route::get('/detailpaket1', function () {
    return view('paket.dpaket1');
});

Route::get('/detailpaket2', function () {
    return view('paket.dpaket1');
});

Route::get('/detailpaket3', function () {
    return view('paket.dpaket1');
});

Route::get('/venue', function () {
    return view('venue.venue');
});

Route::get('/venueprofil', function () {
    return view('venue.venueprofil');
});

Route::get('/detailvenue', function () {
    return view('venue.detilvenue');
});

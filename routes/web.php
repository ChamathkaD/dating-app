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
    return view('welcome');
});

Route::get('/home', function () {
    return view('home');
})->middleware(['auth'])->name('home');


Route::get('/profile', function () {
    return view('partials.profile');
})->name('profile');


Route::get('/profile/edit', function () {
    return view('partials.profile_edit');
})->name('profile.edit');


require __DIR__.'/auth.php';
require __DIR__.'/socialite.php';

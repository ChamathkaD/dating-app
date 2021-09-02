<?php

use Illuminate\Support\Facades\Route;
use Laravel\Socialite\Facades\Socialite;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

Route::get('/auth/facebook/redirect', function () {
    return Socialite::driver('facebook')->redirect();
})->name('social.facebook.redirect');

Route::get('/auth/facebook/callback', function () {

    $facebookUser = Socialite::driver('facebook')->stateless()->user();

    $user = User::where(['email' => $facebookUser->getEmail()])->first();

    if (!$user){
        $user = User::create([
            'name' => $facebookUser->getName(),
            'email' => $facebookUser->getEmail(),
            'provider' => 'facebook',
            'provider_id' => $facebookUser->getId(),
            'image' => $facebookUser->getAvatar(),
        ]);
    }

    Auth::login($user);

    return redirect()->route('home');

   })->name('social.facebook.callback');


Route::get('/auth/google/redirect', function () {

    return Socialite::driver('google')->redirect();

})->name('social.google.redirect');

Route::get('/auth/google/callback', function () {

    $googleUser = Socialite::driver('google')->stateless()->user();

    $user = User::where(['email' => $googleUser->getEmail()])->first();

    if(!$user){
        $user = User::create([
            'name' => $googleUser->getName(),
            'email' => $googleUser->getEmail(),
            'provider' => 'google',
            'provider_id' => $googleUser->getId(),
            'image' => $googleUser->getAvatar(),
        ]);
    }

    Auth::login($user);

    return redirect()->route('home');

})->name('social.google.callback');

<?php

use Illuminate\Support\Facades\Route;
use Laravel\Socialite\Facades\Socialite;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\SocialiteController;


Route::get('/auth/{provider}/redirect',[socialiteController::class, 'redirectToProvider'])->name('social.redirect');
Route::get('/auth/{provider}/callback',[socialiteController::class, 'handleProviderCallback'])->name('social.callback');



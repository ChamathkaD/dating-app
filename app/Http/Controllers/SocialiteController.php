<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;
use App\Models\User;

class SocialiteController extends Controller
{
  public function redirectToProvider(string $provider){
      return Socialite::driver($provider)->redirect();
  }

  public function handleProviderCallback(string $provider){

      $socialUser = Socialite::driver($provider)->stateless()->user();

      $user = User::where(['email' => $socialUser->getEmail()])->first();

      if (!$user){
          $user = User::create([
              'name' => $socialUser->getName(),
              'email' => $socialUser->getEmail(),
              'provider' => $provider,
              'provider_id' => $socialUser->getId(),
              'image' => $socialUser->getAvatar(),
          ]);
      }

      Auth::login($user);

      return redirect()->route('home');

  }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Socialite;
use App\Services\SocialGoogleAccountService;

class SocialAuthGoogleController extends Controller
{	/**
   * Create a redirect method to facebook api.
   *
   * @return void
   */
   
    public function redirect()
    {
        return Socialite::driver('google')->redirect();
    }

    /**
     * Return a callback method from facebook api.
     *
     * @return callback URL from facebook
     */
    public function callback(SocialGoogleAccountService $service)
    {
    	// $user = Socialite::driver('facebook')->user();
        $user = $service->createOrGetUser(Socialite::driver('google')->user());
        auth()->login($user);
        
        // echo $user;
  //       dd($user);
		// echo "<br>";
		// echo $user->name;
		// echo "<br>";
		// echo $user->email;
		// echo "<br>";
		// echo $user->avatar;
        return redirect()->to('/home');
     }
}

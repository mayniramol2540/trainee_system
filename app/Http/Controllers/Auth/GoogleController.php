<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

use Socialite;

class GoogleController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // echo "string";
        // die();
        $this->middleware('guest')->except('logout');


    }
     public function redirectToGoogle()
    {
        // echo "string";
        // die();
        // return Socialite::driver('google')->redirect();
         return Socialite::driver('google')->redirect();
    }

    /**
     * Obtain the user information from GitHub.
     *
     * @return \Illuminate\Http\Response
     */
    public function handleGoogleCallback()
    {

       $user = Socialite::driver('google')->stateless()->user();
    
   // echo "<pre>";
     print_r(dd($user));
     // echo $user->id;
     // echo "<br>";
     // echo $user->name;
     // echo "<br>";
     // echo $user->email;
     // echo "<br>";
     // echo $user->avatar;
       // return $user->token;
  
    }
}

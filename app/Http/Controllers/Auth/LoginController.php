<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;





use Socialite;

class LoginController extends Controller
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
    //after log in 
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     // * @return void
     */
    // facebook login
    public function __construct()
    {
         $this->middleware('guest')->except('logout');

    }
    
    //  public function redirectToProvider()
    // {
    //     return Socialite::driver('facebook')->redirect();
    // }

    /**
     * Obtain the user information from GitHub.
     *
     // * @return \Illuminate\Http\Response
     */
    // public function handleProviderCallback()
    // {
    //     //  echo "string";
    //     // die();
    //     $user = Socialite::driver('facebook')->user();
    //  // /*  echo "<pre>";*/
    //  // // print_r(dd($user));
    //  echo $user->id;
    //  echo "<br>";
    //  echo $user->name;
    //  echo "<br>";
    //  echo $user->email;
    //  echo "<br>";
    //  echo $user->avatar;
    //  //    // $user->name;
    //     //  $user = $service->createOrGetUser(Socialite::driver('facebook')->user());
    //     // auth()->login($user);
    //     // return redirect()->to('/home');
    // }
  
   
}

<?php

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
Route::get('/regiss', function () {
    return view('regiss');
});

Auth::routes();

Route::get('/home', 'HomeController@index');

Route::prefix('/admin')->group(function(){
	Route::get('/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
	Route::post('/login', 'Auth\AdminLoginController@login')->name('admin.login.submitt');
	Route::get('/', 'AdminController@index')->name('admin.dashboard');
});
// 
// 
// facebook
Route::get('login/facebook', 'SocialAuthFacebookController@redirect');
Route::get('login/facebook/callback', 'SocialAuthFacebookController@callback');

// Route::get('login/facebook', 'Auth\LoginController@redirectToProvider');
// Route::get('login/facebook/callback', 'Auth\LoginController@handleProviderCallback'
// );

// google
// Route::get('login/google', 'Auth\GoogleController@redirectToGoogle');
// Route::get('login/google/callback', 'Auth\GoogleController@handleGoogleCallback');
Route::get('login/google', 'SocialAuthGoogleController@redirect');
Route::get('login/google/callback', 'SocialAuthGoogleController@callback');
<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/


Route::get('/', function()
{
	return View::make('home');
});

Route::post('home', function()
{
	return View::make('home');
});

// route to show the login form
Route::get('login', array('uses' => 'HomeController@showLogin'));

// route to process the form
Route::post('login', array('uses' => 'HomeController@doLogin'))->before('guest');

// route to logout
Route::get('logout', array('uses' => 'HomeController@doLogout'))->before('auth');

// route to profile
Route::get('profile', function()
{
	return View::make('profile');
})->before('auth');

// route for settings
Route::get('settings', function()
{
	return View::make('settings');
})->before('auth');

Route::post('settings/theme', array('uses' => 'SettingsController@doTheme'))->before('auth');


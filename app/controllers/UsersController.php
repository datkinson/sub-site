<?php

class UsersController extends BaseController {

	public function showWelcome()
	{
		return View::make('login');
	}

	public function doRegister()
	{
		$rules = array(
    'name'=>'required|alpha|min:2',
    'username'=>'required|alpha|min:2',
    'email'=>'required|email|unique:users',
    'password'=>'required|alpha_num|between:6,12|confirmed',
    'password_confirmation'=>'required|alpha_num|between:6,12'
    );
		$validator = Validator::make(Input::all(), $rules);
 
    if ($validator->passes()) {
      // validation has passed, save user in DB
			$user = new User;
	    $user->name = Input::get('name');
	    $user->username = Input::get('username');
	    $user->email = Input::get('email');
	    $user->password = Hash::make(Input::get('password'));
	    $user->save();

			// Now create default settings entry
			$settings = new Settings;
			$settings->user_id = $user->id;
			$settings->theme = 'default';
			$settings->save();
	    return Redirect::to('/')->with('flash_notice', 'Thanks for registering!');
    } else {
      // validation has failed, display error messages   
			return Redirect::to('/register')->with('flash_notice', 'The following errors occurred')->withErrors($validator)->withInput();
    }
	}

}

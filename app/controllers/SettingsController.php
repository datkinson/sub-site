<?php

class SettingsController extends BaseController {

	public function showWelcome()
	{
		return View::make('settings');
	}

	public function doTheme()
	{
		// process the form
		// validate the info, create rules for the inputs
		$rules = array(
			'themes'    => 'required' // make sure the theme field was selected
		);

		// run the validation rules on the inputs from the form
		$validator = Validator::make(Input::all(), $rules);

		// if the validator fails, redirect back to the form
		if ($validator->fails()) {
			return Redirect::to('/settings')
				->withErrors($validator) // send back all errors to the login form
				->with('flash_error', 'Please select a valid theme.')
				->withInput(); // send back the input so that we can repopulate the form
		} else {
			$theme = Input::get('themes');
			$settings = Settings::where('user_id' ,'=', Auth::user()->id)->find(1);
			$settings->theme = $theme;
			$settings->save();
			return Redirect::to('/settings')->with('flash_notice', 'You have changed your theme to '.$theme.'.');

		}
	}

}

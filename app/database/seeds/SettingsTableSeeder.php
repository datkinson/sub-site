<?php
// app/database/seeds/SettingsTableSeeder.php

class SettingsTableSeeder extends Seeder
{

	public function run()
	{
		DB::table('settings')->delete();
		Settings::create(array(
			'user_id'     => '1',
			'theme' => 'default'
		));
	}

}



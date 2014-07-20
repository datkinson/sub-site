<?php
// app/database/seeds/UserTableSeeder.php

class UserTableSeeder extends Seeder
{

	public function run()
	{
		DB::table('users')->delete();
		User::create(array(
			'name'     => 'Daniel Atkinson',
			'username' => 'datkinson',
			'email'    => 'dan@atkinson.io',
			'password' => Hash::make('awesome'),
		));
	}

}



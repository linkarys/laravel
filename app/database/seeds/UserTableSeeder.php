<?php

class UserTableSeeder extends Seeder {

	public function run()
	{
		// Uncomment the below to wipe the table clean before populating
		DB::table('user')->truncate();

		$user = array(
			array('name'=>'yang', 'phone'=>'15006481845', 'nickname'=>'ryan', 'passwd'=>'cool me'),
			array('name'=>'hui wang', 'phone'=>'15865545298', 'nickname'=>'hui', 'passwd'=>'cool me'),
		);

		// Uncomment the below to run the seeder
		DB::table('user')->insert($user);
	}

}

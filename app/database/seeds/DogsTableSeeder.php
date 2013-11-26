<?php

class DogsTableSeeder extends Seeder {

	public function run()
	{
		// Uncomment the below to wipe the table clean before populating
		// DB::table('dogs')->truncate();

		$dogs = array(
			array('name' => 'suzi', 'age' => 5),
			array('name' => 'Suzy', 'age' => 9),
		);

		// Uncomment the below to run the seeder
		DB::table('dogs')->insert($dogs);
	}

}

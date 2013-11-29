<?php

class DogsTableSeeder extends Seeder {

	public function run() {
		// Uncomment the below to wipe the table clean before populating
		// DB::table('dogs')->truncate();

		$dogs = array(
			array('name' => 'Lorem', 'age' => 5),
			array('name' => 'ipsum', 'age' => 9),
			array('name' => 'dolor', 'age' => 5),
			array('name' => 'sit', 'age' => 8),
			array('name' => 'amet', 'age' => 19),
		);

		// Uncomment the below to run the seeder
		DB::table('dogs')->insert($dogs);
	}

}

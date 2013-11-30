<?php

class DogsTableSeeder extends Seeder {

	public function run() {
		// Uncomment the below to wipe the table clean before populating
		// DB::table('dogs')->truncate();

		$dogs = array(
			array('name' => 'Lorem', 'age' => 5, 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')),
			array('name' => 'ipsum', 'age' => 9, 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')),
			array('name' => 'dolor', 'age' => 5, 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')),
			array('name' => 'sit', 'age' => 8, 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')),
			array('name' => 'amet', 'age' => 19, 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')),
		);

		// Uncomment the below to run the seeder
		DB::table('dogs')->insert($dogs);
	}

}

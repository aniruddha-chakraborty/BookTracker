<?php

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */




	public function run()
	{
	//	Eloquent::unguard();
		$this->user();
	}

	public function user()
	{
		//$usersTable = \Models\User;
		$faker = Faker\Factory::create();
		echo $faker->name;
		
	}

	public function books()
	{

	}

	public function writter()
	{

	}

}

<?php

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */


	 protected $divisions = [
					 ['Barisal','বরিশাল'],
					 ['Chittagong','চট্টগ্রাম'],
					 ['Dhaka','ঢাকা'],
					 ['Khulna','খুলনা'],
					 ['Rajshahi','রাজশাহী'],
					 ['Rangpur','রংপুর'],
					 ['Sylhet','সিলেট'],
				 ];

	public function run()
	{
	//	Eloquent::unguard();
		$this->user();
	}

	public function user()
	{
		$faker = Faker\Factory::create();
		$casus =  \hedronium\Casus\Casus();

		$random_generator = $casus->getGenerator();

			for ($i=0; $i < 500; $i++) {
				# code...

				DB::table('users_table')->insert([
				            'username' 		=> $faker->username,
				            'first_name' 	=> $faker->firstName,
				            'last_name' 	=> $faker->lastName,
										'phn_number' 	=> $faker->tollFreePhoneNumber,
										'email'			 	=> $faker->email,
										'password'		=> Hash::input('123456'),
										'library_name'=> $faker->company.' ' . $faker->companySuffix,
										//'district'		=>
				]);

			}

	}

	public function books()
	{

	}

	public function writter()
	{

	}

}

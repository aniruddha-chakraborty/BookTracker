<?php

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */


	 protected $districs = [
	             ['Dhaka','ঢাকা'],
	             ['Faridpur','ফরিদপুর'],
	             ['Gazipur','গাজীপুর'],
	             ['Gopalganj','গোপালগঞ্জ'],
	             ['Jamalpur','জামালপুর'],
	             ['Kishoreganj','কিশোরগঞ্জ'],
	             ['Madaripur','মাদারীপুর'],
	             ['Manikganj','মানিকগঞ্জ'],
	             ['Munshiganj','মুন্সিগঞ্জ'],
	             ['Mymensingh','ময়মনসিং'],
	             ['Narayanganj','নারায়াণগঞ্জ'],
	             ['Narsingdi','নরসিংদী'],
	             ['Netrokona','নেত্রকোনা'],
	             ['Rajbari','রাজবাড়ি'],
	             ['Shariatpur','শরীয়তপুর'],
	             ['Sherpur','শেরপুর'],
	             ['Tangail','টাঙ্গাইল'],
	             ['Bogra','বগুড়া'],
	             ['Joypurhat','জয়পুরহাট'],
	             ['Naogaon','নওগাঁ'],
	             ['Natore','নাটোর'],
	             ['Nawabganj','নবাবগঞ্জ'],
	             ['Pabna','পাবনা'],
	             ['Rajshahi','রাজশাহী'],
	             ['Sirajgonj','সিরাজগঞ্জ'],
	             ['Dinajpur','দিনাজপুর'],
	             ['Gaibandha','গাইবান্ধা'],
	             ['Kurigram','কুড়িগ্রাম'],
	             ['Lalmonirhat','লালমনিরহাট'],
	             ['Nilphamari','নীলফামারী'],
	             ['Panchagarh','পঞ্চগড়'],
	             ['Rangpur','রংপুর'],
	             ['Thakurgaon','ঠাকুরগাঁও'],
	             ['Barguna','বরগুনা'],
	             ['Barisal','বরিশাল'],
	             ['Bhola','ভোলা'],
	             ['Jhalokati','ঝালকাঠি'],
	             ['Patuakhali','পটুয়াখালী'],
	             ['Pirojpur','পিরোজপুর'],
	             ['Bandarban','বান্দরবান'],
	             ['Brahmanbaria','ব্রাহ্মণবাড়িয়া'],
	             ['Chandpur','চাঁদপুর'],
	             ['Chittagong','চট্টগ্রাম'],
	             ['Comilla','কুমিল্লা'],
	             ['Cox\'s Bazar','কক্স বাজার'],
	             ['Feni','ফেনী'],
	             ['Khagrachari','খাগড়াছড়ি'],
	             ['Lakshmipur','লক্ষ্মীপুর'],
	             ['Noakhali','নোয়াখালী'],
	             ['Rangamati','রাঙ্গামাটি'],
	             ['Habiganj','হবিগঞ্জ'],
	             ['Maulvibazar','মৌলভীবাজার'],
	             ['Sunamganj','সুনামগঞ্জ'],
	             ['Sylhet','সিলেট'],
	             ['Bagerhat','বাগেরহাট'],
	             ['Chuadanga','চুয়াডাঙ্গা'],
	             ['Jessore','যশোর'],
	             ['Jhenaidah','ঝিনাইদহ'],
	             ['Khulna','খুলনা'],
	             ['Kushtia','কুষ্টিয়া'],
	             ['Magura','মাগুরা'],
	             ['Meherpur','মেহেরপুর'],
	             ['Narail','নড়াইল'],
	             ['Satkhira','সাতক্ষীরা'],
	         ];
			protected $places = [];



	public function run()
	{
	//	Eloquent::unguard();
		//$this->user();
		$this->zilla();
	}

	public function user()
	{
		$faker = Faker\Factory::create();

		//echo $random_generator = $casus->getGenerator();

			for ($i=0; $i < 500; $i++) {
				# code...
				$zilla =  rand(1,64);

				DB::table('users_table')->insert([
				            'username' 		=> $faker->username,
				            'first_name' 	=> $faker->firstName,
				            'last_name' 	=> $faker->lastName,
										'phn_number' 	=> $faker->tollFreePhoneNumber,
										'email'			 	=> $faker->email,
										'password'		=> bcrypt('123456'),
										'library_name'=> $faker->company.' ' . $faker->companySuffix,
										'zilla'				=> $zilla
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

	public function zilla()
	{

			foreach ($this->districs as $value) {
				# code...
				DB::table('zilla')->insert([
				      	'zilla_name' => $value[0],
								'zilla_bn'	 => $value[1]
				]);

			}

	}

	public function place()
	{

		DB::table('place')->insert([
						'zilla_name' => $value[0],
						'zilla_bn'	 => $value[1]
		]);

	}

}

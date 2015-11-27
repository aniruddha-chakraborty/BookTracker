<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDistrictTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{

		Schema::create('zilla',function (Blueprint $table){

				$table->increments('id');
				$table->char('zilla_name',255);
				$table->char('zilla_bn',255);
				$table->timestamps();

		});
}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('zilla');
	}

}

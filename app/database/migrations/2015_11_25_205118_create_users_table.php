<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	 public function up()
	 {
			 Schema::create('users_table',function (Blueprint $table){

					 $table->increments('id');
					 $table->char('username',50);
					 $table->char('first_name',100);
					 $table->char('last_name',100);
					 $table->integer('phn_number');
					 $table->char('email',255);
					 $table->char('password',255);
					 $table->longText('library_name');
					 $table->integer('zilla');
					 $table->integer('place');
					 $table->longText('address');
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
		Schema::drop('uses_table');

	}

}

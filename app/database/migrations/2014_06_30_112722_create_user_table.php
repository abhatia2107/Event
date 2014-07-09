<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		
		Schema::create('users', function($table){
			$table->increments("users_id");
			$table->string("firstname",20);
			$table->string("lastname",20);
			$table->string("email",50);
			$table->string("address",255);
			$table->string("facebook",255);
			$table->string("twitter",255);
			$table->string("profile_pic",255);
			$table->string("company_name",30);
			$table->string("city");
			$table->integer("mobile_no");
			$table->string("password",80);
			$table->Timestamps();

		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('users');
	}

}

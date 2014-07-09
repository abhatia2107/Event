<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCreateEventTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('create_event', function($table){
			$table->increments("event_id");
			$table->integer("usertable_id")->foreign('usertable_id')->references('users_id')->on('users');
			$table->string("event_title",30);
			$table->string("location");
			$table->string("date",8);
			$table->string("time",10);
			$table->string("event_logo");
			$table->longText("description");
			$table->string("event_venue");
			$table->string("event_type",30);
			$table->string("event_topic",30);
			$table->string("event_banner");
			$table->string("org_name",50);
			$table->string("org_des",255);
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
		Schema::drop('create_event');
	}

}

<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMatchesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//
		Schema::create('matches', function($table)
   		{
        	$table->increments('id');
        	$table->integer('summoner_id');
        	$table->string('result');
        	$table->string('champion');
        	$table->string('type');
        	$table->string('time');
        	$table->string('duration');
        	$table->string('your_team');
        	$table->string('enemy_team');
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
		//
		Schema::drop('matches');
	}

}

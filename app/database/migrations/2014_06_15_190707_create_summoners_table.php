<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSummonersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//
		Schema::create('summoners', function($table)
   		{
        	$table->increments('id');
        	$table->integer('user_id');
        	$table->string('summoner_name');
        	$table->integer('summoner_confirmed');
        	$table->string('league');
        	$table->string('division');
        	$table->string('server');
        	$table->string('kda');
        	$table->string('win_lose');
        	$table->string('best_champions');
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
		Schema::drop('summoners');
	}

}

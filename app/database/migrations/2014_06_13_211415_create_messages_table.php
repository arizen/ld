<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMessagesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//
		Schema::create('messages', function($table)
   		{
        	$table->increments('id');
        	$table->integer('from_id');
        	$table->integer('to_id');
        	$table->string('subject');
        	$table->string('content');
        	$table->boolean('read');
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
		Schema::drop('messages');
	}

}

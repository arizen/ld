<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStatsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//
		Schema::create('stats', function($table)
   		{
        	$table->increments('id');
        	$table->string('summoner_id');
            $table->string('level');
            $table->string('lifetime_ip_earned');
        	$table->string('games_played');
        	$table->string('kills');
        	$table->string('deaths');
        	$table->string('assists');
        	$table->string('minions_killed');
        	$table->string('monsters_killed');
        	$table->string('gold_earned');
        	$table->string('double_kills');      	
        	$table->string('triple_kills'); 
        	$table->string('quadra_kills'); 
        	$table->string('penta_kills');
        	$table->string('turrets_destroyed');
        	$table->string('most_kills');
        	$table->string('most_deaths');
        	$table->string('largest_killing_spree');
        	$table->string('largest_critical_strike');
        	$table->string('longest_game');
        	$table->string('longest_time_alive');
        	$table->string('time_spent_dead');
        	$table->string('healing_done');
        	$table->string('damage_dealt');
        	$table->string('physical_damage_dealt');
        	$table->string('magic_damage_dealt');
        	$table->string('damage_taken');
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
		Schema::drop('stats');
	}

}

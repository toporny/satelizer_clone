<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersLevelProgressTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('users_level_progress', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('user_id')->unsigned();
			$table->integer('dictionary_id')->unsigned();
			$table->string('levels_progress')->nullable();
			//TODO: make a constraint for MySQL in future but current sqlite 3.11.0 doens't support  constraint
			//$table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');;

		});

		// Schema::table('users_level_progress', function ($table) {
		// 	$table->integer('user_id')->unsigned();
		// 	$table->foreign('user_id')->references('id')->on('users');
		// });

	}

// w tabeli user?
// [en_EN: {'lvl1':'yes', 'lvl2':'yes', 'lvl3':'yes', 'lvl4':'yes', 'lvl5':'yes', 'lvl6':'yes', 'lvl7':'yes'}

// users_level_progress
// user_id, available_dictionaries_id | levels_progress: 
// 5 | 6 (pl_PL) | {'lvl1':0, 'lvl2':1, 'lvl3':0, 'lvl4':2, 'lvl5':0, 'lvl6':0, 'lvl7':0 }
// 5 | 5 (de_DE) | {'lvl1':0, 'lvl2':1, 'lvl3':0, 'lvl4':2, 'lvl5':0, 'lvl6':0, 'lvl7':0 }
// 5 | 4 (fr_FR) | {'lvl1':0, 'lvl2':1, 'lvl3':0, 'lvl4':2, 'lvl5':0, 'lvl6':0, 'lvl7':0 }
// 5 | 3 (ru_RU) | {'lvl1':0, 'lvl2':1, 'lvl3':0, 'lvl4':2, 'lvl5':0, 'lvl6':0, 'lvl7':0 }
// 5 | 2 (es_ES) | {'lvl1':0, 'lvl2':1, 'lvl3':0, 'lvl4':2, 'lvl5':0, 'lvl6':0, 'lvl7':0 }
// 5 | 6 (en_EN) | {'lvl1':0, 'lvl2':1, 'lvl3':0, 'lvl4':2, 'lvl5':0, 'lvl6':0, 'lvl7':0 }
 


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('users_level_progress');
	}

}

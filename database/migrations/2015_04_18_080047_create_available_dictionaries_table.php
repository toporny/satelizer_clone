<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAvailableDictionariesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('available_dictionaries', function (Blueprint $table) {
            $table->increments('id');
            //$table->bigInteger('user_id');
            //$table->string('remembered_json');
            $table->string('language_id');
            $table->string('language_name');
            $table->string('available_languages');
            //$table->timestamp('updated')->nullable();
            //$table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('available_dictionaries');
    }
}

<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDictionaryEnglishTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dictionary_english', function (Blueprint $table) {
            $table->increments('id');
            $table->string('word')->index();
            $table->string('de_DE')->nullable();
            $table->string('fr_FR')->nullable();
            $table->string('ru_RU')->nullable();
            $table->string('es_ES')->nullable();
            $table->string('pl_PL')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('dictionary_english');
    }
}

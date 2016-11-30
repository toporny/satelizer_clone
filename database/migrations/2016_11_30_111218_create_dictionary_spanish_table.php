<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDictionarySpanishTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dictionary_es', function (Blueprint $table) {
            $table->increments('id');
            $table->string('word')->index();
            $table->string('en_EN_translations')->nullable();
            $table->string('en_EN_examples')    ->nullable();
            $table->string('de_DE_translations')->nullable();
            $table->string('de_DE_examples')    ->nullable();
            $table->string('fr_FR_translations')->nullable();
            $table->string('fr_FR_examples')    ->nullable();
            $table->string('ru_RU_translations')->nullable();
            $table->string('ru_RU_examples')    ->nullable();
            $table->string('pl_PL_translations')->nullable();
            $table->string('pl_PL_examples')    ->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('dictionary_es');
    }
}

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
        Schema::create('dictionary_en', function (Blueprint $table) {
            $table->increments('id');
            $table->string('word')->index();
            $table->string('de_DE_translations')->nullable();
            $table->string('de_DE_examples')    ->nullable();
            $table->string('fr_FR_translations')->nullable();
            $table->string('fr_FR_examples')    ->nullable();
            $table->string('ru_RU_translations')->nullable();
            $table->string('ru_RU_examples')    ->nullable();
            $table->string('es_ES_translations')->nullable();
            $table->string('es_ES_examples')    ->nullable();
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
        Schema::dropIfExists('dictionary_en');
    }
}

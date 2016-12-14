<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUnknownWordsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('unknown_words_0k', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedInteger('user_id');
            $table->unsignedSmallInteger('language_id');
            $table->unsignedSmallInteger('word_id');
            $table->tinyInteger('status');
            $table->timestamps();
            $table->index('user_id');
            $table->index('word_id');
        });

        Schema::create('unknown_words_1k', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedInteger('user_id');
            $table->unsignedSmallInteger('language_id');
            $table->unsignedSmallInteger('word_id');
            $table->tinyInteger('status');
            $table->timestamps();
            $table->index('user_id');
            $table->index('word_id');
        });

        Schema::create('unknown_words_2k', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedInteger('user_id');
            $table->unsignedSmallInteger('language_id');
            $table->unsignedSmallInteger('word_id');
            $table->tinyInteger('status');
            $table->timestamps();
            $table->index('user_id');
            $table->index('word_id');
        });

        Schema::create('unknown_words_3k', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedInteger('user_id');
            $table->unsignedSmallInteger('language_id');
            $table->unsignedSmallInteger('word_id');
            $table->tinyInteger('status');
            $table->timestamps();
            $table->index('user_id');
            $table->index('word_id');
        });

        Schema::create('unknown_words_4k', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedInteger('user_id');
            $table->unsignedSmallInteger('language_id');
            $table->unsignedSmallInteger('word_id');
            $table->tinyInteger('status');
            $table->timestamps();
            $table->index('user_id');
            $table->index('word_id');
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('unknown_words_1k');
        Schema::dropIfExists('unknown_words_2k');
        Schema::dropIfExists('unknown_words_3k');
        Schema::dropIfExists('unknown_words_4k');
    }
}

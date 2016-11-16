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
        Schema::create('unknown_words', function (Blueprint $table) {
            $table->increments('id');
            $table->bigInteger('user_id');
            $table->integer('language'); // like "  available dictionaries" table
            $table->integer('range'); // 1-500, 501-1000, 1001-1500
            $table->text('json_words');
        });
    }
// user_id (INT) | language | range(0-10) |  words (długi json taki jak poniżej)
// [{"w":"door","d":"2016-11-16T16:14"},{"w":"word","d":"2016-11-16T16:14"}])

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('unknown_words');
    }
}

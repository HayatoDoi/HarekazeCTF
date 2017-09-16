<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class QuestionGenres extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //ジャンルと問題の対応付け
        Schema::create('question_genres', function (Blueprint $table)
        {
            $table->increments('id');//主キー
            $table->integer('question_id');//問題ID
            $table->integer('genre_id');//ジャンルID
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('question_genres');
    }
}

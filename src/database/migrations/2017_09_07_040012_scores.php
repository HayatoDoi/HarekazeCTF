<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Scores extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //得点データ
        Schema::create('scores', function (Blueprint $table)
        {
            $table->increments('id');//主キー
            $table->integer('user_id');//ユーザID
            $table->integer('question_id');//問題ID
            $table->timestamp('time');//挿入時間
            $table->string('flag');//フラグ(合っているか,間違っているかわからない Question tableと合わせて確認)
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('scores');
    }
}

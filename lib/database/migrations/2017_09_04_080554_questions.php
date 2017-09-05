<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Questions extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //CTFの問題一覧
        Schema::create('questions', function (Blueprint $table)
        {
            $table->increments('id');//主キー
            $table->string('name');//問題名
            $table->string('flag');//フラグ
            $table->integer('score');//スコア
            $table->text('sentence');//問題文
            $table->timestamp('public_time');//公開時間 null->即公開
            $table->integer('user_id');//作成者のユーザID
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('questions');
    }
}

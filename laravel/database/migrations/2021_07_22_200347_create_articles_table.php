<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArticlesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('articles', function (Blueprint $table) {
            // $table->カラム属性

            // 属性：整数　役割：記事を識別するID
            $table->bigIncrements('id');
            // 属性：最大255文字の文字列　役割：記事のタイトル
            $table->string('title');
            // 属性：制限なしの文字列　役割：記事の本文
            $table->text('body');
            // 属性：整数　役割：記事を投稿したユーザーのID
            $table->bigInteger('user_id');
            // 外部キー制約：
            $table->foreign('user_id')->references('id')->on('users');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('articles');
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('movie_interviews', function (Blueprint $table) {
            $table->comment('');
            $table->increments('id');
            $table->unsignedInteger('junior_training_id')->index('movie_interviews_junior_training_id_foreign')->comment('junior_training_id');
            $table->unsignedInteger('senior_training_id')->index('movie_interviews_senior_training_id_foreign')->comment('senior_training_id');
            $table->tinyInteger('disp_flag')->comment('表示フラグ');
            $table->string('preview_pass')->comment('プレビューパスワード');
            $table->string('title')->comment('タイトル');
            $table->string('movietag')->comment('動画タグ');
            $table->tinyInteger('interview_type')->comment('指導医/研修医/担当者');
            $table->boolean('flg_shidoui')->comment('指導医フラグ');
            $table->boolean('flg_kensyuui')->comment('研修医フラグ');
            $table->boolean('flg_tanntou')->comment('担当者フラグ');
            $table->dateTime('pub_date')->comment('公開日');
            $table->string('free_title')->comment('フリー入力(タイトル)');
            $table->text('free_content')->comment('フリー入力(内容)');
            $table->string('link_url')->comment('ボタンのリンク先');
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
        Schema::dropIfExists('movie_interviews');
    }
};

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
        Schema::create('contents', function (Blueprint $table) {
            $table->comment('');
            $table->increments('id');
            $table->tinyInteger('disp_flag')->comment('表示フラグ');
            $table->integer('event_id')->nullable()->comment('実際のイベントID');
            $table->string('youtubeid')->comment('動画ID');
            $table->string('tag')->comment('ハッシュタグ');
            $table->string('title')->comment('タイトル');
            $table->string('subtitle')->comment('サブタイトル');
            $table->string('pub_date')->comment('公開日');
            $table->string('category')->comment('カテゴリ');
            $table->text('body')->comment('HTML body');
            $table->text('memo')->comment('備考欄');
            $table->timestamps();
            $table->boolean('access')->default(true);
            $table->text('series')->comment('シリーズ名');
            $table->tinyInteger('target')->comment('対象 0:すべて 1:医学生 2:研修医');
            $table->longText('HTMLbody_1')->comment('HTMLbody_1');
            $table->longText('HTMLbody_2')->comment('HTMLbody_2');
            $table->longText('CSS_1')->comment('CSS_1');
            $table->longText('CSS_2')->comment('CSS_2');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('contents');
    }
};

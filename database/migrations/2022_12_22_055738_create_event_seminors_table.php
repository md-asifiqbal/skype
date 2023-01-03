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
        Schema::create('event_seminors', function (Blueprint $table) {
            $table->comment('');
            $table->increments('id');
            $table->unsignedInteger('event_master_id')->index('event_seminors_event_master_id_foreign')->comment('event_master_id');
            $table->tinyInteger('disp_flag')->comment('表示フラグ');
            $table->integer('disporder')->comment('表示順');
            $table->string('preview_pass')->comment('プレビューパスワード');
            $table->string('titlename')->comment('小見出し');
            $table->string('title')->comment('タイトル');
            $table->string('subtitle')->comment('サブタイトル');
            $table->string('starttime')->comment('開始時間');
            $table->string('finishtime')->comment('終了時間');
            $table->text('contents')->comment('内容');
            $table->text('comment')->comment('備考');
            $table->string('youtubeurl')->comment('YoutubeURL');
            $table->string('minititle1')->comment('タイトル1');
            $table->text('minicontents1')->comment('内容1');
            $table->string('minititle2')->comment('タイトル2');
            $table->text('minicontents2')->comment('内容2');
            $table->string('minititle3')->comment('タイトル3');
            $table->text('minicontents3')->comment('内容3');
            $table->string('minititle4')->comment('タイトル4');
            $table->text('minicontents4')->comment('内容4');
            $table->string('minititle5')->comment('タイトル5');
            $table->text('minicontents5')->comment('内容5');
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
        Schema::dropIfExists('event_seminors');
    }
};

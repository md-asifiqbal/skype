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
        Schema::create('event_masters', function (Blueprint $table) {
            $table->comment('');
            $table->increments('id');
            $table->unsignedInteger('event_year_id')->index('event_masters_event_year_id_foreign')->comment('event_year_id');
            $table->unsignedInteger('event_place_id')->index('event_masters_event_place_id_foreign')->comment('event_place_id');
            $table->tinyInteger('disp_flag')->comment('disp_flag');
            $table->string('preview_pass')->comment('プレビューパスワード');
            $table->integer('disporder')->comment('disporder');
            $table->string('eventdate')->comment('開催日');
            $table->string('eventday')->comment('曜日');
            $table->string('eventstarttime')->comment('開始時間');
            $table->string('eventfinishtime')->comment('終了時間');
            $table->string('placename')->comment('場所名称');
            $table->string('placeaddress')->comment('場所住所');
            $table->boolean('real_event_flag')->default(true)->comment('リアル');
            $table->boolean('online_event_flag')->default(false)->comment('オンライン');
            $table->boolean('free_event_flag')->default(false)->comment('フリーオンライン');
            $table->boolean('free_event_kenshui_flag')->default(false)->comment('フリーオンライン（研修医用）');
            $table->text('introduce')->comment('紹介文');
            $table->text('comment')->comment('コメント文');
            $table->boolean('eventcurrent')->default(false)->comment('現在の出来事');
            $table->date('eventdate_value')->comment('開催日');
            $table->string('eventstoptime')->comment('最終受付時間');
            $table->text('access')->comment('アクセス');
            $table->text('remark')->comment('備考');
            $table->string('youtube')->comment('動画(YoutubeURL)');
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
        Schema::dropIfExists('event_masters');
    }
};

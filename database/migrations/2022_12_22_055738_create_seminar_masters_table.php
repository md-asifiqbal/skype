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
        Schema::create('seminar_masters', function (Blueprint $table) {
            $table->comment('');
            $table->increments('id');
            $table->tinyInteger('disp_flag')->comment('表示フラグ');
            $table->dateTime('datetime_start')->comment('開催日時');
            $table->dateTime('datetime_finish')->comment('終了日時');
            $table->string('place_name')->comment('開催場所名(施設名・オンラインなど)');
            $table->string('place_address')->comment('開催場所の住所(オンラインの場合は無し)');
            $table->string('title')->comment('イベントのタイトル');
            $table->string('introduce')->comment('イベントの紹介文');
            $table->dateTime('publish_start')->comment('掲載開始日時');
            $table->dateTime('publish_end')->comment('掲載終了日時');
            $table->string('contents_url')->comment('コンテンツリンク先');
            $table->string('contents_thumbnail_url')->comment('サムネイルURL');
            $table->timestamps();
            $table->string('user_target')->comment('イベントの対象(医学生・研修医)');
            $table->string('thankspage_text')->comment('予約登録後に表示されるメッセージ');
            $table->string('user_target_college')->comment('イベントの対象大学');
            $table->boolean('message_show_flag')->comment('当日用メッセージを表示するか');
            $table->dateTime('message_publish_start')->comment('当日用メッセージを出す日時');
            $table->string('message_text')->comment('当日用メッセージのテキスト');
            $table->string('message_button_url')->comment('当日用メッセージボタンのURL');
            $table->string('message_button_title')->comment('当日用メッセージボタンのタイトル');
            $table->boolean('message_mail_flag')->comment('参加者に当日用メールを送るか');
            $table->boolean('benefits_flag')->comment('予約特典を表示するか');
            $table->string('benefits_text')->comment('予約特典に表示されるテキスト');
            $table->string('benefits_button_url')->comment('予約特典に表示されるボタンのURL');
            $table->string('benefits_button_title')->comment('予約特典に表示されるボタンのタイトル');
            $table->boolean('flag_online')->comment('オンラインイベントかどうか');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('seminar_masters');
    }
};

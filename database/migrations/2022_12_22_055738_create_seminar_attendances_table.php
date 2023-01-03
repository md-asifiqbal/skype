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
        Schema::create('seminar_attendances', function (Blueprint $table) {
            $table->comment('');
            $table->increments('id');
            $table->string('user_id')->comment('ユーザID');
            $table->integer('seminar_id')->comment('セミナーID');
            $table->boolean('checkin_flg')->comment('チェックイン履歴');
            $table->dateTime('checkin_date')->comment('チェックイン日時');
            $table->string('transportation')->comment('参加手段');
            $table->timestamps();
            $table->boolean('send_mail_flag')->comment('リマインドメールが送られたか');
            $table->boolean('send_mail_eventday_flag')->comment('リマインドメール(当日)が送られたか');
            $table->boolean('send_mail_eventdaybefore_flag')->comment('リマインドメール(前日)が送られたか');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('seminar_attendances');
    }
};

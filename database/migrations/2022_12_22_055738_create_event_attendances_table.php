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
        Schema::create('event_attendances', function (Blueprint $table) {
            $table->comment('');
            $table->increments('id');
            $table->unsignedInteger('user_id')->index('event_attendances_user_id_foreign')->comment('user_id');
            $table->unsignedInteger('event_master_id')->index('event_attendances_event_master_id_foreign')->comment('event_master_id');
            $table->tinyInteger('disp_flag')->comment('表示フラグ');
            $table->timestamps();
            $table->boolean('checkin_flg')->nullable()->comment('チェックイン履歴');
            $table->dateTime('checkin_date')->nullable()->comment('チェックイン日時');
            $table->string('transportation')->comment('参加手段');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('event_attendances');
    }
};

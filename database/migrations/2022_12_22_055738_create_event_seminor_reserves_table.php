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
        Schema::create('event_seminor_reserves', function (Blueprint $table) {
            $table->comment('');
            $table->increments('id');
            $table->unsignedInteger('event_attendance_id')->index('event_seminor_reserves_event_attendance_id_foreign')->comment('event_attendances_id');
            $table->unsignedInteger('event_seminor_id')->index('event_seminor_reserves_event_seminor_id_foreign')->comment('event_seminor_id');
            $table->boolean('checkin_flg')->nullable()->comment('チェックイン履歴');
            $table->dateTime('checkin_date')->nullable()->comment('チェックイン日時');
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
        Schema::dropIfExists('event_seminor_reserves');
    }
};

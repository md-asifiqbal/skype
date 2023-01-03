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
        Schema::create('event_bus_reserves', function (Blueprint $table) {
            $table->comment('');
            $table->increments('id');
            $table->unsignedInteger('event_attendance_id')->index('event_bus_reserves_event_attendance_id_foreign')->comment('event_attendances_id');
            $table->unsignedInteger('event_bus_id')->index('event_bus_reserves_event_bus_id_foreign')->comment('event_bus_id');
            $table->boolean('checkin_flg')->nullable()->comment('チェックイン履歴');
            $table->dateTime('checkin_date')->nullable()->comment('チェックイン日時');
            $table->tinyInteger('trip_direction')->comment('乗車方向');
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
        Schema::dropIfExists('event_bus_reserves');
    }
};

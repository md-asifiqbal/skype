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
        Schema::table('event_bus_reserves', function (Blueprint $table) {
            $table->foreign(['event_bus_id'])->references(['id'])->on('event_buses');
            $table->foreign(['event_attendance_id'])->references(['id'])->on('event_attendances');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('event_bus_reserves', function (Blueprint $table) {
            $table->dropForeign('event_bus_reserves_event_bus_id_foreign');
            $table->dropForeign('event_bus_reserves_event_attendance_id_foreign');
        });
    }
};

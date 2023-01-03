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
        Schema::table('event_seminor_reserves', function (Blueprint $table) {
            $table->foreign(['event_seminor_id'])->references(['id'])->on('event_seminors');
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
        Schema::table('event_seminor_reserves', function (Blueprint $table) {
            $table->dropForeign('event_seminor_reserves_event_seminor_id_foreign');
            $table->dropForeign('event_seminor_reserves_event_attendance_id_foreign');
        });
    }
};

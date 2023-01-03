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
        Schema::table('event_exhibitors', function (Blueprint $table) {
            $table->foreign(['hospital_id'])->references(['id'])->on('hospitals');
            $table->foreign(['event_master_id'])->references(['id'])->on('event_masters');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('event_exhibitors', function (Blueprint $table) {
            $table->dropForeign('event_exhibitors_hospital_id_foreign');
            $table->dropForeign('event_exhibitors_event_master_id_foreign');
        });
    }
};

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
        Schema::table('event_masters', function (Blueprint $table) {
            $table->foreign(['event_year_id'])->references(['id'])->on('event_years');
            $table->foreign(['event_place_id'])->references(['id'])->on('event_places');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('event_masters', function (Blueprint $table) {
            $table->dropForeign('event_masters_event_year_id_foreign');
            $table->dropForeign('event_masters_event_place_id_foreign');
        });
    }
};

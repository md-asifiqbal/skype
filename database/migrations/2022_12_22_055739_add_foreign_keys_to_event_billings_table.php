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
        Schema::table('event_billings', function (Blueprint $table) {
            $table->foreign(['event_exhibitor_id'])->references(['id'])->on('event_exhibitors');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('event_billings', function (Blueprint $table) {
            $table->dropForeign('event_billings_event_exhibitor_id_foreign');
        });
    }
};

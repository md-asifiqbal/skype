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
        Schema::create('event_master_online_free_rooms', function (Blueprint $table) {
            $table->comment('');
            $table->increments('id');
            $table->integer('event_master_online_times_id');
            $table->integer('event_master_online_exhibitors_id');
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
        Schema::dropIfExists('event_master_online_free_rooms');
    }
};

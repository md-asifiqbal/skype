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
        Schema::create('event_master_online_packages', function (Blueprint $table) {
            $table->comment('');
            $table->increments('id');
            $table->integer('event_master_online_time_id');
            $table->integer('event_master_online_package_room_id');
            $table->integer('event_master_online_exhibitors_id');
            $table->integer('package_group_id');
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
        Schema::dropIfExists('event_master_online_packages');
    }
};

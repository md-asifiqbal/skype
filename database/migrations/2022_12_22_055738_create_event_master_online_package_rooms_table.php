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
        Schema::create('event_master_online_package_rooms', function (Blueprint $table) {
            $table->comment('');
            $table->increments('id');
            $table->string('package_name');
            $table->string('zoom_user_email');
            $table->string('zoom_user_password');
            $table->string('meeting_id');
            $table->string('room_password');
            $table->integer('event_masters_online_id');
            $table->string('zoom_url');
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
        Schema::dropIfExists('event_master_online_package_rooms');
    }
};

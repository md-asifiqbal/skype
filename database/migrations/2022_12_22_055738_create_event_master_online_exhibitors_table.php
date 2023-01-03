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
        Schema::create('event_master_online_exhibitors', function (Blueprint $table) {
            $table->comment('');
            $table->increments('id');
            $table->integer('event_masters_online_id');
            $table->integer('hospital_id');
            $table->integer('order');
            $table->integer('rank');
            $table->string('zoom_user_email');
            $table->string('zoom_user_password');
            $table->boolean('display_flag')->default(false);
            $table->string('zoom_url');
            $table->string('meeting_id');
            $table->string('room_password');
            $table->integer('group_id')->nullable();
            $table->integer('group_serial')->nullable();
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
        Schema::dropIfExists('event_master_online_exhibitors');
    }
};

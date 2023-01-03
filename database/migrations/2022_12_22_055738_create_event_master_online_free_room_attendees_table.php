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
        Schema::create('event_master_online_free_room_attendees', function (Blueprint $table) {
            $table->comment('');
            $table->increments('id');
            $table->string('registered_number');
            $table->integer('event_master_online_free_room_id');
            $table->integer('user_id');
            $table->boolean('status')->default(true);
            $table->timestamps();
            $table->timestamp('canceled_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('event_master_online_free_room_attendees');
    }
};

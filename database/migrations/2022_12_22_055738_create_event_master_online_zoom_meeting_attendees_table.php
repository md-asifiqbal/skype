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
        Schema::create('event_master_online_zoom_meeting_attendees', function (Blueprint $table) {
            $table->comment('');
            $table->increments('id');
            $table->integer('event_master_online_id');
            $table->integer('event_master_online_exhibitors_id');
            $table->string('meeting_id', 200);
            $table->string('uu_id', 200);
            $table->string('user_id', 200);
            $table->string('user_name', 200);
            $table->integer('type')->comment('1:固定パッケージから選択 2:グループから選択 3:自由選択式');
            $table->string('device', 200);
            $table->string('ip_address', 200);
            $table->string('location', 200);
            $table->string('data_center', 200);
            $table->string('connection_type', 200);
            $table->string('join_time', 200);
            $table->string('leave_time', 200);
            $table->string('recording', 200);
            $table->string('pc_name', 200);
            $table->string('domain', 200);
            $table->string('mac_addr', 200);
            $table->string('harddisk_id', 200);
            $table->string('version', 200);
            $table->string('leave_reason', 200);
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
        Schema::dropIfExists('event_master_online_zoom_meeting_attendees');
    }
};

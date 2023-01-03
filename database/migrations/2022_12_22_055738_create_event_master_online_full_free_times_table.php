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
        Schema::create('event_master_online_full_free_times', function (Blueprint $table) {
            $table->comment('');
            $table->increments('id');
            $table->integer('event_master_online_full_time_exhibitors_id')->comment('OnlinefulltimeイベントexhibitorID (Foreign Key)');
            $table->time('start_time')->comment('開始時間');
            $table->time('end_time')->comment('終了時間');
            $table->integer('serial');
            $table->integer('added_by');
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
        Schema::dropIfExists('event_master_online_full_free_times');
    }
};

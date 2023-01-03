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
        Schema::create('event_printlogs', function (Blueprint $table) {
            $table->comment('');
            $table->increments('id');
            $table->integer('user_id')->comment('user_id');
            $table->integer('event_master_id')->comment('event_master_id');
            $table->dateTime('print_date');
            $table->string('print_desk');
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
        Schema::dropIfExists('event_printlogs');
    }
};

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
        Schema::create('event_master_online_groups', function (Blueprint $table) {
            $table->comment('');
            $table->increments('id');
            $table->tinyInteger('group_no');
            $table->string('group_name');
            $table->text('group_text')->nullable();
            $table->integer('event_masters_online_id');
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
        Schema::dropIfExists('event_master_online_groups');
    }
};

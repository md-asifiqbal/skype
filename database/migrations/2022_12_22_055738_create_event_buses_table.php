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
        Schema::create('event_buses', function (Blueprint $table) {
            $table->comment('');
            $table->increments('id');
            $table->unsignedInteger('event_master_id')->index('event_buses_event_master_id_foreign')->comment('event_master_id');
            $table->string('place')->comment('発着地');
            $table->string('time_to')->comment('往路発時間');
            $table->string('time_from')->comment('復路発時間');
            $table->text('contents')->comment('内容');
            $table->text('comment')->comment('備考');
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
        Schema::dropIfExists('event_buses');
    }
};

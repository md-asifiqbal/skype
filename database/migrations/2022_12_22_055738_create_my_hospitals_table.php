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
        Schema::create('my_hospitals', function (Blueprint $table) {
            $table->comment('');
            $table->increments('id');
            $table->integer('user_id')->comment('user_id');
            $table->integer('event_master_id')->comment('event_master_id');
            $table->integer('hospital_id')->comment('hospital_id');
            $table->tinyInteger('visit_flag')->comment('訪問フラグ');
            $table->dateTime('visithr')->comment('訪問時間');
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
        Schema::dropIfExists('my_hospitals');
    }
};

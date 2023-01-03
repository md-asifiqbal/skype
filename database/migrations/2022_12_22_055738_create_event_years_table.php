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
        Schema::create('event_years', function (Blueprint $table) {
            $table->comment('');
            $table->increments('id');
            $table->tinyInteger('disp_flag')->comment('表示フラグ');
            $table->integer('disporder')->comment('表示順');
            $table->integer('year')->comment('開催年');
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
        Schema::dropIfExists('event_years');
    }
};

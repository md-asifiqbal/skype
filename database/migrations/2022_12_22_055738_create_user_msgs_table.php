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
        Schema::create('user_msgs', function (Blueprint $table) {
            $table->comment('');
            $table->increments('id');
            $table->integer('disp_flag')->comment('表示フラグ');
            $table->dateTime('msg_date')->comment('日付');
            $table->text('msg')->comment('メッセージ');
            $table->boolean('new_flg')->comment('NEWフラグ');
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
        Schema::dropIfExists('user_msgs');
    }
};

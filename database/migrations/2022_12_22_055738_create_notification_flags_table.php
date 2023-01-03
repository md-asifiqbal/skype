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
        Schema::create('notification_flags', function (Blueprint $table) {
            $table->comment('');
            $table->increments('id');
            $table->string('user_id')->comment('ユーザID');
            $table->string('common_hp_id')->comment('病院ID');
            $table->unsignedTinyInteger('notification_flag')->default(0)->comment('flag: 0:通知オフ 1:通知オン');
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
        Schema::dropIfExists('notification_flags');
    }
};

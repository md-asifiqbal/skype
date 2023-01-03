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
        Schema::create('talk_user', function (Blueprint $table) {
            $table->comment('');
            $table->unsignedBigInteger('talk_id')->index('talk_id')->comment('会話ID');
            $table->string('user_id')->index('user_id')->comment('ユーザID');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('talk_user');
    }
};

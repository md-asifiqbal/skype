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
        Schema::create('messages', function (Blueprint $table) {
            $table->comment('');
            $table->bigIncrements('id')->comment('ID');
            $table->unsignedBigInteger('talk_id')->index('talk_id')->comment('会話ID');
            $table->text('message')->comment('message');
            $table->string('send_user_id')->comment('メッセージを送ったユーザーのID');
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
        Schema::dropIfExists('messages');
    }
};

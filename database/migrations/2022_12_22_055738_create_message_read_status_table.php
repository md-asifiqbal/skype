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
        Schema::create('message_read_status', function (Blueprint $table) {
            $table->comment('');
            $table->unsignedBigInteger('message_id')->index('message_id')->comment('メッセージID');
            $table->string('user_id')->index('user_id')->comment('ユーザID');
            $table->unsignedTinyInteger('status')->nullable()->comment('status : 0: 未読 1: 既読');
            $table->timestamp('readed_at')->useCurrentOnUpdate()->useCurrent()->comment('既読日時');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('message_read_status');
    }
};

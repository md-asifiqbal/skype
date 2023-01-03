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
        Schema::create('receiver_broadcast_mail', function (Blueprint $table) {
            $table->comment('');
            $table->unsignedInteger('broadcast_mail_id')->index('receiver_broadcast_mail_broadcast_mail_id_foreign');
            $table->unsignedInteger('broadcast_mail_receiver_id')->index('receiver_broadcast_mail_broadcast_mail_receiver_id_foreign');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('receiver_broadcast_mail');
    }
};

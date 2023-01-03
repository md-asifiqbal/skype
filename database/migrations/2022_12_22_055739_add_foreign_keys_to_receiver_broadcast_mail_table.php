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
        Schema::table('receiver_broadcast_mail', function (Blueprint $table) {
            $table->foreign(['broadcast_mail_receiver_id'])->references(['id'])->on('broadcast_mail_receivers')->onDelete('CASCADE');
            $table->foreign(['broadcast_mail_id'])->references(['id'])->on('broadcast_mails')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('receiver_broadcast_mail', function (Blueprint $table) {
            $table->dropForeign('receiver_broadcast_mail_broadcast_mail_receiver_id_foreign');
            $table->dropForeign('receiver_broadcast_mail_broadcast_mail_id_foreign');
        });
    }
};

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
        Schema::table('broadcast_mails', function (Blueprint $table) {
            $table->foreign(['hospital_id'])->references(['id'])->on('hospitals')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('broadcast_mails', function (Blueprint $table) {
            $table->dropForeign('broadcast_mails_hospital_id_foreign');
        });
    }
};

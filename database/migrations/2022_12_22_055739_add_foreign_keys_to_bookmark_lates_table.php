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
        Schema::table('bookmark_lates', function (Blueprint $table) {
            $table->foreign(['user_id'])->references(['id'])->on('users');
            $table->foreign(['hospital_id'])->references(['id'])->on('hospitals');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('bookmark_lates', function (Blueprint $table) {
            $table->dropForeign('bookmark_lates_user_id_foreign');
            $table->dropForeign('bookmark_lates_hospital_id_foreign');
        });
    }
};

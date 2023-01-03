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
        Schema::table('senior_interviews', function (Blueprint $table) {
            $table->foreign(['senior_training_id'])->references(['id'])->on('senior_trainings')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('senior_interviews', function (Blueprint $table) {
            $table->dropForeign('senior_interviews_senior_training_id_foreign');
        });
    }
};

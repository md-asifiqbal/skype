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
        Schema::table('doctor_interviews', function (Blueprint $table) {
            $table->foreign(['senior_training_id'])->references(['id'])->on('senior_trainings')->onDelete('CASCADE');
            $table->foreign(['junior_training_id'])->references(['id'])->on('junior_trainings');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('doctor_interviews', function (Blueprint $table) {
            $table->dropForeign('doctor_interviews_senior_training_id_foreign');
            $table->dropForeign('doctor_interviews_junior_training_id_foreign');
        });
    }
};

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
        Schema::table('doctor_interview_blocks', function (Blueprint $table) {
            $table->foreign(['doctor_interview_id'])->references(['id'])->on('doctor_interviews')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('doctor_interview_blocks', function (Blueprint $table) {
            $table->dropForeign('doctor_interview_blocks_doctor_interview_id_foreign');
        });
    }
};

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
        Schema::table('senior_interview_blocks', function (Blueprint $table) {
            $table->foreign(['senior_interview_id'])->references(['id'])->on('senior_interviews')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('senior_interview_blocks', function (Blueprint $table) {
            $table->dropForeign('senior_interview_blocks_senior_interview_id_foreign');
        });
    }
};

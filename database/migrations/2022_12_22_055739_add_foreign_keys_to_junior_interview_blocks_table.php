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
        Schema::table('junior_interview_blocks', function (Blueprint $table) {
            $table->foreign(['junior_interview_id'])->references(['id'])->on('junior_interviews')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('junior_interview_blocks', function (Blueprint $table) {
            $table->dropForeign('junior_interview_blocks_junior_interview_id_foreign');
        });
    }
};

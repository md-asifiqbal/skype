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
        Schema::table('senior_program_schedules', function (Blueprint $table) {
            $table->foreign(['senior_program_id'])->references(['id'])->on('senior_programs');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('senior_program_schedules', function (Blueprint $table) {
            $table->dropForeign('senior_program_schedules_senior_program_id_foreign');
        });
    }
};

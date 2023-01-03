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
        Schema::table('junior_program_schedules', function (Blueprint $table) {
            $table->foreign(['junior_program_id'])->references(['id'])->on('junior_programs');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('junior_program_schedules', function (Blueprint $table) {
            $table->dropForeign('junior_program_schedules_junior_program_id_foreign');
        });
    }
};

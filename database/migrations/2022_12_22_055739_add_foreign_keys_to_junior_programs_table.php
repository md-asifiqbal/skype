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
        Schema::table('junior_programs', function (Blueprint $table) {
            $table->foreign(['junior_training_id'])->references(['id'])->on('junior_trainings')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('junior_programs', function (Blueprint $table) {
            $table->dropForeign('junior_programs_junior_training_id_foreign');
        });
    }
};

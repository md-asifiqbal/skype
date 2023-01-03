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
        Schema::table('senior_trainings', function (Blueprint $table) {
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
        Schema::table('senior_trainings', function (Blueprint $table) {
            $table->dropForeign('senior_trainings_hospital_id_foreign');
        });
    }
};

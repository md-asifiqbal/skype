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
        Schema::create('senior_program_schedules', function (Blueprint $table) {
            $table->comment('');
            $table->increments('id');
            $table->unsignedInteger('senior_program_id')->index('senior_program_schedules_senior_program_id_foreign')->comment('senior_program_id');
            $table->string('grade')->comment('学年');
            $table->integer('order')->comment('順序');
            $table->integer('sch')->comment('期間（ブロック単位）');
            $table->string('name')->comment('研修名称');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('senior_program_schedules');
    }
};

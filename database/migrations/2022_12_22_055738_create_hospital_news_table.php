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
        Schema::create('hospital_news', function (Blueprint $table) {
            $table->comment('');
            $table->increments('id');
            $table->unsignedInteger('hospital_id');
            $table->string('title');
            $table->string('category');
            $table->string('link');
            $table->timestamp('start_date')->nullable();
            $table->timestamp('end_date')->nullable();
            $table->boolean('medical_student');
            $table->boolean('medical_intern');
            $table->boolean('others');
            $table->boolean('non_member');
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
        Schema::dropIfExists('hospital_news');
    }
};

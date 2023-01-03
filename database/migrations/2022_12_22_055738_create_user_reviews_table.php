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
        Schema::create('user_reviews', function (Blueprint $table) {
            $table->comment('');
            $table->increments('id');
            $table->unsignedInteger('hospital_id');
            $table->unsignedInteger('user_id');
            $table->string('category');
            $table->string('review_source');
            $table->string('program_type');
            $table->integer('status')->default(1);
            $table->string('point')->default('良い点');
            $table->string('year')->nullable();
            $table->string('grade')->nullable();
            $table->text('content');
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
        Schema::dropIfExists('user_reviews');
    }
};

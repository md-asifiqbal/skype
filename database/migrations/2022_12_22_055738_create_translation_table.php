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
        Schema::create('translation', function (Blueprint $table) {
            $table->comment('');
            $table->increments('id');
            $table->bigInteger('user_id');
            $table->text('input_text');
            $table->text('output_text');
            $table->bigInteger('character_count');
            $table->timestamps();
            $table->bigInteger('total_translation_count');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('translation');
    }
};

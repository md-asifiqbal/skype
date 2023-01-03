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
        Schema::create('bookmark_hospitals', function (Blueprint $table) {
            $table->comment('');
            $table->increments('id');
            $table->unsignedInteger('user_id')->index('bookmark_hospitals_user_id_foreign')->comment('user_id');
            $table->unsignedInteger('hospital_id')->index('bookmark_hospitals_hospital_id_foreign')->comment('hospital_id');
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
        Schema::dropIfExists('bookmark_hospitals');
    }
};

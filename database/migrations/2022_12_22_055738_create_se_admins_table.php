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
        Schema::create('se_admins', function (Blueprint $table) {
            $table->comment('');
            $table->increments('id');
            $table->string('email')->comment('email');
            $table->string('password')->comment('パスワード');
            $table->rememberToken()->comment('Auth用RememberToken');
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
        Schema::dropIfExists('se_admins');
    }
};

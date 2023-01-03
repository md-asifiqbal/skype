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
        Schema::create('sim_users', function (Blueprint $table) {
            $table->comment('');
            $table->increments('id');
            $table->string('email')->comment('email');
            $table->string('password')->comment('パスワード');
            $table->rememberToken()->comment('Auth用RememberToken');
            $table->string('lastname')->comment('姓');
            $table->string('firstname')->comment('名');
            $table->string('college_name_current')->comment('在籍大学名');
            $table->string('grade')->comment('学年');
            $table->string('plane_password')->comment('パスワード（非暗号化）');
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
        Schema::dropIfExists('sim_users');
    }
};

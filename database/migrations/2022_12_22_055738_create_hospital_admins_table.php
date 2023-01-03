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
        Schema::create('hospital_admins', function (Blueprint $table) {
            $table->comment('');
            $table->increments('id');
            $table->unsignedInteger('hospital_id')->index('hospital_admins_hospital_id_foreign')->comment('hospital_id');
            $table->boolean('permission')->default(true)->comment('ログイン権限');
            $table->string('email')->comment('email');
            $table->string('email_backup')->comment('email退避用');
            $table->string('password')->comment('パスワード');
            $table->string('remember_token')->nullable()->default('1')->comment('Auth用');
            $table->boolean('access_flg1')->default(true)->comment('ページH201へのアクセス権');
            $table->boolean('access_flg2')->default(true)->comment('ページH202へのアクセス権');
            $table->boolean('access_flg3')->default(true)->comment('ページH203へのアクセス権');
            $table->boolean('access_flg4')->default(true)->comment('ページH204へのアクセス権');
            $table->boolean('access_flg5')->default(true)->comment('ページH205へのアクセス権');
            $table->boolean('access_flg6')->default(true)->comment('ページH206へのアクセス権');
            $table->boolean('access_flg7')->default(true)->comment('ブース訪問学生リストへのアクセス権');
            $table->boolean('access_flg8')->default(false)->comment('ブース訪問学生リストCSVダウンロードへのアクセス権');
            $table->boolean('access_flg9')->default(false)->comment('eレジオファーのアクセス権');
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
        Schema::dropIfExists('hospital_admins');
    }
};

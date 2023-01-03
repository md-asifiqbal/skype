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
        Schema::create('access_rankings', function (Blueprint $table) {
            $table->comment('');
            $table->increments('id');
            $table->string('ranking_nm')->comment('ランキング名');
            $table->string('category')->comment('カテゴリー識別子');
            $table->string('title1')->nullable()->comment('1位表示名');
            $table->string('url1')->nullable()->comment('1位URL');
            $table->string('pref1')->nullable()->comment('1位都道府県名');
            $table->string('title2')->nullable()->comment('2位表示名');
            $table->string('url2')->nullable()->comment('2位URL');
            $table->string('pref2')->nullable()->comment('2位都道府県名');
            $table->string('title3')->nullable()->comment('3位表示名');
            $table->string('url3')->nullable()->comment('3位URL');
            $table->string('pref3')->nullable()->comment('3位都道府県名');
            $table->string('title4')->nullable()->comment('4位表示名');
            $table->string('url4')->nullable()->comment('4位URL');
            $table->string('pref4')->nullable()->comment('4位都道府県名');
            $table->string('title5')->nullable()->comment('5位表示名');
            $table->string('url5')->nullable()->comment('5位URL');
            $table->string('pref5')->nullable()->comment('5位都道府県名');
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
        Schema::dropIfExists('access_rankings');
    }
};

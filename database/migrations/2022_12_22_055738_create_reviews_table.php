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
        Schema::create('reviews', function (Blueprint $table) {
            $table->comment('');
            $table->increments('id');
            $table->string('hospitalname')->comment('病院名');
            $table->string('category')->comment('カテゴリー');
            $table->string('point')->comment('いい点／気になる点');
            $table->string('year')->comment('投稿年度');
            $table->string('grade')->comment('投稿者の学年');
            $table->text('content')->comment('内容');
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
        Schema::dropIfExists('reviews');
    }
};

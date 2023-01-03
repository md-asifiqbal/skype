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
        Schema::create('senior_interviews', function (Blueprint $table) {
            $table->comment('');
            $table->increments('id');
            $table->unsignedInteger('senior_training_id')->index('senior_interviews_senior_training_id_foreign')->comment('senior_training_id');
            $table->tinyInteger('disp_flag')->comment('表示フラグ');
            $table->string('preview_pass')->comment('プレビューパスワード');
            $table->string('title')->comment('タイトル');
            $table->dateTime('pub_date')->comment('公開日');
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
        Schema::dropIfExists('senior_interviews');
    }
};

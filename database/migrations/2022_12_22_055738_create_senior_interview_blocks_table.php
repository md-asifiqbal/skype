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
        Schema::create('senior_interview_blocks', function (Blueprint $table) {
            $table->comment('');
            $table->increments('id');
            $table->unsignedInteger('senior_interview_id')->index('senior_interview_blocks_senior_interview_id_foreign')->comment('senior_interview_id');
            $table->tinyInteger('disp_flag')->comment('表示フラグ');
            $table->integer('disporder')->comment('表示順');
            $table->tinyInteger('block_type')->comment('ブロック種類');
            $table->boolean('pic_flg')->comment('写真フラグ');
            $table->text('name')->comment('名前');
            $table->string('birthpace')->comment('出身地');
            $table->string('univ')->comment('出身大学');
            $table->text('licenseyear')->comment('医師免許取得年');
            $table->text('keireki')->comment('職歴・経歴');
            $table->text('gakkaishikaku')->comment('所属学会・資格・その他役職');
            $table->text('freespace')->comment('フリースペース');
            $table->string('title')->comment('タイトル');
            $table->string('interviewname')->comment('お名前');
            $table->text('interviewtext')->comment('本文');
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
        Schema::dropIfExists('senior_interview_blocks');
    }
};

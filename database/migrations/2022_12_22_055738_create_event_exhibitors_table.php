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
        Schema::create('event_exhibitors', function (Blueprint $table) {
            $table->comment('');
            $table->increments('id');
            $table->unsignedInteger('hospital_id')->index('event_exhibitors_hospital_id_foreign')->comment('hospital_id');
            $table->unsignedInteger('event_master_id')->index('event_exhibitors_event_master_id_foreign')->comment('event_master_id');
            $table->string('contact_tel')->nullable()->comment('当日の緊急時の連絡先');
            $table->string('contact_name')->nullable()->comment('当日の担当者名');
            $table->text('contact_division')->nullable()->comment('部署・役職');
            $table->text('division1_name')->nullable()->comment('出展申込代表機関名1');
            $table->string('division1_tel')->nullable()->comment('出展申込代表機関名1電話番号');
            $table->text('division2_name')->nullable()->comment('出展申込代表機関名2');
            $table->string('division2_tel')->nullable()->comment('出展申込代表機関名2電話番号');
            $table->text('division3_name')->nullable()->comment('出展申込代表機関名3');
            $table->string('division3_tel')->nullable()->comment('出展申込代表機関名3電話番号');
            $table->integer('booths')->nullable()->comment('ブース数');
            $table->text('nameboard1')->nullable()->comment('無料看板名1');
            $table->text('nameboard2')->nullable()->comment('無料看板名2');
            $table->text('nameboard3')->nullable()->comment('無料看板名3');
            $table->text('nameboard4')->nullable()->comment('無料看板名4');
            $table->text('nameboard5')->nullable()->comment('無料看板名5');
            $table->text('nameboard6')->nullable()->comment('無料看板名6');
            $table->text('nameboard7')->nullable()->comment('無料看板名7');
            $table->text('nameboard8')->nullable()->comment('無料看板名8');
            $table->text('nameboard9')->nullable()->comment('無料看板名9');
            $table->text('nameboard10')->nullable()->comment('無料看板名10');
            $table->text('seikyu_comment')->comment('請求備考');
            $table->boolean('movie_agreement_flg')->comment('動画撮影同意チェック');
            $table->boolean('comp_flg')->nullable()->comment('レンタル備品入力完了');
            $table->boolean('lock_flg')->nullable()->comment('レンタル備品画面ロック');
            $table->integer('discount')->nullable()->comment('値引き設定');
            $table->text('msg')->nullable()->comment('メッセージ');
            $table->dateTime('pub_date')->comment('公開日時');
            $table->boolean('pub_flg')->comment('公開フラグ');
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
        Schema::dropIfExists('event_exhibitors');
    }
};

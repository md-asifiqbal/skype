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
        Schema::create('event_master_online_full_frees', function (Blueprint $table) {
            $table->comment('');
            $table->increments('id');
            $table->integer('event_master_id')->comment('イベントマスターID');
            $table->date('start_date')->nullable()->comment('イベント開始日付');
            $table->date('end_date')->nullable()->comment('イベント終了日付');
            $table->dateTime('reservation_startdatetime')->comment('予約開始日');
            $table->dateTime('reservsation_enddatetime')->comment('予約終了日');
            $table->integer('package_members')->nullable()->comment('パッケージ人数枠');
            $table->tinyInteger('flag')->comment('0：非公開 1：公開');
            $table->tinyInteger('mypage_cancel_flag')->default(1)->comment('0：非表示 1：表示');
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
        Schema::dropIfExists('event_master_online_full_frees');
    }
};

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
        Schema::create('event_item_reserveds', function (Blueprint $table) {
            $table->comment('');
            $table->increments('id');
            $table->unsignedInteger('event_item_block_id')->index('event_item_reserveds_event_item_block_id_foreign');
            $table->integer('event_exhibitor_id');
            $table->integer('num')->nullable()->comment('申し込み個数');
            $table->text('comment')->nullable()->comment('備考');
            $table->string('color')->nullable()->comment('色');
            $table->string('device1')->nullable()->comment('電流使用機材1');
            $table->string('device1_watt')->nullable()->comment('電流使用機材1ワット数');
            $table->string('device2')->nullable()->comment('電流使用機材2');
            $table->string('device2_watt')->nullable()->comment('電流使用機材2ワット数');
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
        Schema::dropIfExists('event_item_reserveds');
    }
};

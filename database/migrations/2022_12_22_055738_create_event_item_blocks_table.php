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
        Schema::create('event_item_blocks', function (Blueprint $table) {
            $table->comment('');
            $table->increments('id');
            $table->unsignedInteger('event_master_id')->index('event_item_blocks_event_master_id_foreign')->comment('event_master_id');
            $table->integer('block_type')->comment('タイプ');
            $table->integer('count_type')->nullable()->comment('数量タイプ');
            $table->integer('disporder')->nullable()->comment('表示順');
            $table->string('name')->nullable()->comment('名称');
            $table->string('subname')->nullable()->comment('名称補足');
            $table->string('size')->nullable()->comment('サイズ');
            $table->string('item_number')->nullable()->comment('備品No');
            $table->integer('limit')->nullable()->comment('上限数');
            $table->string('tani')->nullable()->comment('数単位');
            $table->integer('price')->nullable()->comment('単価');
            $table->integer('fixedprice1')->nullable()->comment('個別金額1');
            $table->integer('fixedprice2')->nullable()->comment('個別金額2');
            $table->integer('fixedprice3')->nullable()->comment('個別金額3');
            $table->integer('fixedprice4')->nullable()->comment('個別金額4');
            $table->integer('fixedprice5')->nullable()->comment('個別金額5');
            $table->integer('fixedprice6')->nullable()->comment('個別金額6');
            $table->integer('fixedprice7')->nullable()->comment('個別金額7');
            $table->integer('fixedprice8')->nullable()->comment('個別金額8');
            $table->integer('fixedprice9')->nullable()->comment('個別金額9');
            $table->integer('fixedprice10')->nullable()->comment('個別金額10');
            $table->text('attention')->nullable()->comment('注意事項');
            $table->text('colors')->nullable()->comment('色リスト');
            $table->integer('input_lines')->nullable()->comment('入力行数');
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
        Schema::dropIfExists('event_item_blocks');
    }
};

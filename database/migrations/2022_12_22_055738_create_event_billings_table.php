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
        Schema::create('event_billings', function (Blueprint $table) {
            $table->comment('');
            $table->increments('id');
            $table->unsignedInteger('event_exhibitor_id')->index('event_billings_event_exhibitor_id_foreign')->comment('event_exhibitor_id');
            $table->integer('disp_order')->nullable()->comment('表示順序');
            $table->string('company')->nullable()->comment('機関名');
            $table->string('division')->nullable()->comment('所属部署名');
            $table->string('name')->nullable()->comment('担当者名');
            $table->string('tel')->nullable()->comment('電話番号');
            $table->string('fax')->nullable()->comment('FAX番号');
            $table->string('zip')->nullable()->comment('郵便番号');
            $table->string('pref')->nullable()->comment('都道府県');
            $table->string('address')->nullable()->comment('住所');
            $table->string('email')->nullable()->comment('メールドレス');
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
        Schema::dropIfExists('event_billings');
    }
};

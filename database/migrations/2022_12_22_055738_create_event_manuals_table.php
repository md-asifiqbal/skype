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
        Schema::create('event_manuals', function (Blueprint $table) {
            $table->comment('');
            $table->increments('id');
            $table->unsignedInteger('event_master_id')->index('event_manuals_event_master_id_foreign')->comment('event_master_id');
            $table->string('title')->comment('タイトル');
            $table->tinyInteger('online_flag')->nullable()->comment('オンラインフラグ');
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
        Schema::dropIfExists('event_manuals');
    }
};

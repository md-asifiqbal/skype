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
        Schema::create('csv_download_historiys', function (Blueprint $table) {
            $table->comment('');
            $table->increments('id');
            $table->string('csv_filename')->comment('CSVファイル名');
            $table->string('account')->comment('アカウント');
            $table->string('remote_address')->comment('接続元IP');
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
        Schema::dropIfExists('csv_download_historiys');
    }
};

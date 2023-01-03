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
        Schema::create('file_lists', function (Blueprint $table) {
            $table->comment('');
            $table->increments('id');
            $table->tinyInteger('disp_flag')->comment('表示フラグ');
            $table->string('comment')->comment('コメント');
            $table->string('file_name')->comment('ファイル名');
            $table->string('file_url')->comment('ファイルのフルURL');
            $table->string('file_size')->comment('ファイルサイズ');
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
        Schema::dropIfExists('file_lists');
    }
};

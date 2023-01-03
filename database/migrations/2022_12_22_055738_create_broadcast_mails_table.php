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
        Schema::create('broadcast_mails', function (Blueprint $table) {
            $table->comment('');
            $table->increments('id');
            $table->unsignedInteger('hospital_id')->index('broadcast_mails_hospital_id_foreign');
            $table->string('title');
            $table->mediumText('description')->nullable();
            $table->string('file')->nullable();
            $table->boolean('report')->default(false);
            $table->integer('status')->default(1);
            $table->time('send_time');
            $table->date('send_date');
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
        Schema::dropIfExists('broadcast_mails');
    }
};

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
        Schema::table('event_item_reserveds', function (Blueprint $table) {
            $table->foreign(['event_item_block_id'])->references(['id'])->on('event_item_blocks');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('event_item_reserveds', function (Blueprint $table) {
            $table->dropForeign('event_item_reserveds_event_item_block_id_foreign');
        });
    }
};

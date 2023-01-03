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
        Schema::table('event_item_blocks', function (Blueprint $table) {
            $table->foreign(['event_master_id'])->references(['id'])->on('event_masters');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('event_item_blocks', function (Blueprint $table) {
            $table->dropForeign('event_item_blocks_event_master_id_foreign');
        });
    }
};

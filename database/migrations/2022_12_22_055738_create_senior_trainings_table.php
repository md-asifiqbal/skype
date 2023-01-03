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
        Schema::create('senior_trainings', function (Blueprint $table) {
            $table->comment('');
            $table->increments('id');
            $table->unsignedInteger('hospital_id')->index('senior_trainings_hospital_id_foreign')->comment('hospital_id');
            $table->tinyInteger('disp_flag')->comment('表示フラグ');
            $table->string('preview_pass')->comment('プレビューパスワード');
            $table->boolean('flg_sityu')->comment('フラグ：市中病院');
            $table->boolean('flg_daigaku')->comment('フラグ：大学病院');
            $table->boolean('flg_er')->comment('フラグ：ER型救急');
            $table->boolean('flg_nonetochyoku')->comment('フラグ：当直なし');
            $table->boolean('flg_hoiku')->comment('フラグ：保育・託児所');
            $table->boolean('flg_kengaku')->comment('フラグ：見学補助');
            $table->boolean('flg_fukusyoku')->comment('フラグ：復職支援');
            $table->boolean('flg_kaigai')->comment('フラグ：海外留学');
            $table->boolean('flg_jyutaku')->comment('フラグ：住宅補助・寮');
            $table->boolean('flg_gakkai')->comment('フラグ：学会費用補助');
            $table->boolean('flg_800man')->comment('フラグ：800万円〜');
            $table->boolean('flg_kyukyu1st')->comment('フラグ：１次救急');
            $table->boolean('flg_kyukyu2nd')->comment('フラグ：２次救急');
            $table->boolean('flg_kyukyu3rd')->comment('フラグ：３次救急');
            $table->timestamps();
            $table->boolean('input_flg')->comment('入力完了');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('senior_trainings');
    }
};

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
        Schema::create('junior_trainings', function (Blueprint $table) {
            $table->comment('');
            $table->increments('id');
            $table->unsignedInteger('hospital_id')->index('junior_trainings_hospital_id_foreign')->comment('hospital_id');
            $table->tinyInteger('disp_flag')->comment('表示フラグ');
            $table->string('preview_pass')->comment('プレビューパスワード');
            $table->string('fixed_number')->comment('募集定員（各プログラムのトータル数）');
            $table->string('programs')->comment('プログラム数');
            $table->string('advising_doctors')->comment('指導医数');
            $table->text('tour_days')->comment('病院見学日程');
            $table->text('selection_criteria')->comment('選考基準');
            $table->text('application_term');
            $table->text('payment')->comment('給与');
            $table->string('payment1_y')->comment('給与１年次年額');
            $table->string('payment1_m')->comment('給与１年次月額');
            $table->text('payment1_text')->comment('給与１年次自由入力');
            $table->string('payment2_y')->comment('給与２年次年額');
            $table->string('payment2_m')->comment('給与２年次月額');
            $table->text('payment2_text')->comment('給与２年次自由入力');
            $table->string('payment3_y')->comment('給与３年次年額');
            $table->string('payment3_m')->comment('給与３年次月額');
            $table->text('payment3_text')->comment('給与３年次自由入力');
            $table->text('social_insurance')->comment('社会保険');
            $table->boolean('mpli_flg')->comment('医師賠償責任保険有無');
            $table->string('mpli')->comment('医師賠償責任保険');
            $table->text('holidays')->comment('休日・休暇');
            $table->boolean('duty_flg')->comment('当直有無');
            $table->string('duty_month')->comment('当直月回数');
            $table->text('duty')->comment('当直');
            $table->boolean('housing_flg')->comment('住宅補助・寮有無');
            $table->text('housing')->comment('住宅補助・寮');
            $table->boolean('nursery_flg')->comment('院内保育／託児所有無');
            $table->string('nursery')->comment('院内保育／託児所');
            $table->boolean('overseas_education_flg')->comment('海外留学制度（後期時）有無');
            $table->text('overseas_education')->comment('海外留学制度（後期時）');
            $table->boolean('returning_supports_flg')->comment('復職支援制度有無');
            $table->text('returning_supports')->comment('復職支援制度');
            $table->text('comment')->comment('備考');
            $table->string('url')->comment('病院URL');
            $table->string('tantou_dep')->comment('担当者部署');
            $table->string('tantou_title')->comment('担当者役職');
            $table->string('tantou_name')->comment('担当者名前');
            $table->string('tel')->comment('TEL');
            $table->boolean('flg_sityu')->comment('フラグ：市中病院');
            $table->boolean('flg_daigaku')->comment('フラグ：大学病院');
            $table->boolean('flg_500man')->comment('フラグ：500万円〜');
            $table->boolean('flg_1nin')->comment('フラグ：1〜4人');
            $table->boolean('flg_5nin')->comment('フラグ：5〜9人');
            $table->boolean('flg_10nin')->comment('フラグ：10人〜');
            $table->boolean('flg_er')->comment('フラグ：ER型救急');
            $table->boolean('flg_mantoman')->comment('フラグ：マンツーマン');
            $table->boolean('flg_nonetochyoku')->comment('フラグ：当直なし');
            $table->boolean('flg_hoiku')->comment('フラグ：保育・託児所');
            $table->boolean('flg_kengaku')->comment('フラグ：見学補助');
            $table->boolean('flg_fukusyoku')->comment('フラグ：復職支援');
            $table->boolean('flg_kaigai')->comment('フラグ：海外留学');
            $table->boolean('flg_jyutaku')->comment('フラグ：住宅補助・寮');
            $table->boolean('flg_hansou3000')->comment('救急車搬送台数　～3000件');
            $table->boolean('flg_hansou3000_5000')->comment('救急車搬送台数　3000～5000件');
            $table->boolean('flg_hansou5000_7000')->comment('救急車搬送台数　5000～7000件');
            $table->boolean('flg_hansou7000_10000')->comment('救急車搬送台数　7000～10000件');
            $table->boolean('flg_hansou10000')->comment('救急車搬送台数　10000件～');
            $table->boolean('flg_yanegawara')->comment('屋根瓦式');
            $table->boolean('flg_kyukyu1st')->comment('フラグ：１次救急');
            $table->boolean('flg_kyukyu2nd')->comment('フラグ：２次救急');
            $table->boolean('flg_kyukyu3rd')->comment('フラグ：３次救急');
            $table->boolean('flg_freepgm')->comment('フラグ：自由度高（プログラム）');
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
        Schema::dropIfExists('junior_trainings');
    }
};

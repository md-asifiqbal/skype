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
        Schema::create('junior_programs', function (Blueprint $table) {
            $table->comment('');
            $table->increments('id');
            $table->unsignedInteger('junior_training_id')->index('junior_programs_junior_training_id_foreign')->comment('junior_trainings_id');
            $table->tinyInteger('disp_flag')->comment('表示フラグ');
            $table->integer('disporder')->comment('表示順');
            $table->string('preview_pass')->comment('プレビューパスワード');
            $table->string('name')->comment('プログラム名');
            $table->string('supervisor')->comment('プログラム責任者');
            $table->string('fixed_number')->comment('募集定員');
            $table->string('features')->comment('プログラムの特徴');
            $table->text('team')->comment('指導体制');
            $table->string('team_select')->comment('指導体制（セレクトボックス用）');
            $table->text('free_txt')->comment('フリーテキスト');
            $table->string('selection_term')->comment('選択期間');
            $table->text('selection_term_txt')->comment('選択期間テキスト');
            $table->text('selection_department')->comment('選択期間中に回れる診療科');
            $table->text('schedule')->comment('研修スケジュール');
            $table->text('schedule_comment')->comment('研修スケジュール備考');
            $table->text('schedule_comment_week')->comment('研修スケジュール備考(週単位)');
            $table->boolean('schedule_flg')->comment('研修スケジュール表示設定');
            $table->text('outpatient')->comment('一般外来について');
            $table->text('conference')->comment('カンファレンス・勉強会について');
            $table->text('follow_up')->comment('研修医のフォロー体制');
            $table->text('message')->comment('研修に臨む皆さんへ');
            $table->text('comment')->comment('研修終了後の主なキャリア');
            $table->text('etcfeatures')->comment('その他特徴');
            $table->text('efforts')->comment('病院としての取り組み');
            $table->string('dboard_dr_num')->comment('指導医数（ダッシュボード）');
            $table->string('dboard_residents_num')->comment('研修医数（ダッシュボード）');
            $table->string('dboard_monthly_income')->comment('月収（ダッシュボード）');
            $table->string('dboard_annual_income')->comment('年収（ダッシュボード）');
            $table->string('dboard_duty')->comment('月間当直数（ダッシュボード）');
            $table->string('dboard_fixed_number')->comment('定員（ダッシュボード）');
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
        Schema::dropIfExists('junior_programs');
    }
};

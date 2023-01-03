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
        Schema::create('hospitals', function (Blueprint $table) {
            $table->comment('');
            $table->increments('id');
            $table->tinyInteger('disp_flag')->comment('表示フラグ');
            $table->string('preview_pass')->comment('プレビューパスワード');
            $table->string('common_hp_id')->comment('病院ID');
            $table->string('name_organization')->comment('法人名');
            $table->string('name_hospital')->comment('医療機関名');
            $table->string('zipcode')->comment('郵便番号');
            $table->string('pref')->comment('都道府県');
            $table->string('address')->comment('所在地');
            $table->string('email_inquiry')->comment('e-mail（応募問い合わせ用）');
            $table->string('tantou')->comment('e-resident・eレジフェア担当者');
            $table->string('tel')->comment('TEL');
            $table->string('fax')->comment('FAX');
            $table->string('email_tantou')->comment('e-mail（担当者連絡用）');
            $table->text('feature')->comment('病院の特徴');
            $table->text('access')->comment('アクセス');
            $table->string('beds')->comment('病床数');
            $table->string('emargency_class')->comment('救急指定');
            $table->text('departments')->comment('診療科目');
            $table->string('outpatient')->comment('外来数');
            $table->string('er_outpatient')->comment('救急外来数');
            $table->string('ambulance_outpatient')->comment('救急車搬送数');
            $table->string('births')->comment('分娩数');
            $table->string('inpatient')->comment('入院患者数');
            $table->string('days')->comment('在院日数');
            $table->string('specialist_programs')->comment('取得可能専門医科目');
            $table->text('latest_facility')->comment('最新設備機器');
            $table->string('director')->comment('院長名');
            $table->string('director_univ')->comment('院長卒業大学');
            $table->text('related_organization')->comment('関連機関');
            $table->string('advising_doctors')->comment('指導医数');
            $table->text('advising_doctors_info')->comment('指導医数詳細');
            $table->string('residents')->comment('研修医数');
            $table->text('residents_univ')->comment('初期研修医の出身大学');
            $table->text('after_graduating')->comment('研修終了後の進路');
            $table->text('environment')->comment('病院の周辺環境');
            $table->text('hospital_introduction')->nullable()->comment('ｅレジ病院紹介コメント');
            $table->boolean('online_event_display')->default(false)->comment('eレジフェアオンラインフラグ');
            $table->integer('ranking_kyuyo1')->comment('給与（1年次）/年');
            $table->integer('ranking_kyuyo2')->comment('給与（2年次）/年');
            $table->integer('ranking_bunben')->comment('救急件数/年');
            $table->integer('ranking_hansou')->comment('救急車搬送件数/年');
            $table->integer('ranking_kyukyu')->comment('分娩件数/年');
            $table->integer('ranking_tmp');
            $table->text('history_text')->comment('更新履歴メモ');
            $table->boolean('flag_pr_er')->comment('特集フラグ：ER');
            $table->boolean('flag_pr_heri')->comment('特集フラグ：ドクターヘリ');
            $table->boolean('flag_pr_manto')->comment('特集フラグ：マンツーマン');
            $table->boolean('flag_pr_group')->comment('特集フラグ：6～10人募集定員');
            $table->boolean('flag_pr_uni')->comment('特集フラグ：大学病院');
            $table->boolean('flag_pr_byouri')->comment('特集フラグ：病理');
            $table->boolean('flag_pr_sogo')->comment('特集フラグ：総合診療');
            $table->boolean('flag_pr_01')->comment('特集フラグ：（予備１）');
            $table->boolean('flag_pr_02')->comment('特集フラグ：（予備２）');
            $table->boolean('flag_pr_03')->comment('特集フラグ：（予備３）');
            $table->boolean('flag_pr_04')->comment('特集フラグ：（予備４）');
            $table->boolean('flag_pr_05')->comment('特集フラグ：（予備５）');
            $table->string('pr_er')->comment('特集ページ用テキスト');
            $table->string('pr_heri')->comment('特集ページ用テキスト');
            $table->string('pr_group')->comment('特集ページ用テキスト');
            $table->string('pr_manto')->comment('特集ページ用テキスト');
            $table->string('pr_uni')->comment('特集ページ用テキスト');
            $table->string('pr_byouri')->comment('特集ページ用テキスト');
            $table->string('pr_sogo')->comment('特集ページ用テキスト');
            $table->string('pr_01')->comment('特集ページ用テキスト（予備）');
            $table->string('pr_02')->comment('特集ページ用テキスト（予備）');
            $table->string('pr_03')->comment('特集ページ用テキスト（予備）');
            $table->string('pr_04')->comment('特集ページ用テキスト（予備）');
            $table->string('pr_05')->comment('特集ページ用テキスト（予備）');
            $table->boolean('freepage_flg')->comment('フリーページ表示フラグ');
            $table->string('freepage_url')->comment('フリーページURL');
            $table->boolean('eresifair_flg')->comment('eレジフェア出展フラグ');
            $table->integer('royalty')->default(1)->comment('優良顧客度');
            $table->tinyInteger('key_naika')->comment('内科');
            $table->tinyInteger('key_sougou')->comment('総合診療科');
            $table->tinyInteger('key_shyouni')->comment('小児科');
            $table->tinyInteger('key_hifu')->comment('皮膚科');
            $table->tinyInteger('key_seishin')->comment('精神科');
            $table->tinyInteger('key_geka')->comment('外科');
            $table->tinyInteger('key_seikei')->comment('整形外科');
            $table->tinyInteger('key_sanfujin')->comment('産婦人科');
            $table->tinyInteger('key_gan')->comment('眼科');
            $table->tinyInteger('key_jibiinkou')->comment('耳鼻咽喉科');
            $table->tinyInteger('key_hinyouki')->comment('泌尿器科');
            $table->tinyInteger('key_noushinkei')->comment('脳神経外科');
            $table->tinyInteger('key_housyasen')->comment('放射線科');
            $table->tinyInteger('key_masui')->comment('麻酔科');
            $table->tinyInteger('key_byourisindan')->comment('病理診断科');
            $table->tinyInteger('key_rinsyoukensa')->comment('臨床検査科');
            $table->tinyInteger('key_kyukyu')->comment('救急科');
            $table->tinyInteger('key_keisei')->comment('形成外科');
            $table->tinyInteger('key_rehabili')->comment('リハビリ科');
            $table->tinyInteger('key_ninkido')->default(0)->comment('0：なし 1：高 2：中 3 : 低');
            $table->integer('dboard_beds')->comment('病床数（ダッシュボード）');
            $table->integer('dboard_ambulance')->comment('救急車台数（ダッシュボード）');
            $table->integer('dboard_er')->comment('救急外来数（ダッシュボード）');
            $table->integer('dboard_outpatient')->comment('一般外来数（ダッシュボード）');
            $table->integer('base_id')->nullable();
            $table->integer('copy_no');
            $table->string('person_incharge', 200)->comment('当日の担当者名');
            $table->string('emergency_contact', 200)->comment('当日の緊急時の連絡先');
            $table->timestamps();
            $table->boolean('input_flg')->comment('入力完了');
            $table->string('email')->nullable()->comment('eレジオファー用');
            $table->softDeletes()->comment('削除日時 : 削除・退会を行った日時  この値がnullでなかったら、削除・退会を行ったとみなす');
            $table->text('resinavi_emergency')->nullable()->comment('救急指定');
            $table->text('resinavi_beds')->nullable()->comment('病床数');
            $table->text('resinavi_doctors')->nullable()->comment('医師数');
            $table->text('resinavi_outpaient')->nullable()->comment('外来患者');
            $table->text('resinavi_hospitalization')->nullable()->comment('入院患者');
            $table->text('resinavi_ambulance')->nullable()->comment('救急車搬送患者');
            $table->text('resinavi_emergency_out')->nullable()->comment('救急外来患者');
            $table->text('resinavi_cardiopulmonary')->nullable()->comment('心肺停止状態搬送患者');
            $table->text('resinavi_organization')->nullable()->comment('運営団体名');
            $table->text('resinavi_director')->nullable()->comment('病院長');
            $table->text('resinavi_tel')->nullable()->comment('TEL');
            $table->text('resinavi_url')->nullable()->comment('病院ホームページ');
            $table->text('resinavi_info')->nullable()->comment('診療科情報');
            $table->text('resinavi_equipment')->nullable()->comment('主な設備');
            $table->text('resinavi_academic')->nullable()->comment('学会認定・修練施設等');
            $table->text('resinavi_feature')->nullable()->comment('病院の特徴');
            $table->text('resinavi_yomi')->nullable()->comment('病院の読み方');
            $table->string('hospital_source')->nullable()->default('リンク')->comment('病院追加元');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('hospitals');
    }
};

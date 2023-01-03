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
        Schema::create('users', function (Blueprint $table) {
            $table->comment('');
            $table->increments('id');
            $table->string('doctor_id')->comment('ドクターID');
            $table->string('email')->index()->comment('メールアドレス(ログインID)');
            $table->string('password')->comment('パスワード');
            $table->string('line_id')->nullable();
            $table->string('socialplus_id')->nullable();
            $table->rememberToken()->comment('Auth用RememberToken');
            $table->string('lastname')->index()->comment('姓');
            $table->string('lastname_kana')->index()->comment('姓フリガナ');
            $table->string('firstname')->index()->comment('名');
            $table->string('firstname_kana')->index()->comment('名フリガナ');
            $table->date('birthdate')->comment('生年月日');
            $table->string('birthplace')->comment('出身地');
            $table->integer('sex')->comment('性別');
            $table->string('zip')->comment('郵便番号');
            $table->string('address1')->comment('住所1[都道府県]');
            $table->string('address2')->comment('住所2[市区郡以降の住所]');
            $table->string('tel')->comment('TEL');
            $table->integer('college_type')->comment('卒業大学区分');
            $table->string('college_name')->comment('卒業大学名');
            $table->integer('graduation_year')->comment('卒業年度');
            $table->integer('medical_license_year')->comment('医師免許取得：年');
            $table->integer('medical_license_month')->comment('医師免許取得：月');
            $table->integer('medical_license_day')->comment('医師免許取得：日');
            $table->string('college_name_current')->comment('在学大学名');
            $table->string('grade')->comment('学年');
            $table->string('handlename')->comment('ハンドルネーム');
            $table->text('comment')->comment('通信欄');
            $table->string('training_hospital')->comment('研修病院名');
            $table->string('kiboukamoku')->comment('希望科目');
            $table->string('club')->comment('クラブ・サークル');
            $table->string('kibouchi')->comment('研修希望地域');
            $table->string('resident_status')->comment('医学生/研修医/その他');
            $table->string('plane_password')->comment('パスワード（非暗号化）');
            $table->string('ssio_session_id')->comment('SSIOセッションID');
            $table->boolean('add_input')->default(false)->comment('追加フォーム');
            $table->softDeletes()->comment('削除日時 : 削除・退会を行った日時  この値がnullでなかったら、削除・退会を行ったとみなす');
            $table->timestamps();
            $table->string('id_hash');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
};

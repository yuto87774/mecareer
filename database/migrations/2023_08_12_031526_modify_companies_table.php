<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ModifyCompaniesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('companies', function (Blueprint $table) {
            // name_kana カラムを削除
            $table->dropColumn('name_kana');

            // person_in_charge カラムを追加
            $table->string('person_in_charge')->after('name')->nullable();

            // phone_number カラムを追加
            $table->string('phone_number')->after('email')->nullable();
        });
    }

    public function down()
    {
        Schema::table('companies', function (Blueprint $table) {
            // person_in_charge と phone_number カラムを削除
            $table->dropColumn('person_in_charge');
            $table->dropColumn('phone_number');

            // name_kana カラムを再度追加
            $table->string('name_kana');
        });
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class RemoveYourColumnFromUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            //
            $table->renameColumn('id', 'user_id');
            $table->string('name',30)->change();
            $table->string('name_kana',50);
            $table->date('birthdate');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            //
            $table->renameColumn('user_id', 'id');
            $table->string('name',30)->change();
            $table->dropColumn('name_kana');
            $table->dropColumn('birthdate');
        });
    }
}

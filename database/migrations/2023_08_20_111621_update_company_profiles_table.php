<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateCompanyProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::table('company_profiles', function (Blueprint $table) {
            $table->text('recruiting_people')->nullable()->change();
            $table->renameColumn('experience1_main_img', 'company_img1');
            $table->renameColumn('experience1_text', 'company_text1');
            $table->renameColumn('experience2_main_img', 'company_img2');
            $table->renameColumn('experience2_text', 'company_text2');
            $table->dropColumn(['experience1_sub_img', 'experience2_sub_img']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}

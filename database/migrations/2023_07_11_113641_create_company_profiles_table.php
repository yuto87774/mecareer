<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCompanyProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('company_profiles', function (Blueprint $table) {
            $table->id('company_profile_id');
            $table->string('catchphrase')->nullable();
            $table->string('icon')->nullable();
            $table->string('main_img')->nullable();
            $table->text('self_introduction')->nullable();
            $table->string('experience1_main_img')->nullable();
            $table->string('experience1_sub_img')->nullable();
            $table->text('experience1_text')->nullable();
            $table->string('experience2_main_img')->nullable();
            $table->string('experience2_sub_img')->nullable();
            $table->text('experience2_text')->nullable();
            $table->integer('recruiting_people')->nullable();
            $table->unsignedBigInteger('company_id');
            $table->timestamps();

            $table->foreign('company_id')->references('company_id')->on('companies')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('company_profiles');
    }
}

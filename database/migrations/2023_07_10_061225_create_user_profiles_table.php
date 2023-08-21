<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_profiles', function (Blueprint $table) {
            $table->id('user_profile_id');
            $table->string('main_img')->nullable();
            $table->string('user_icon')->nullable();
            $table->text('self_introduction')->nullable();
            $table->text('experience1_text')->nullable();
            $table->string('experience1_main_img')->nullable();
            $table->string('experience1_sub_img')->nullable();
            $table->text('experience2_text')->nullable();
            $table->string('experience2_main_img')->nullable();
            $table->string('experience2_sub_img')->nullable();
            $table->string('qualifications')->nullable();
            $table->unsignedBigInteger('user_id');
            $table->timestamps();

            $table->foreign('user_id')->references('user_id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_profiles');
    }
}

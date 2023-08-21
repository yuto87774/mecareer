<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCompaniesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('companies', function (Blueprint $table) {
            $table->id('company_id');
            $table->string('name');
            $table->string('name_kana');
            $table->unsignedBigInteger('feature_id')->nullable();
            $table->unsignedBigInteger('industry_id')->nullable();
            $table->unsignedBigInteger('speciality_id')->nullable();
            $table->timestamps();

            $table->foreign('industry_id')->references('industry_id')->on('industries')->onDelete('cascade');
            $table->foreign('speciality_id')->references('speciality_id')->on('specialities')->onDelete('cascade');
            $table->foreign('feature_id')->references('feature_id')->on('features')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('companies');
    }
}

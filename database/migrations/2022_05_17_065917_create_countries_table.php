<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCountriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('countries', function (Blueprint $table) {
            $table->id();
            $table->string('continent_code');
            $table->string('currency_code')->nullable();
            $table->string('iso2_code');
            $table->string('iso3_code');
            $table->string('iso_numeric_code')->nullable();
            $table->string('fips_code')->nullable();
            $table->integer('calling_code')->nullable();
            $table->string('common_name');
            $table->string('official_name');
            $table->string('endonym');
            $table->string('demonym');
            $table->timestamp('created');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('countries');
    }
}

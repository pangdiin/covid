<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCovidObservationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('covid_observations', function (Blueprint $table) {
            $table->id();
            $table->integer('sno')->nullable();
            $table->date('observation_date')->nullable();
            $table->string('province_state')->nullable();
            $table->string('country_region')->nullable();
            $table->string('confirmed')->nullable();
            $table->string('deaths')->nullable();
            $table->string('recovered')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('covid_observations');
    }
}

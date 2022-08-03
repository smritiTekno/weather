<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCityRecordsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('city_records', function (Blueprint $table) {
            $table->id();
            $table->string('city_id');
            // $table->string('coordinates');
            $table->string('weather_condition');
            $table->string('temperature_celsius');
            $table->string('feels_like_celsius');
            $table->string('humidity');
            $table->string('wind_speed');
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
        Schema::dropIfExists('city_records');
    }
}

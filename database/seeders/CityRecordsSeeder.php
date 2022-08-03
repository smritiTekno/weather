<?php

namespace Database\Seeders;

use App\Models\CityRecords;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class CityRecordsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\CityRecords::factory(20)->create();
        // 	CityRecords::create([
        //     'city_id' => Str_random(8),
        //     'coordinates' => str_random(12),
        //     'weather_condition' => str_random(20),
        //     'temperature_celsius' => str_random(20),
        //     'feels_like_celsius' => str_random(20),
        //     'humidity' => str_random(20),
        //     'wind_speed' => str_random(20)

           
        // ]);
    }
}

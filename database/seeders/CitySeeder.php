<?php

namespace Database\Seeders;

use App\Models\City;
use Illuminate\Database\Seeder;

class CitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // City::create([
        //     'id'=>'1',
        //     'name' => 'dubai',
        //     'long' =>'88.98' ,
        //     'lat' => '77.87'
        // ]);
        City::insert([
            [
            'id'=>1,
            'name' => 'Dubai',
            'long' =>'55.296249' ,
            'lat' => '25.276987'
             ],
             [
            'id'=>2,
            'name'=> 'Abu Dhabi',
            'long'=>'54.366669',
            'lat'=>'24.466667',
             ],
             [
            'id'=>3,
            'name'=>'Sharjah',
            'long'=>'55.405403',
            'lat'=>'25.348766',
             ],
        ]);
    }

}

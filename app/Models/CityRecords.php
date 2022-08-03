<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CityRecords extends Model
{
    use HasFactory;
    protected $table = 'city_records';
    protected $fillable =['id','city_id','weather_condition','temperature_celsius','feels_like_celsius','humidity','wind_speed'];

    public function city()
    {
        return $this->belongsTo(City::class);
    }

}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Daskboard extends Model
{
    use HasFactory;
    public function city_records()
    {
        return $this->belongsTo(CityRecords::class);
    }
    // public function city()
    // {
    //     return $this->belongsTo(City::class);
    // }
}

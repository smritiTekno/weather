<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class CityRecordsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'city_id' => $this->faker->City_id(),
            'coordinates' => $this->faker->localCoordinates(),
            'weather_condition' => $this->faker->weather(),
            'temperature_celsius' => $this->faker->temperature(),
            'feels_like_celsius' => $this->faker->celsius(),
            'humidity' => $this->faker->humidity(),
            'wind_speed' => $this->faker->speed(),
        ];
    }
}

<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Flight>
 */
class FlightFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'numero_volo' => $this->faker->randomNumber(5, true),
            'partenza' => $this->faker->city(),
            'destinazione' => $this->faker->city(),
            'data_volo'=> $this->faker->date(),
        ];
    }
}

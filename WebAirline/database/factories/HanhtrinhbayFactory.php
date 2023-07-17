<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Hanhtrinhbay>
 */
class HanhtrinhbayFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            //
            "departure"=>$this->faker->departure(),
            "destination"=>$this->faker->destination(),
            "departure_time"=>$this->faker->date('Y-m-d'),
            "arrival_time"=>$this->faker->date('Y-m-d'),
            "passenger"=>$this->faker->numerify(),
            "seat_class"=>$this->faker->seat_class(),
            'status'=>1
        ];
    }
}

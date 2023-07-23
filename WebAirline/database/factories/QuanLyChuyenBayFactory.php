<?php

namespace Database\Factories;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\QuanLyChuyenBay>
 */
class QuanLyChuyenBayFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'SanBayDi' => $this->faker->city,
            'SanBayDen' => $this->faker->city,
            'ThoiGian' => $this->faker->dateTimeBetween('+1 week', '+1 year'),
            'SoGheTrong' => $this->faker->numberBetween(50, 200),
            'status'=>1

        ];
    }
}

<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\QuanLyThongKe>
 */
class QuanLyThongKeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'Ngay' => $this->faker->date(),
            'TongDoanhThu' => $this->faker->randomFloat(2, 1000, 10000),
            'TongSoVeBanDuoc' => $this->faker->numberBetween(50, 200),
        ];
    }
}

<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\QuanLyDichVu>
 */
class QuanLyDichVuFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'TenDichVu' => $this->faker->words(3, true),
            'MoTaDichVu' => $this->faker->paragraph,
            'GiaDichVu' => $this->faker->randomFloat(2, 50, 500),
        ];
    }
}

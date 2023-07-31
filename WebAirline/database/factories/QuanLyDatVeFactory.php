<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\QuanLyDatVe>
 */
class QuanLyDatVeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'Name'=> $this->faker->name(),
            'NgayDatVe' => $this->faker->date(),
            'NgayKhoiHanh' => $this->faker->date(),
            'HanhKhach' => $this->faker->name,
            'SoLuongVe' => $this->faker->numberBetween(1, 5),
            'GiaVe' => $this->faker->randomFloat(2, 100, 1000),
            'TrangThaiDatVe' => $this->faker->randomElement(['Chua thanh toan', 'Da thanh toan', 'Da huy']),
            // Các trường khác nếu cần
        ];
    }
}

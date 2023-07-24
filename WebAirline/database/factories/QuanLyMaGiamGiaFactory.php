<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\QuanLyMaGiamGia>
 */
class QuanLyMaGiamGiaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'TenMaGiamGia' => $this->faker->word, // Tên mã giảm giá ngẫu nhiên
            'GiaGiamGia' => $this->faker->randomFloat(2, 0, 1000), // Giá giảm giá ngẫu nhiên với 2 chữ số thập phân, giá trị từ 0 đến 1000
        ];
    }
}

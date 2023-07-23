<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\QuanLyHangHangKhong>
 */
class QuanLyHangHangKhongFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'TenHangHangKhong' => $this->faker->company,
            'SoDienThoai' => $this->faker->phoneNumber,
            'Email' => $this->faker->unique()->safeEmail,
            'DiaChi' => $this->faker->address,
            'status'=>1
        ];
    }
}

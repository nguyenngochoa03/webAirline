<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\QuanLyYeuCauHoTro>
 */
class QuanLyYeuCauHoTroFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'NgayYeuCau' => $this->faker->date(),
            'TenKhachHang' => $this->faker->name(),
            'ThongTinLienHe' => $this->faker->phoneNumber(),
            'MoTaYeuCau' => $this->faker->paragraph(),
            'TrangThai' => $this->faker->randomElement(['Chua Xu Ly', 'Da Xu Ly', 'Dang Xu Ly']),
        ];
    }
}

<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\students>
 */
class studentsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->name,
            'gender' => $this->faker->randomElement(['male', 'female', 'other']),
            'phone' => $this->faker->unique()->randomNumber(9, true),
            'address' => $this->faker->address,
            'image' => $this->faker->imageUrl(), // Đây là một ví dụ, bạn có thể thay thế bằng cách lấy hình ảnh từ nguồn khác
            'status'=>1
        ];
    }
}

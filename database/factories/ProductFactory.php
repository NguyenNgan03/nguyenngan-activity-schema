<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Generator as Faker;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->sentence(3), // Tạo một câu ngẫu nhiên có 3 từ cho tên sản phẩm
            'price' => $this->faker->randomFloat(2, 10, 100), // Tạo một số ngẫu nhiên có 2 chữ số sau dấu thập phân trong khoảng từ 10 đến 100 cho giá
            'description' => $this->faker->paragraph(3) // Tạo một đoạn văn bản ngẫu nhiên có 3 đoạn cho mô tả sản phẩm
        ];
       
    }
}

<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Product::create([
            'name' => 'Sản phẩm 1',
            'price' => 10.99,
            'description' => 'Mô tả sản phẩm 1'
        ]);

        Product::create([
            'name' => 'Sản phẩm 2',
            'price' => 20.99,
            'description' => 'Mô tả sản phẩm 2'
        ]);

        Product::create([
            'name' => 'Sản phẩm 3',
            'price' => 30.99,
            'description' => 'Mô tả sản phẩm 3'
        ]);

        Product::create([
            'name' => 'Sản phẩm 4',
            'price' => 40.99,
            'description' => 'Mô tả sản phẩm 4'
        ]);

        Product::create([
            'name' => 'Sản phẩm 5',
            'price' => 50.99,
            'description' => 'Mô tả sản phẩm 5'
        ]);
    }
}

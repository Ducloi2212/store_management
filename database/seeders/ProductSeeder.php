<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    const MAX = 10;
    public function run(): void
    {
        for ($i = 1; $i < self::MAX; $i++) {
            DB::table('products')->insert([
                [
                    'id' => $i,
                    'name' => 'iphone' . $i + 5,
                    'price' => rand(4.99, 500),
                    'quantity' => rand(1, 100),
                    'description' => 'description' . $i,
                    'image' => 'images/products/ip' . rand(14, 16) . '.jpg',
                    'status' => 'still',
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
            ]);
        }
    }
}

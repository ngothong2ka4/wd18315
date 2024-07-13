<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    public function run()
    {
        DB::table('products')->insert([
            ['name' => 'Smartphone', 'category_id' => 1, 'price' => 699.99, 'view' => 100, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Novel', 'category_id' => 2, 'price' => 19.99, 'view' => 50, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'T-Shirt', 'category_id' => 3, 'price' => 29.99, 'view' => 75, 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}
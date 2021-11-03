<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    public function run()
    {
        Product::create([
            'id' => \Str::uuid(),
            'name' => 'Product Pertama',
        ]);
    }
}

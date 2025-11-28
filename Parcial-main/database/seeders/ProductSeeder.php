<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;
use App\Models\Products;

class ProductSeeder extends Seeder
{
    public function run()
    {
        Products::factory(50)->create(); 
    }
}


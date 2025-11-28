<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;
use App\Models\Product;

class DatabaseSeeder extends Seeder
{
    
   
    public function run(): void
    {
      
        $this->call(CategorySeeder::class);

       
        $this->call(ProductSeeder::class);
    }
}


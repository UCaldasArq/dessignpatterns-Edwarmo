<?php

namespace Database\Factories;

use App\Models\Product;
use App\Models\Category; 
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    protected $model = Product::class;

    public function definition()
    {
        return [
            'product_name' => $this->faker->word(),
            'product_description' => $this->faker->sentence(),
            'product_price' => $this->faker->randomFloat(2, 10, 500),
            'product_stock' => $this->faker->randomNumber(),
            'product_status' => $this->faker->boolean(),
            'category_id' => Category::inRandomOrder()->first()->id, 
            'barcode' => $this->faker->unique()->numerify('##########'), 
        ];
    }
}


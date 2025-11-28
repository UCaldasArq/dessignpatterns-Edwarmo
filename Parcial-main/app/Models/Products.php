<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Product extends Model
{
    use HasFactory;

    // Relación de un producto con una categoría
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}


class Products extends Model
{
    use HasFactory;
    protected $fillable = [
        'product_name',
        'product_description',
        'product_price',
        'product_stock',
        'product_status',
        'categoria_id',
        'barcode',
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);  
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Product extends Model
{
    use HasFactory;


    protected $table = 'products';
    protected $guarded = false;

    public function images()
    {
        return $this->hasMany(ProductImage::class, 'product_id');
    }

    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }

    public function discount($price, $new_price)
    {
        $sale = intval(100 - ($new_price * 100 / $price));
        return '-'.$sale.'%';
    }
}

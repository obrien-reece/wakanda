<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    use HasFactory;

    protected $table = 'product';

    protected $fillable = [
        'product_category',
        'product_name',
        'product_price',
        'product_discount_percentage',
        'product_discounted_price',
        'product_image',
    ];
}

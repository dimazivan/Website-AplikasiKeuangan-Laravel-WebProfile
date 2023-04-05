<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'price',
        'discountPercentage',
        'rating',
        'stock',
        'brand',
        'category',
        'thumbnail',
        'images',
        'fvoid',
    ];

    public function scopeallItem($query)
    {
        return $query->where('fvoid', 0);
    }

    public function scopeCategory($query)
    {
        return $query->select('category')->groupBy('category');
    }

    public function scopefVoid($query)
    {
        return $query->where('fvoid', 1);
    }
}

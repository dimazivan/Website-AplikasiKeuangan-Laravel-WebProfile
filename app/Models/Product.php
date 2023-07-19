<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
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
        return $query->where('fvoid', 1);
    }

    public function scopenameCategory($query)
    {
        return $query->select('category')->groupBy('category');
    }

    public function scopenameBrand($query)
    {
        return $query->select('brand')->groupBy('brand');
    }

    public function scopeCategory($query)
    {
        return $query->select('category')->distinct()->count('category');
    }

    public function scopeBrand($query)
    {
        return $query->select('brand')->distinct()->count('brand');
    }

    public function scopefVoid($query)
    {
        return $query->where('fvoid', 1);
    }
}

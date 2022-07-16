<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $table = 'products';
    protected $fillable = [
        'categoryId',
        'name',
        'slug',
        'small_discription',
        'discription',
        'orignal_price',
        'selling_price',
        'image',
        'quantity',
        'tax',
        'status',
        'trending',
        'meta_title',
        'meta_discription',
        'meta_keywords',
    ];

    public function category()
    {
        return $this->belongsTo(Category::class,'categoryId','id');
    }
}

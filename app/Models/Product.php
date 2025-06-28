<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'subcategory_id',
        'title',
        'description',
        'price',
        'is_available',
        'thumbnail_url'
    ];

    public function subCategory()
    {
        return $this->belongsTo(SubCategories::class, 'subcategory_id');
    }
}

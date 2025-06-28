<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SubCategories extends Model
{
    protected $fillable = [
        'category_id',
        'name'
    ];

    public function category()
    {
        return $this->belongsTo(Categories::class, 'category_id');
    }
}

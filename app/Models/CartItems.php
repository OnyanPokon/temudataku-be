<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CartItems extends Model
{
    
    protected $fillable = [
        'product_id',
    ];

    public function cart()
    {
        return $this->belongsTo(Carts::class);
    }

    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}

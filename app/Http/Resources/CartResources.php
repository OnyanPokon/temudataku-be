<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class CartResources extends JsonResource
{
    public function toArray(Request $request): array
    {
        $products = $this->items->map(function ($item) {
            return [
                'id' => $item->product->id,
                'name' => $item->product->title,
                'price' => $item->product->price,
            ];
        });

        return [
            'products' => $products,
            'discount' => 0,
            'total_payment' => $products->sum('price'),
        ];
    }
}

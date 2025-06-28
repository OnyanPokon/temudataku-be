<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ProductsResources extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'subCategory' => [
                'id' => $this->subCategory->id ?? null,
                'name' => $this->subCategory->name ?? null,
                'category' => [
                    'id' => $this->subCategory->category->id ?? null,
                    'name' => $this->subCategory->category->name ?? null,
                ],
            ],
            'title' => $this->title,
            'description' => $this->description,
            'price' => $this->price,
            'is_available' => $this->is_available,
            'thumbnail_url' => $this->thumbnail_url,
            'created_at' => $this->created_at->format('d F Y'),
            'updated_at' => $this->updated_at->format('d F Y'),
        ];
    }
}

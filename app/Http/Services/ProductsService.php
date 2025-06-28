<?php

namespace App\Http\Services;

use App\Models\Product;

class ProductsService
{
    protected $model;

    public function __construct(Product $model)
    {
        $this->model = $model;
    }

    public function getAll($request)
    {
        $per_page = $request->per_page ?? 10;
        $data = $this->model->orderBy('created_at');

        if ($search = $request->query('search')) {
            $data->where('name', 'like', '%' . $search . '%');
        }

        if ($subcategory_id = $request->query('subcategory_id')) {
            $data->whereHas('subcategory_id', function ($query) use ($subcategory_id) {
                $query->where('id', $subcategory_id);
            });
        }

        if ($request->page) {
            $data = $data->paginate($per_page);
        } else {
            $data = $data->get();
        }

        return $data;
    }
}

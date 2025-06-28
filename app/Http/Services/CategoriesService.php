<?php

namespace App\Http\Services;

use App\Models\Categories;

class CategoriesService
{
    protected $model;

    public function __construct(Categories $model)
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

        if ($request->page) {
            $data = $data->paginate($per_page);
        } else {
            $data = $data->get();
        }

        return $data;
    }

}

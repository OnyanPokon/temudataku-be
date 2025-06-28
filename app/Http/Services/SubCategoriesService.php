<?php

namespace App\Http\Services;

use App\Models\SubCategories;

class SubCategoriesService
{
    protected $model;

    public function __construct(SubCategories $model)
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

        if ($category_id = $request->query('category_id')) {
            $data->whereHas('category', function ($query) use ($category_id) {
                $query->where('id', $category_id);
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

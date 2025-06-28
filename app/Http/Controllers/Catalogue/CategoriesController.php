<?php

namespace App\Http\Controllers\Catalogue;

use App\Http\Controllers\Controller;
use App\Http\Resources\CategoriesResources;
use App\Http\Services\CategoriesService;
use App\Http\Traits\ApiResponse;
use Exception;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;


class CategoriesController extends Controller
{
    use ApiResponse;
    protected $categoriesService;
    public function __construct(CategoriesService $categoriesService)
    {
        $this->categoriesService = $categoriesService;
    }

    public function index(Request $request)
    {
        try {
            $data = $this->categoriesService->getAll($request);

            return $this->successResponseWithDataIndex(
                $data,
                CategoriesResources::collection($data),
                'Data kategori berhasil diambil',
                Response::HTTP_OK
            );
        } catch (Exception $e) {
            return response()->json([
                'status' => 'error',
                'message' => $e->getMessage()
            ], Response::HTTP_BAD_REQUEST);
        }
    }
}

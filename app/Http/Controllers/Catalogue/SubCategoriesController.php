<?php

namespace App\Http\Controllers\Catalogue;

use App\Http\Controllers\Controller;
use App\Http\Resources\SubCategoriesRosources;
use App\Http\Services\SubCategoriesService;
use App\Http\Traits\ApiResponse;
use Exception;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class SubCategoriesController extends Controller
{
    use ApiResponse;
    protected $subCategoriesService;
    public function __construct(SubCategoriesService $subCategoriesService)
    {
        $this->subCategoriesService = $subCategoriesService;
    }

    public function index(Request $request)
    {
        try {
            $data = $this->subCategoriesService->getAll($request);

            return $this->successResponseWithDataIndex(
                $data,
                SubCategoriesRosources::collection($data),
                'Data Subkategori berhasil diambil',
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

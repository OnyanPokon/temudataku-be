<?php

namespace App\Http\Controllers\Catalogue;

use App\Http\Controllers\Controller;
use App\Http\Resources\ProductsResources;
use App\Http\Services\ProductsService;
use App\Http\Traits\ApiResponse;
use Exception;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class ProductsController extends Controller
{
    use ApiResponse;
    protected $productService;
    public function __construct(ProductsService $productService)
    {
        $this->productService = $productService;
    }

    public function index(Request $request)
    {
        try {
            $data = $this->productService->getAll($request);

            return $this->successResponseWithDataIndex(
                $data,
                ProductsResources::collection($data),
                'Data Product berhasil diambil',
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

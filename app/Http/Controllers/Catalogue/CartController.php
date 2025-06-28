<?php

namespace App\Http\Controllers\Catalogue;

use App\Http\Controllers\Controller;
use App\Http\Request\CartRequest;
use App\Http\Resources\CartResources;
use App\Http\Services\CartService;
use App\Http\Traits\ApiResponse;
use Exception;
use Symfony\Component\HttpFoundation\Response;

class CartController extends Controller
{
    use ApiResponse;

    protected $cartService;

    public function __construct(CartService $cartService)
    {
        $this->cartService = $cartService;
    }

    public function index()
    {
        try {
            $cart = $this->cartService->getUserCart();

            return $this->successResponseWithData(
                new CartResources($cart),
                'Data Keranjang berhasil diambil',
                Response::HTTP_OK
            );
        } catch (Exception $e) {
            return response()->json([
                'status' => 'error',
                'message' => $e->getMessage()
            ], Response::HTTP_BAD_REQUEST);
        }
    }

    public function store(CartRequest $request)
    {
        try {
            $this->cartService->store($request);

            return $this->successResponse(
                'Produk berhasil ditambahkan ke keranjang',
                Response::HTTP_CREATED
            );
        } catch (Exception $e) {
            return $this->errorResponse($e->getMessage(), Response::HTTP_BAD_REQUEST);
        }
    }
}

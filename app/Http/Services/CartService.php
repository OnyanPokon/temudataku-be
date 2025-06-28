<?php

namespace App\Http\Services;

use App\Models\Carts;
use App\Models\Categories;
use Exception;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class CartService
{
    protected $model;

    public function __construct(Carts $model)
    {
        $this->model = $model;
    }

    public function getUserCart()
    {
        $user = Auth::user();

        $cart = $this->model->with(['items.product'])
            ->where('user_id', $user->id)
            ->first();

        return $cart;
    }

    public function store($request)
    {
        DB::beginTransaction();
        try {
            $user = Auth::user();
            $productId = $request->input('product');

            $cart = Carts::firstOrCreate(['user_id' => $user->id]);

            $existingItem = $cart->items()->where('product_id', $productId)->first();

            if ($existingItem) {
                $existingItem->increment('quantity');
            } else {
                $cart->items()->create([
                    'product_id' => $productId,
                    'quantity' => 1
                ]);
            }

            DB::commit();
            return true;
        } catch (Exception $e) {
            DB::rollBack();
            throw $e;
        }
    }
}

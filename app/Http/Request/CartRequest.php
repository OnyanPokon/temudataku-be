<?php

namespace App\Http\Request;

use Illuminate\Foundation\Http\FormRequest;

class CartRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'product' => 'required|exists:products,id'
        ];
    }

    public function messages(): array
    {
        return [
            'product.required' => 'Produk wajib diisi.',
            'product.exists' => 'Produk yang dipilih tidak valid.',
        ];
    }
}

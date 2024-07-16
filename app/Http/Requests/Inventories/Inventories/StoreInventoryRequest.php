<?php

namespace App\Http\Requests\Inventories\Inventories;

use App\Models\Inventories\Products\Product;
use Illuminate\Foundation\Http\FormRequest;

class StoreInventoryRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'product_id' => ['required'],
            'qty' => ['required', 'integer', 'min:1'],
            'transaction_type' => ['required', 'string'],
        ];
    }

    public function messages()
    {
        return [
            'product_id.required' => 'O campo de produto é obrigatório.',
            'qty.required' => 'O campo de quantidade é obrigatório.',
            'qty.integer' => 'A quantidade deve ser um número inteiro.',
            'qty.min' => 'A quantidade deve ser pelo menos 1.',
            'transaction_type.required' => 'O campo de tipo de transação é obrigatório.',
        ];
    }

    public function withValidator($validator)
    {
        $validator->after(function ($validator) {
            if ($this->transaction_type === 'stock_out') {
                $product = Product::find($this->product_id);

                if ($product->qty == 0) {
                    $validator->errors()->add('qty', 'O estoque está vazio. Não é possível retirar.');
                }

                if ($product && $this->qty > $product->qty) {
                    $validator->errors()->add('qty', 'A quantidade máxima que você pode retirar é ' . $product->qty);
                }
            }
        });
    }
}

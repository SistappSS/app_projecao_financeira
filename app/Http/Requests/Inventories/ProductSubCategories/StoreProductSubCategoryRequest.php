<?php

namespace App\Http\Requests\Inventories\ProductSubCategories;

use Illuminate\Foundation\Http\FormRequest;

class StoreProductSubCategoryRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'category_id' => ['required'],
            'name' => ['required', 'string', 'max:255'],
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'O campo de categoria é obrigatório.',
            'category_id.required' => 'Selecione uma categoria de produto'
        ];
    }
}

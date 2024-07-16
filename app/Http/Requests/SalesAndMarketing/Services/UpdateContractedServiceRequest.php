<?php

namespace App\Http\Requests\SalesAndMarketing\Services;

use App\Enums\TypeEnum;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateContractedServiceRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        $validTypeValues = collect(TypeEnum::cases())->map(fn($enum) => $enum->value);

        return [
            'name' => ['required'],
            'price' => ['required'],
            'type' => ['required', Rule::in($validTypeValues)],
            'hiring_date' => ['required'],
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Insira um nome para esse item.',
            'price.required' => 'Insira um preço para esse item.',
            'type.required' => 'Insira um tipo para esse item.',
            'hiring_date.required' => 'A data de contratação é obrigatória.'
        ];
    }
}

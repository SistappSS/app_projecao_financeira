<?php

namespace App\Http\Requests\Entities\Users;

use App\Enums\PanelTypeEnum;
use Illuminate\Foundation\Http\FormRequest;

class UserUpdateRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['unique']
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'O campo de nome é obrigatório.',
            'email.unique' => 'Já existe um e-mail semelhante cadastrado.'
        ];
    }
}

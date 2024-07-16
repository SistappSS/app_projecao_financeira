<?php

namespace App\Http\Requests\Entities\Users;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class LoginUserRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'email' => ['required', 'string', 'email'],
            'password' => ['required', 'string', function ($attribute, $value, $fail) {
                if (!Auth::attempt(['email' => $this->input('email'), 'password' => $value])) {
                    $fail('Erro! Verifique seu e-mail ou senha.');
                }
            }],
        ];
    }

    public function messages()
    {
        return [
            'email.required' => 'O campo de e-mail é obrigatório.',
            'password.required' => 'O campo de senha é obrigatório.',

            'email.email' => 'Adicione um e-mail válido.',
            'password.min' => 'A precisa ter no mínimo 6 caracteres.'
        ];
    }
}

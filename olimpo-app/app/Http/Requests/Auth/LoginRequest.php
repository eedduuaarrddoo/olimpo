<?php

declare(strict_types=1);

namespace App\Http\Requests\Auth;

use Illuminate\Foundation\Http\FormRequest;

class LoginRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'email' => ['required', 'email'],
            'password' => ['required', 'string'],
            'perfil' => ['required', 'in:aluno,professor'],
            'remember' => ['boolean'],
        ];
    }

    public function authorize(): bool
    {
        return true;
    }
}

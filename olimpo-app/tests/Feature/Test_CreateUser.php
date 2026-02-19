<?php

declare(strict_types=1);

use App\Models\User;
use Illuminate\Support\Facades\Hash;

function createTestUser(array $overrides = []): User
{
    return User::create(array_merge([
        'email' => 'teste@exemplo.com',
        'password' => Hash::make('senha123'),
        'perfil' => 'aluno1',
    ], $overrides));
}

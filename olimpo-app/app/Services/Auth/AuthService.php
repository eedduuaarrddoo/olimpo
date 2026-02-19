<?php

declare(strict_types=1);

namespace App\Services\Auth;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Tymon\JWTAuth\Facades\JWTAuth;
use Symfony\Component\HttpKernel\Exception\UnauthorizedHttpException;

class AuthService
{
    public function login(
        string $email,
        string $password,
        string $perfil,
        bool $remember = false
    ): array {
        $user = User::where('email', $email)
            ->where('perfil', $perfil)
            ->first();

        if (! $user || ! Hash::check($password, $user->password)) {
            throw new UnauthorizedHttpException('', 'Credenciais inválidas.');
        }

        $ttl = $remember ? 60 * 24 * 7 : 60; // minutos

        $token = JWTAuth::setTTL($ttl)->fromUser($user);

        return [
            'access_token' => $token,
            'token_type' => 'Bearer',
            'expires_in' => $ttl * 60,
            'user' => [
                'id' => $user->id,
                'email' => $user->email,
                'perfil' => $user->perfil,
            ],
        ];
    }
}

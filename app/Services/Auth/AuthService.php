<?php

namespace App\Services\Auth;

use App\Exceptions\CustomException;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AuthService
{
    public function login($data)
    {
        $user = User::where('email', $data['email'])->first();

        if (!$user || !Hash::check($data['password'], $user->password)) {
            throw new CustomException('Invalid email or password', 401);
        }

        $token = $user->createToken('token-name')->plainTextToken;

        return response()->json([
            'token' => $token
        ]);
    }
}

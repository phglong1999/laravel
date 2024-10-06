<?php

namespace App\Http\Services\Auth;

use App\Models\User;
use Illuminate\Support\Facades\Hash;

class SignUpService
{
    public function handle($data)
    {
        User::create([
            'first_name' => $data['first_name'],
            'last_name' => $data['last_name'],
            'name' => trim($data['first_name'] .  " " . $data['last_name']),
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'phone_number' => $data['phone_number'] ?? null,
            'user_name' => $data['user_name'] ?? null,
        ]);
        return response()->json(['message' => 'User created successfully'], 200);
    }
}

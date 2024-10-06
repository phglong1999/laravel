<?php

namespace App\Http\Services\Auth;

use App\Http\Responses\Auth\LoginResponse;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class LoginService
{
    public function handle($data)
    {
        if (isset($data["email"])) {
            $user = User::where('email', $data["email"])->first();
        } else {
            $user = User::where('user_name', $data["user_name"])->first();
        }
        if ($user == null || !Hash::check($data["password"], $user->password)) {
            return response()->json(['message' => "Incorrect username or password"], 400);
        }

        return response()->json(LoginResponse::fromAccessToken($user->createToken($user->id)), 200);
    }
}

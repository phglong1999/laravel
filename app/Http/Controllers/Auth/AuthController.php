<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Http\Requests\Auth\SignUpRequest;
use App\Http\Services\Auth\LoginService;
use App\Http\Services\Auth\SignUpService;

class AuthController extends Controller
{
    public function SignUp(SignUpRequest $request, SignUpService $signUpService)
    {
        $validated = $request->validated();

        return $signUpService->handle($validated);
    }

    public function Login(LoginRequest $request, LoginService $loginService) {
        $validated = $request->validated();

        return $loginService->handle($validated);
    }
}

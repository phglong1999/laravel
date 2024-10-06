<?php

namespace App\Http\Responses\Auth;

use Laravel\Sanctum\NewAccessToken;
use Spatie\LaravelData\Attributes\MapInputName;
use Spatie\LaravelData\Data;

class LoginResponse extends Data
{
    public string $token;

    public static function fromAccessToken(NewAccessToken $access_token): self
    {
        $res = new self();
        $res->token = $access_token->plainTextToken;
        return $res;
    }
}

<?php

namespace App\Http\Requests\Auth;

use Illuminate\Foundation\Http\FormRequest;

class LoginRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'email' => 'required_without:user_name|email',
            'user_name' => 'required_without:email|string',
            'password' => 'required|string|min:8',
        ];
    }
}

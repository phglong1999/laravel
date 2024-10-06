<?php

namespace App\Http\Requests\Auth;

use Illuminate\Foundation\Http\FormRequest;

class SignUpRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'first_name' => 'present|string',
            'last_name' => 'present|string',
            'email' => 'required|email|unique:users',
            'password' => 'required|string|min:8',
            'phone_number' => 'string',
            'user_name' => 'string|unique:users',
        ];
    }
}

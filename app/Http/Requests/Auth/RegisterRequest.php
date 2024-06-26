<?php

namespace App\Http\Requests\Auth;

use App\Http\Requests\Base\BaseRequest;

class RegisterRequest extends BaseRequest
{
  
    public function rules()
    {
        return [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6',
        ];
    }
  
}

<?php

namespace App\Http\Requests\Auth;

use App\Http\Requests\Base\BaseRequest;

class LoginRequest extends BaseRequest
{
  
    public function rules()
    {
        return [
            'email' => 'required|email',
            'password' => 'required|string',
        ];
    }
  
}

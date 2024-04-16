<?php

namespace App\Http\Requests\Product;

use App\Http\Requests\Base\BaseRequest;

class GetOneProductRequest extends BaseRequest
{
  
    public function rules()
    {
        return [
            'id' => 'required|numeric',
        ];
    }
  
}

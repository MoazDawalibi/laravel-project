<?php

namespace App\Http\Requests\Product;

use App\Http\Requests\Base\BaseRequest;

class DeleteProductRequest extends BaseRequest
{
  
    public function rules()
    {
        return [
            'id' => 'required',
        ];
    }
  
}

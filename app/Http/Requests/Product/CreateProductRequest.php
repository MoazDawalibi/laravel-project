<?php

namespace App\Http\Requests\Product;

use App\Http\Requests\Base\BaseRequest;

class CreateProductRequest extends BaseRequest
{
  
    public function rules()
    {
        return [
            "category_id" => "required",
            'name' => 'required',
            'price' => 'required',
            'description'=> 'required',
        ];
    }
  
}

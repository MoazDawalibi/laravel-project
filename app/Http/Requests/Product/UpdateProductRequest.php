<?php

namespace App\Http\Requests\Product;

use App\Http\Requests\Base\BaseRequest;

class UpdateProductRequest extends BaseRequest
{ 
    public function rules()
    {
        return [
            'id' => 'required',
            'name' => 'required_without_all:price,description',
            'price' => 'required_without_all:name,description',
            'description' => 'required_without_all:name,price',
        ];
    }
}

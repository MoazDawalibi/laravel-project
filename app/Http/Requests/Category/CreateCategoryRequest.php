<?php

namespace App\Http\Requests\Category;

use App\Http\Requests\Base\BaseRequest;

class CreateCategoryRequest extends BaseRequest
{
  
    public function rules()
    {
        return [
            'name' => 'required',
            'description' => 'required',
        ];
    }
  
}

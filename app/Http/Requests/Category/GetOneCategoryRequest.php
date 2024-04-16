<?php

namespace App\Http\Requests\Category;

use App\Http\Requests\Base\BaseRequest;

class GetOneCategoryRequest extends BaseRequest
{
  
    public function rules()
    {
        return [
            'id' => 'required|numeric',
        ];
    }
  
}

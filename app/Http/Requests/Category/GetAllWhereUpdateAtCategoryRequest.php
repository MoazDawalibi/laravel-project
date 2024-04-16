<?php

namespace App\Http\Requests\Category;

use App\Http\Requests\Base\BaseRequest;

class GetAllWhereUpdateAtCategoryRequest extends BaseRequest
{ 
    public function rules()
    {
        return [
            'updated_at' => 'required',
        ];
    }
  
}

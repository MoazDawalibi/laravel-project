<?php

namespace App\Http\Requests\Category;

use App\Http\Requests\Base\BaseRequest;

class UpdateCategoryRequest extends BaseRequest
{ 
    public function rules()
    {
        return [
            'id' => 'required',
            'name' => 'required_without_all:description,created_at,updated_at',
            'description' => 'required_without_all:name,created_at,updated_at',
            'created_at'=> 'required_without_all:name,description,updated_at',
            'updated_at'=> 'required_without_all:name,description,created_at',
        ];
    }
  
}

<?php

namespace App\Http\Controllers;

use App\Http\Requests\Category\CreateCategoryRequest;
use App\Http\Requests\Category\DeleteCategoryRequest;
use App\Http\Requests\Category\GetAllWhereUpdateAtCategoryRequest;
use App\Http\Requests\Category\GetOneCategoryRequest;
use App\Http\Requests\Category\UpdateCategoryRequest;
use App\Services\CategoryService;


class CategoryController extends Controller
{

    public function __construct(protected CategoryService $service){
        
    }
    public function getAll()
    {
        $categories =$this->service->getAll();
        return $this->sendGetResponse($categories);
    }
    public function getOne(GetOneCategoryRequest $request)
    {   
        $category = $this->service->getOne($request->id);
        return $this->sendGetResponse($category);
    }
    public function getAllWithProducts()
    {
        $categoriesWithProducts = $this->service->getAllWithProducts();
        return $this->sendGetResponse($categoriesWithProducts);
    }
    
    public function create(CreateCategoryRequest $request)
    {
        $category = $this->service->create($request->all());
        return $this->sendAddResponse($category);    
    }
    
    
    public function update(UpdateCategoryRequest $request)
    {
        $category = $this->service->update($request->id, $request->all());
        return $this->sendUpdateResponse($category);
    }
    
    public function destroy(DeleteCategoryRequest $deleteCategoryRequest)
    {
        $this->service->destroy($deleteCategoryRequest->id);
        return $this->sendDeleteResponse(); 
    }
}

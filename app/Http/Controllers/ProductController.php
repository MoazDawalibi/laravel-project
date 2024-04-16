<?php

namespace App\Http\Controllers;

use App\Http\Requests\Product\CreateProductRequest;
use App\Http\Requests\Product\DeleteProductRequest;
use App\Http\Requests\Product\GetOneProductRequest;
use App\Http\Requests\Product\UpdateProductRequest;
use App\Services\ProductService;

class ProductController extends Controller
{
    public function __construct(protected ProductService $service){}
    public function getAll()
    {
        $products =$this->service->getAll();
        return $this->sendGetResponse($products);
    }
    public function getOne(GetOneProductRequest $request)
    {   
        $product = $this->service->getOne($request->id);
        return $this->sendGetResponse($product);
    }

    public function create(CreateProductRequest $request)
    {
        $product = $this->service->create($request->all());
        return $this->sendAddResponse($product);    
    }

    public function update(UpdateProductRequest $request)
    {
        $product = $this->service->update($request->id, $request->all());
        return $this->sendUpdateResponse($product);
    }

    public function destroy(DeleteProductRequest $deleteProductRequest)
    {
        $this->service->destroy($deleteProductRequest->id);
        return $this->sendDeleteResponse(); 
    }
}

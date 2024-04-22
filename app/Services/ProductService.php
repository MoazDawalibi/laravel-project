<?php 


namespace App\Services ;
use App\Models\Product;
use App\Services\Base\BaseService;

class ProductService extends BaseService {

    public function __construct() {
        parent::__construct(Product::class);
    }

    public function getSingleProduct($id , $category_id) {

        $product = Product::byCategory($category_id)->find($id);

        return $product;

    }
}
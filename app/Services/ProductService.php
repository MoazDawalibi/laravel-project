<?php 


namespace App\Services ;
use App\Models\Product;
use App\Services\Base\BaseService;

class ProductService extends BaseService {

    public function __construct() {
        parent::__construct(Product::class);
    }
}
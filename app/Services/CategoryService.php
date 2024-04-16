<?php 


namespace App\Services ;
use App\Models\Category;
use App\Services\Base\BaseService;
use Carbon\Carbon;
class CategoryService extends BaseService {

    public function __construct() {
        parent::__construct(Category::class);
    }
    public function getAllWithProducts()
    {
        return parent::getAllWith('products');
    }
    public function getAllWhereUpdatedAt($updated_at, $product_name)
    {
        $updated_at = Carbon::parse($updated_at)->format(config('date.format'));
        $updatedAt_data = $this->class::with('products')
        ->where('updated_at','like', $updated_at .'%')
        ->with(['products' => function ($query) use ($product_name) {
            $query->where('name', $product_name);
        }])
        ->get();
        return $updatedAt_data;
    }
    public function getAllWithCount($count)
    {
        $count_data = $this->class::withCount('products')->having('products_count' ,'>', $count)->get();
        // 2 way
        // $count_data = $this->class::has('products' , '0' ,0)->get();
        return $count_data;
    }
}
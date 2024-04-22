<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = [
        "name",
        "price",
        "description",
        "category_id",
        "created_at",
        "updated_at"
    ];
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
    public function scopeByCategory($query, $category_id){
        $query->where("category_id", $category_id);

    }
    public function scopeByActive($query){
        $query->where("is_active", true);
    }
    public function getTestAttribute(){

        return $this->name . $this->price;
    }
}

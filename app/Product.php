<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends BaseModel
{
    protected $table = 'product';
    protected $fillable = [
        'product_name', 'price', 'product_image', 'description', 'id_category',
    ];

    public static $rules = array(
        'Get_Product' => [
            'categoryId' => 'required|integer'
        ],
    );

    public static function getProductByCategoryId($categoryId) {
        return Product::where('id_category', $categoryId)
        ->orderBy('id')
        ->get();
    }

    public static function getNewProduct() {
        return Product::limit(6)
        ->orderBy('id', 'desc')
        ->get();
    }
}

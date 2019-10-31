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

    public static function getProductByCategoryId($categoryId, $page) {
        $limit = 5;
        $space = ($page - 1) * $limit;
        return Product::where('id_category', $categoryId)
        ->limit($limit)
        ->offset($space)
        ->get();
    }

    public static function getNewProduct() {
        return Product::limit(8)
        ->orderBy('id', 'desc')
        ->get();
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends BaseModel
{
    protected $table = 'product';
    protected $fillable = [
        'product_name', 'price', 'product_image', 'description', 'category_id',
    ];

    public static $rules = array(
        'Get_Product' => [
            'categoryId' => 'required|integer'
        ],
        'Add_Product' => [
            'productName' => 'required|string',
            'productPrice' => 'required|integer',
            'productImage' => 'required|string',
            'description' => 'required|string',
            'categoryId' => 'required|integer',
        ],
        'Edit_Product' => [
            'productId' => 'required|string',
            'productName' => 'required|string',
            'productPrice' => 'required|integer',
            'productImage' => 'required|string',
            'description' => 'required|string',
            'categoryId' => 'required|integer',
        ],
        'Delete_Product' => [
            'productId' => 'required|string',
        ],
        'Get_Product_Admin' => [
            'page' => 'required|integer'
        ],
    );

    public static function getProductByCategoryId($categoryId, $page) {
        $limit = 5;
        $space = ($page - 1) * $limit;
        return Product::where('category_id', $categoryId)
        ->limit($limit)
        ->offset($space)
        ->get();
    }

    public static function getNewProduct() {
        return Product::limit(8)
        ->orderBy('id', 'desc')
        ->get();
    }

    public static function getProductAdmin($page) {
        $limit = 10;
        $space = ($page - 1) * $limit;
        return Product::limit($limit)
        ->offset($space)
        ->get();
    }
}

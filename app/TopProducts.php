<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TopProducts extends BaseModel
{
    protected $table = 'top_products';
    protected $fillable = [
        'product_id', 'total_products',
    ];

    public static $rules = array(

    );

    public static function getProductDataChart() {
        return TopProducts::join('product', 'top_products.product_id', '=', 'product.id')
        ->orderBy('top_products.total_products', 'desc')
        ->limit(3)
        ->get(['top_products.*', 'product.product_name', 'product.price', 'product.product_image', 'product.category_id', 'product.rating']);
    }
}

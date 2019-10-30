<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductCategory extends BaseModel
{
    protected $table = 'product_category';
    protected $fillable = [
        'category_name', 'category_image',
    ];

    public static $rules = array(

    );

    public static function getProductCategory() {
        return ProductCategory::orderBy('id')
        ->get();
    }
}

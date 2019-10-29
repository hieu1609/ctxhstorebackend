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

    );
}

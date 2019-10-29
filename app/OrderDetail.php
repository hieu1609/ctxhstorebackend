<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrderDetail extends BaseModel
{
    protected $table = 'order_detail';
    protected $fillable = [
        'order_id', 'product_id', 'product_name', 'product_price', 'product_number',
    ];

    public static $rules = array(

    );
}

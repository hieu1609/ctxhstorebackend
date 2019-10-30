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
        'Post_Order_Detail' => [
            'orderId' => 'required|integer',
            'productId' => 'required|integer',
            'productName' => 'required|string',
            'productPrice' => 'required|integer',
            'productNumber' => 'required|integer',
        ],
    );
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrderDetail extends BaseModel
{
    protected $table = 'order_detail';
    protected $fillable = [
        'order_id', 'product_id', 'product_name', 'product_price', 'product_number',  'confirm', 'shipping', 'success',
    ];

    public static $rules = array(
        'Post_Order_Detail' => [
            'orderId' => 'required|integer',
            'productId' => 'required|integer',
            'productName' => 'required|string',
            'productPrice' => 'required|integer',
            'productNumber' => 'required|integer',
        ],
        'Cancel_Order' => [
            'orderId' => 'required|integer',
        ],
    );

    public static function getAllPurchases($userId) {
        return OrderDetail::join('order_table', 'order_detail.order_id', '=', 'order_table.id')
        ->where('order_table.user', $userId)
        ->get();
    }

    public static function getPurchasesReceived($userId) {
        return OrderDetail::join('order_table', 'order_detail.order_id', '=', 'order_table.id')
        ->where('order_table.user', $userId)
        ->where('order_detail.confirm', 0)
        ->where('order_detail.shipping', 0)
        ->where('order_detail.success', 0)
        ->get();
    }

    public static function getPurchasesConfirm($userId) {
        return OrderDetail::join('order_table', 'order_detail.order_id', '=', 'order_table.id')
        ->where('order_table.user', $userId)
        ->where('order_detail.confirm', 1)
        ->where('order_detail.shipping', 0)
        ->where('order_detail.success', 0)
        ->get();
    }

    public static function getPurchasesShipping($userId) {
        return OrderDetail::join('order_table', 'order_detail.order_id', '=', 'order_table.id')
        ->where('order_table.user', $userId)
        ->where('order_detail.confirm', 1)
        ->where('order_detail.shipping', 1)
        ->where('order_detail.success', 0)
        ->get();
    }

    public static function getPurchasesCompleted($userId) {
        return OrderDetail::join('order_table', 'order_detail.order_id', '=', 'order_table.id')
        ->where('order_table.user', $userId)
        ->where('order_detail.confirm', 1)
        ->where('order_detail.shipping', 1)
        ->where('order_detail.success', 1)
        ->get();
    }
}

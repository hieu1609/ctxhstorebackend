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
        'Get_Purchases_Admin' => [
            'page' => 'required|integer'
        ],
        'Edit_Purchases_Admin' => [
            'id' => 'required|integer',
            'orderId' => 'required|integer',
            'productId' => 'required|integer',
            'productNumber' => 'required|min:1|max:10|integer',
            'confirm' => 'required|boolean',
            'shipping' => 'required|boolean',
            'success' => 'required|boolean',
            'name' => 'string',
            'phone' => 'string|regex:/^[0-9\-\+]{9,15}$/',
            'address' => 'string',
            'email' => 'regex:/^[a-z][a-z0-9_\.]{2,}@[a-z0-9]{2,}(\.[a-z0-9]{2,}){1,2}$/',
        ],
        'Delete_Purchases_Admin' => [
            'id' => 'required|integer'
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
        ->get(['order_detail.id', 'order_detail.order_id', 'order_detail.product_id', 'order_detail.product_name',
        'order_detail.product_price', 'order_detail.product_number', 'order_detail.confirm', 'order_detail.shipping',
        'order_detail.success', 'order_detail.created_at', 'order_detail.updated_at',
        'order_table.name', 'order_table.phone', 'order_table.address', 'order_table.email', 'order_table.user']);
    }

    public static function getPurchasesConfirm($userId) {
        return OrderDetail::join('order_table', 'order_detail.order_id', '=', 'order_table.id')
        ->where('order_table.user', $userId)
        ->where('order_detail.confirm', 1)
        ->where('order_detail.shipping', 0)
        ->where('order_detail.success', 0)
        ->get(['order_detail.id', 'order_detail.order_id', 'order_detail.product_id', 'order_detail.product_name',
        'order_detail.product_price', 'order_detail.product_number', 'order_detail.confirm', 'order_detail.shipping',
        'order_detail.success', 'order_detail.created_at', 'order_detail.updated_at',
        'order_table.name', 'order_table.phone', 'order_table.address', 'order_table.email', 'order_table.user']);
    }

    public static function getPurchasesShipping($userId) {
        return OrderDetail::join('order_table', 'order_detail.order_id', '=', 'order_table.id')
        ->where('order_table.user', $userId)
        ->where('order_detail.confirm', 1)
        ->where('order_detail.shipping', 1)
        ->where('order_detail.success', 0)
        ->get(['order_detail.id', 'order_detail.order_id', 'order_detail.product_id', 'order_detail.product_name',
        'order_detail.product_price', 'order_detail.product_number', 'order_detail.confirm', 'order_detail.shipping',
        'order_detail.success', 'order_detail.created_at', 'order_detail.updated_at',
        'order_table.name', 'order_table.phone', 'order_table.address', 'order_table.email', 'order_table.user']);
    }

    public static function getPurchasesCompleted($userId) {
        return OrderDetail::join('order_table', 'order_detail.order_id', '=', 'order_table.id')
        ->where('order_table.user', $userId)
        ->where('order_detail.confirm', 1)
        ->where('order_detail.shipping', 1)
        ->where('order_detail.success', 1)
        ->get(['order_detail.id', 'order_detail.order_id', 'order_detail.product_id', 'order_detail.product_name',
        'order_detail.product_price', 'order_detail.product_number', 'order_detail.confirm', 'order_detail.shipping',
        'order_detail.success', 'order_detail.created_at', 'order_detail.updated_at',
        'order_table.name', 'order_table.phone', 'order_table.address', 'order_table.email', 'order_table.user']);
    }

    public static function getPurchasesReceivedAdmin($page) {
        $limit = 10;
        $space = ($page - 1) * $limit;
        return OrderDetail::join('order_table', 'order_detail.order_id', '=', 'order_table.id')
        ->where('order_detail.confirm', 0)
        ->where('order_detail.shipping', 0)
        ->where('order_detail.success', 0)
        ->limit($limit)
        ->offset($space)
        ->get(['order_detail.id', 'order_detail.order_id', 'order_detail.product_id', 'order_detail.product_name',
        'order_detail.product_price', 'order_detail.product_number', 'order_detail.confirm', 'order_detail.shipping',
        'order_detail.success', 'order_detail.created_at', 'order_detail.updated_at',
        'order_table.name', 'order_table.phone', 'order_table.address', 'order_table.email', 'order_table.user']);
    }

    public static function getPurchasesConfirmAdmin($page) {
        $limit = 10;
        $space = ($page - 1) * $limit;
        return OrderDetail::join('order_table', 'order_detail.order_id', '=', 'order_table.id')
        ->where('order_detail.confirm', 1)
        ->where('order_detail.shipping', 0)
        ->where('order_detail.success', 0)
        ->limit($limit)
        ->offset($space)
        ->get(['order_detail.id', 'order_detail.order_id', 'order_detail.product_id', 'order_detail.product_name',
        'order_detail.product_price', 'order_detail.product_number', 'order_detail.confirm', 'order_detail.shipping',
        'order_detail.success', 'order_detail.created_at', 'order_detail.updated_at',
        'order_table.name', 'order_table.phone', 'order_table.address', 'order_table.email', 'order_table.user']);
    }

    public static function getPurchasesShippingAdmin($page) {
        $limit = 10;
        $space = ($page - 1) * $limit;
        return OrderDetail::join('order_table', 'order_detail.order_id', '=', 'order_table.id')
        ->where('order_detail.confirm', 1)
        ->where('order_detail.shipping', 1)
        ->where('order_detail.success', 0)
        ->limit($limit)
        ->offset($space)
        ->get(['order_detail.id', 'order_detail.order_id', 'order_detail.product_id', 'order_detail.product_name',
        'order_detail.product_price', 'order_detail.product_number', 'order_detail.confirm', 'order_detail.shipping',
        'order_detail.success', 'order_detail.created_at', 'order_detail.updated_at',
        'order_table.name', 'order_table.phone', 'order_table.address', 'order_table.email', 'order_table.user']);
    }

    public static function getPurchasesCompletedAdmin($page) {
        $limit = 10;
        $space = ($page - 1) * $limit;
        return OrderDetail::join('order_table', 'order_detail.order_id', '=', 'order_table.id')
        ->where('order_detail.confirm', 1)
        ->where('order_detail.shipping', 1)
        ->where('order_detail.success', 1)
        ->limit($limit)
        ->offset($space)
        ->get(['order_detail.id', 'order_detail.order_id', 'order_detail.product_id', 'order_detail.product_name',
        'order_detail.product_price', 'order_detail.product_number', 'order_detail.confirm', 'order_detail.shipping',
        'order_detail.success', 'order_detail.created_at', 'order_detail.updated_at',
        'order_table.name', 'order_table.phone', 'order_table.address', 'order_table.email', 'order_table.user']);
    }
}

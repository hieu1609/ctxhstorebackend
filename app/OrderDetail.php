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
        'Get_Purchases' => [
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

    public static function getAllPurchases($userId, $page) {
        $limit = 5;
        $space = ($page - 1) * $limit;
        return OrderDetail::join('order_table', 'order_detail.order_id', '=', 'order_table.id')
        ->where('order_table.user', $userId)
        ->orderBy('order_detail.id', 'desc')
        ->limit($limit)
        ->offset($space)
        ->get(['order_detail.*', 'order_table.name', 'order_table.phone', 'order_table.address', 'order_table.email', 'order_table.user']);
    }

    public static function getPurchasesReceived($userId, $page) {
        $limit = 5;
        $space = ($page - 1) * $limit;
        return OrderDetail::join('order_table', 'order_detail.order_id', '=', 'order_table.id')
        ->where('order_table.user', $userId)
        ->where('order_detail.confirm', 0)
        ->where('order_detail.shipping', 0)
        ->where('order_detail.success', 0)
        ->orderBy('order_detail.id', 'desc')
        ->limit($limit)
        ->offset($space)
        ->get(['order_detail.*', 'order_table.name', 'order_table.phone', 'order_table.address', 'order_table.email', 'order_table.user']);
    }

    public static function getPurchasesConfirm($userId, $page) {
        $limit = 5;
        $space = ($page - 1) * $limit;
        return OrderDetail::join('order_table', 'order_detail.order_id', '=', 'order_table.id')
        ->where('order_table.user', $userId)
        ->where('order_detail.confirm', 1)
        ->where('order_detail.shipping', 0)
        ->where('order_detail.success', 0)
        ->orderBy('order_detail.id', 'desc')
        ->limit($limit)
        ->offset($space)
        ->get(['order_detail.*', 'order_table.name', 'order_table.phone', 'order_table.address', 'order_table.email', 'order_table.user']);
    }

    public static function getPurchasesShipping($userId, $page) {
        $limit = 5;
        $space = ($page - 1) * $limit;
        return OrderDetail::join('order_table', 'order_detail.order_id', '=', 'order_table.id')
        ->where('order_table.user', $userId)
        ->where('order_detail.confirm', 1)
        ->where('order_detail.shipping', 1)
        ->where('order_detail.success', 0)
        ->orderBy('order_detail.id', 'desc')
        ->limit($limit)
        ->offset($space)
        ->get(['order_detail.*', 'order_table.name', 'order_table.phone', 'order_table.address', 'order_table.email', 'order_table.user']);
    }

    public static function getPurchasesCompleted($userId, $page) {
        $limit = 5;
        $space = ($page - 1) * $limit;
        return OrderDetail::join('order_table', 'order_detail.order_id', '=', 'order_table.id')
        ->where('order_table.user', $userId)
        ->where('order_detail.confirm', 1)
        ->where('order_detail.shipping', 1)
        ->where('order_detail.success', 1)
        ->orderBy('order_detail.id', 'desc')
        ->limit($limit)
        ->offset($space)
        ->get(['order_detail.*', 'order_table.name', 'order_table.phone', 'order_table.address', 'order_table.email', 'order_table.user']);
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
        ->get(['order_detail.*', 'order_table.name', 'order_table.phone', 'order_table.address', 'order_table.email', 'order_table.user']);
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
        ->get(['order_detail.*', 'order_table.name', 'order_table.phone', 'order_table.address', 'order_table.email', 'order_table.user']);
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
        ->get(['order_detail.*', 'order_table.name', 'order_table.phone', 'order_table.address', 'order_table.email', 'order_table.user']);
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
        ->get(['order_detail.*', 'order_table.name', 'order_table.phone', 'order_table.address', 'order_table.email', 'order_table.user']);
    }

    public static function getTotalProductsById($productId) {
        return OrderDetail::where('product_id', $productId)
        ->where('success', 1)
        ->sum('product_number');
    }

    public static function getTotalMoneyById($user) {
        return OrderDetail::join('order_table', 'order_detail.order_id', '=', 'order_table.id')
        ->where('order_table.user', $user)
        ->where('order_detail.success', 1)
        ->sum('order_detail.product_price');
    }
}

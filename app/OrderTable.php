<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrderTable extends BaseModel
{
    protected $table = 'order_table';
    protected $fillable = [
        'name', 'phone', 'address', 'email', 'user',
    ];

    public static $rules = array(
        'Post_Infor_User' => [
            'name' => 'required|string',
            'phone' => 'required|string|regex:/^[0-9\-\+]{9,15}$/',
            'address' => 'required|string',
            'email' => 'required|regex:/^[a-z][a-z0-9_\.]{2,}@[a-z0-9]{2,}(\.[a-z0-9]{2,}){1,2}$/',
        ],
    );
    public static function getOrderId() {
        return OrderTable::select('id')
        ->orderBy('id', 'desc')
        ->limit(1)
        ->get();
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TopUsers extends BaseModel
{
    protected $table = 'top_users';
    protected $fillable = [
        'user_id', 'total_money',
    ];

    public static $rules = array(

    );

    public static function getUserDataChart() {
        return TopUsers::orderBy('total_money', 'desc')
        ->limit(3)
        ->get();
    }
}

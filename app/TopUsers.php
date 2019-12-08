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
        return TopUsers::join('users', 'top_users.user_id', '=', 'users.id')
        ->orderBy('top_users.total_money', 'desc')
        ->limit(3)
        ->get(['top_users.*', 'users.name', 'users.email', 'users.phone', 'users.address', 'users.admin']);
    }
}

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

    );
}

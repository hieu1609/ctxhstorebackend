<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductReviews extends BaseModel
{
    protected $table = 'product_reviews';
    protected $fillable = [
        'user_id', 'product_id', 'rating', 'comment',
    ];

    public static $rules = array(

    );

}

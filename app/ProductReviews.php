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
        'Post_Review' => [
            'productId' => 'required|integer',
            'rating' => 'required|integer',
        ],
    );

    public static function getAVGRatingProduct($productId) {
        return ProductReviews::where('product_id', $productId)
        ->avg('rating');
    }

    public static function getCommentByProductId($productId) {
        return ProductReviews::where('product_id', $productId)
        ->get();
    }
}

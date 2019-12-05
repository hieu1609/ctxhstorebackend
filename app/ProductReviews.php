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
        'Get_Comment_By_ProductId' => [
            'productId' => 'required|integer',
            'page' => 'required|integer',
        ],
    );

    public static function getAVGRatingProduct($productId) {
        return ProductReviews::where('product_id', $productId)
        ->avg('rating');
    }

    public static function getCommentByProductId($productId, $page) {
        $limit = 5;
        $space = ($page - 1) * $limit;
        return ProductReviews::join('users', 'product_reviews.user_id', '=', 'users.id')
        ->where('product_reviews.product_id', $productId)
        ->limit($limit)
        ->offset($space)
        ->get(['product_reviews.id', 'product_reviews.product_id', 'product_reviews.rating', 'product_reviews.comment',
        'product_reviews.created_at', 'users.name']);
    }
}

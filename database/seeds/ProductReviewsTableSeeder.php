<?php

use Illuminate\Database\Seeder;
use App\ProductReviews;

class ProductReviewsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $productReview = [
            [
                'user_id' => 2,
                'product_id' => 3,
                'rating' => 5,
                'comment' => 'Ngon, giá rẻ',
                "created_at"=> "2019-08-28 03:13:33",
                "updated_at"=> "2019-08-28 03:13:33"
            ],
            [
                'user_id' => 6,
                'product_id' => 3,
                'rating' => 4,
                'comment' => 'OK',
                "created_at"=> "2019-08-28 03:13:34",
                "updated_at"=> "2019-08-28 03:13:34"
            ],
            [
                'user_id' => 2,
                'product_id' => 2,
                'rating' => 5,
                'comment' => 'Yeahhhhh',
                "created_at"=> "2019-08-28 03:13:35",
                "updated_at"=> "2019-08-28 03:13:35"
            ],
            [
                'user_id' => 2,
                'product_id' => 1,
                'rating' => 2,
                'comment' => 'Tệ',
                "created_at"=> "2019-08-28 03:13:36",
                "updated_at"=> "2019-08-28 03:13:36"
            ],
            [
                'user_id' => 3,
                'product_id' => 1,
                'rating' => 4,
                'comment' => 'Tạm ổn',
                "created_at"=> "2019-08-28 03:13:37",
                "updated_at"=> "2019-08-28 03:13:37"
            ],
            [
                'user_id' => 2,
                'product_id' => 4,
                'rating' => 4,
                'comment' => null,
                "created_at"=> "2019-08-28 03:13:38",
                "updated_at"=> "2019-08-28 03:13:38"
            ],
        ];
        
        foreach ($productReview as $key => $productReviews) {
            ProductReviews::create($productReviews);
        }
    }
}

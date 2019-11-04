compo<?php

use Illuminate\Database\Seeder;
use App\ProductCategory;

class ProductCategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $productCategories = [
            [
                'category_name' => 'Đồ ăn',
                'category_image' => 'https://i.ibb.co/5xRJ6CZ/sandwich.png',
                "created_at"=> "2019-08-28 03:12:33",
                "updated_at"=> "2019-08-28 03:12:33"
            ],
            [
                'category_name' => 'Thức uống',
                'category_image' => 'https://i.ibb.co/L9mR216/glass.png',
                "created_at"=> "2019-08-28 03:12:34",
                "updated_at"=> "2019-08-28 03:12:34"
            ],
            [
                'category_name' => 'Vòng tay handmade',
                'category_image' => 'https://i.ibb.co/RcW1sDk/bracelet-2.png',
                "created_at"=> "2019-08-28 03:12:35",
                "updated_at"=> "2019-08-28 03:12:35"
            ],
            [
                'category_name' => 'Móc khóa handmade',
                'category_image' => 'https://i.ibb.co/31whnzh/key-ring.png',
                "created_at"=> "2019-08-28 03:12:36",
                "updated_at"=> "2019-08-28 03:12:36"
            ],
            [
                'category_name' => 'Quà handmade',
                'category_image' => 'https://i.ibb.co/BrzqfC9/giftbox.png',
                "created_at"=> "2019-08-28 03:12:37",
                "updated_at"=> "2019-08-28 03:12:37"
            ],
            [
                'category_name' => 'Khác',
                'category_image' => 'https://i.ibb.co/tJwcmYF/more.png',
                "created_at"=> "2019-08-28 03:12:38",
                "updated_at"=> "2019-08-28 03:12:38"
            ],
        ];
        
        foreach ($productCategories as $key => $productCategory) {
            ProductCategory::create($productCategory);
        }
    }
}

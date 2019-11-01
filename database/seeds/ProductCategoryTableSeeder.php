<?php

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
                'category_image' => 'https://i.ibb.co/4Z72m5M/food.png',
                "created_at"=> "2019-08-28 03:12:33",
                "updated_at"=> "2019-08-28 03:12:33"
            ],
            [
                'category_name' => 'Thức uống',
                'category_image' => 'https://i.ibb.co/sKDyCXq/drink.png',
                "created_at"=> "2019-08-28 03:12:34",
                "updated_at"=> "2019-08-28 03:12:34"
            ],
            [
                'category_name' => 'Vòng tay handmade',
                'category_image' => 'https://i.ibb.co/0Zq4QfC/vongtay.png',
                "created_at"=> "2019-08-28 03:12:35",
                "updated_at"=> "2019-08-28 03:12:35"
            ],
            [
                'category_name' => 'Móc khóa handmade',
                'category_image' => 'https://i.ibb.co/0hKFM9z/mockhoas.jpg',
                "created_at"=> "2019-08-28 03:12:36",
                "updated_at"=> "2019-08-28 03:12:36"
            ],
            [
                'category_name' => 'Quà handmade',
                'category_image' => 'https://i.ibb.co/qmg1cqk/gift.png',
                "created_at"=> "2019-08-28 03:12:37",
                "updated_at"=> "2019-08-28 03:12:37"
            ],
            [
                'category_name' => 'Khác',
                'category_image' => 'https://i.ibb.co/4pvMKTq/bow-tie.png',
                "created_at"=> "2019-08-28 03:12:38",
                "updated_at"=> "2019-08-28 03:12:38"
            ],
        ];
        
        foreach ($productCategories as $key => $productCategory) {
            ProductCategory::create($productCategory);
        }
    }
}

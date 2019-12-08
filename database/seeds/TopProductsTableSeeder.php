<?php

use Illuminate\Database\Seeder;
use App\TopProducts;

class TopProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $topProducts = [
            [
                'product_id' => 10,
                'total_products' => 9,
                "created_at"=> "2019-08-28 03:12:33",
                "updated_at"=> "2019-08-28 03:12:33"
            ],
            [
                'product_id' => 9,
                'total_products' => 3,
                "created_at"=> "2019-08-28 03:12:34",
                "updated_at"=> "2019-08-28 03:12:34"

            ],
            [
                'product_id' => 4,
                'total_products' => 8,
                "created_at"=> "2019-08-28 03:12:35",
                "updated_at"=> "2019-08-28 03:12:35"
            ],
        ];
        
        foreach ($topProducts as $key => $topProduct) {
            TopProducts::create($topProduct);
        }
    }
}

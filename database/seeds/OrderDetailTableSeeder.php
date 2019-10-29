<?php

use Illuminate\Database\Seeder;
use App\OrderDetail;

class OrderDetailTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $orderDetails = [
            [
                'order_id' => 1,
                'product_id' => 5,
                'product_name' => 'Cơm cháy',
                'product_price' => 24000,
                'product_number' => 3,
                "created_at"=> "2019-08-29 03:12:37",
                "updated_at"=> "2019-08-29 03:12:37"
            ],
            [
                'order_id' => 2,
                'product_id' => 19,
                'product_name' => 'Love box',
                'product_price' => 160000,
                'product_number' => 2,
                "created_at"=> "2019-08-29 03:12:38",
                "updated_at"=> "2019-08-29 03:12:38"

            ],
            [
                'order_id' => 3,
                'product_id' => 22,
                'product_name' => 'Mô hình 3D',
                'product_price' => 40000,
                'product_number' => 1,
                "created_at"=> "2019-08-29 03:12:39",
                "updated_at"=> "2019-08-29 03:12:39"
            ],
            [
                'order_id' => 4,
                'product_id' => 10,
                'product_name' => 'Vòng tay paracord kiểu 2',
                'product_price' => 45000,
                'product_number' => 1,
                "created_at"=> "2019-08-29 03:12:40",
                "updated_at"=> "2019-08-29 03:12:40"
            ]
        ];
        
        foreach ($orderDetails as $key => $orderDetail) {
            OrderDetail::create($orderDetail);
        }
    }
}

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
                'product_id' => 36,
                'product_name' => 'Chì khắc',
                'product_price' => 30000,
                'product_number' => 2,
                "created_at"=> "2019-08-29 03:12:37",
                "updated_at"=> "2019-08-29 03:12:37"
            ],
            [
                'order_id' => 2,
                'product_id' => 38,
                'product_name' => 'Love box màu xanh trắng',
                'product_price' => 160000,
                'product_number' => 2,
                'confirm' => 1,
                "created_at"=> "2019-08-29 03:12:38",
                "updated_at"=> "2019-08-29 03:12:38"

            ],
            [
                'order_id' => 2,
                'product_id' => 5,
                'product_name' => 'Cơm cháy',
                'product_price' => 24000,
                'product_number' => 3,
                'confirm' => 1,
                "created_at"=> "2019-08-29 03:12:38",
                "updated_at"=> "2019-08-29 03:12:38"

            ],
            [
                'order_id' => 3,
                'product_id' => 4,
                'product_name' => 'Rau câu dừa',
                'product_price' => 40000,
                'product_number' => 8,
                'confirm' => 1,
                'shipping' => 1,
                'success' => 1,
                "created_at"=> "2019-08-29 03:12:39",
                "updated_at"=> "2019-08-29 03:12:39"
            ],
            [
                'order_id' => 4,
                'product_id' => 10,
                'product_name' => 'Vòng tay paracord kiểu 1 màu trắng đục',
                'product_price' => 175000,
                'product_number' => 9,
                'confirm' => 1,
                'shipping' => 1,
                'success' => 1,
                "created_at"=> "2019-08-29 03:12:40",
                "updated_at"=> "2019-08-29 03:12:40"
            ],
            [
                'order_id' => 4,
                'product_id' => 5,
                'product_name' => 'Cơm cháy',
                'product_price' => 16000,
                'product_number' => 2,
                'confirm' => 1,
                'shipping' => 1,
                'success' => 1,
                "created_at"=> "2019-08-29 03:12:41",
                "updated_at"=> "2019-08-29 03:12:41"
            ],
            [
                'order_id' => 5,
                'product_id' => 9,
                'product_name' => 'Vòng tay paracord kiểu 1 màu đỏ',
                'product_price' => 105000,
                'product_number' => 3,
                'confirm' => 1,
                'shipping' => 1,
                'success' => 1,
                "created_at"=> "2019-08-29 03:12:42",
                "updated_at"=> "2019-08-29 03:12:42"
            ],
            [
                'order_id' => 6,
                'product_id' => 23,
                'product_name' => 'Móc khóa nỉ nhỏ hình gà con',
                'product_price' => 20000,
                'product_number' => 2,
                'confirm' => 1,
                'shipping' => 1,
                'success' => 0,
                "created_at"=> "2019-08-29 03:12:42",
                "updated_at"=> "2019-08-29 03:12:42"
            ],
        ];
        
        foreach ($orderDetails as $key => $orderDetail) {
            OrderDetail::create($orderDetail);
        }
    }
}

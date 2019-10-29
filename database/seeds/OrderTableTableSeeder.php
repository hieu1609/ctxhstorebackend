<?php

use Illuminate\Database\Seeder;
use App\OrderTable;

class OrderTableTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
            $orderTables = [
            [
                'name' => 'Nguyễn Văn A',
                'phone' => '0988632123',
                'address' => 'Hải Phòng',
                'email' => 'nguyenvana@gmail.com',
                "created_at"=> "2019-08-29 03:12:33",
                "updated_at"=> "2019-08-29 03:12:33"
            ],
            [
                'name' => 'Hiếu',
                'phone' => '0982538168',
                'address' => 'Biên Hòa, Đồng Nai',
                'email' => 'hieu@gmail.com',
                'user' => 3,
                "created_at"=> "2019-08-29 03:12:34",
                "updated_at"=> "2019-08-29 03:12:34"

            ],
            [
                'name' => 'Đức',
                'phone' => '0942013068',
                'address' => 'Buôn Hô, Đắc Lắk',
                'email' => 'duc@gmail.com',
                'user' => 2,
                "created_at"=> "2019-08-29 03:12:35",
                "updated_at"=> "2019-08-29 03:12:35"
            ],
            [
                'name' => 'Nguyễn Văn B',
                'phone' => '09886531221',
                'address' => 'Bình Thuận',
                'email' => 'nguyenvanb@gmail.com',
                "created_at"=> "2019-08-29 03:12:36",
                "updated_at"=> "2019-08-29 03:12:36"
            ]
        ];
        
        foreach ($orderTables as $key => $orderTable) {
            OrderTable::create($orderTable);
        }
    }
}

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
                'name' => 'String',
                'phone' => '0953232326',
                'address' => 'Hà Đông, Hà Nội',
                'email' => 'string@gmail.com',
                'user' => 6,
                "created_at"=> "2019-08-29 03:12:36",
                "updated_at"=> "2019-08-29 03:12:36"
            ],
            [
                'name' => 'Linh',
                'phone' => '0363425679',
                'address' => 'Long Thành, Đồng Nai',
                'email' => 'linh@gmail.com',
                'user' => 4,
                "created_at"=> "2019-08-29 03:12:37",
                "updated_at"=> "2019-08-29 03:12:37"
            ],
            [
                'name' => 'Vy',
                'phone' => '0353659895',
                'address' => 'Lý Hòa, Bình Trị Thiên, Quảng Bình',
                'email' => 'levy@gmail.com',
                'user' => 5,
                "created_at"=> "2019-08-29 03:12:38",
                "updated_at"=> "2019-08-29 03:12:38"
            ],
        ];
        
        foreach ($orderTables as $key => $orderTable) {
            OrderTable::create($orderTable);
        }
    }
}

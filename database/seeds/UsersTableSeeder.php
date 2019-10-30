<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            [
                'email' => 'admin' . '@gmail.com',
                'password' => bcrypt('string'),
                'name' => 'Admin',
                'phone' => '0123123123',
                'address' => 'Trường ĐH CNTT, Thủ Đức, Thành phố HCM',
                'admin' => 1,
                "created_at"=> "2019-08-28 03:12:33",
                "updated_at"=> "2019-08-28 03:12:33"
            ],
            [
                "email"=> "duc@gmail.com",
                'password' => bcrypt('string'),
                "name"=> "Đức",
                'phone' => '0942013068',
                'address' => 'Buôn Hô, Đắk Lắk',
                "admin"=> 0,
                "created_at"=> "2019-08-28 03:12:34",
                "updated_at"=> "2019-08-28 03:12:34"

            ],
            [
                "email" => "hieu@gmail.com",
                'password' => bcrypt('string'),
                "name" => "Hiếu",
                'phone' => '0982538168',
                'address' => 'Biên Hòa, Đồng Nai',
                "admin" => 0,
                "created_at"=> "2019-08-28 03:12:35",
                "updated_at"=> "2019-08-28 03:12:35"
            ],
            [
                "email" => "linh@gmail.com",
                'password' => bcrypt('string'),
                "name" => "Linh",
                'phone' => '0363425679',
                'address' => 'Long Thành, Đồng Nai',
                "admin" => 0,
                "created_at"=> "2019-08-28 03:12:35",
                "updated_at"=> "2019-08-28 03:12:35"
            ],
            [
                "email" => "vy@gmail.com",
                'password' => bcrypt('string'),
                "name" => "Vy",
                'phone' => '0353659895',
                'address' => 'Lý Hòa, Bình Trị Thiên, Quảng Bình',
                "admin" => 0,
                "created_at"=> "2019-08-28 03:12:35",
                "updated_at"=> "2019-08-28 03:12:35"
            ],
            [
                "email" => "string@gmail.com",
                'password' => bcrypt('string'),
                "name" => "String",
                'phone' => '0953232326',
                'address' => 'Hà Đông, Hà Nội',
                "admin" => 0,
                "created_at"=> "2019-08-28 03:12:35",
                "updated_at"=> "2019-08-28 03:12:35"
            ],
            [
                "email" => "giahieua2ltv@gmail.com",
                'password' => bcrypt('string'),
                "name" => "giahieua2",
                'phone' => '098255646',
                'address' => 'Hà Đông, Hà Nội',
                "admin" => 0,
                "created_at"=> "2019-08-28 03:12:36",
                "updated_at"=> "2019-08-28 03:12:36"
            ]
        ];
        
        foreach ($users as $key => $user) {
            User::create($user);
        }
    }
}

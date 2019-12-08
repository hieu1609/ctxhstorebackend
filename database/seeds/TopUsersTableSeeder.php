<?php

use Illuminate\Database\Seeder;
use App\TopUsers;

class TopUsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $topUsers = [
            [
                'user_id' => 6,
                'total_money' => 191000,
                "created_at"=> "2019-08-28 03:12:33",
                "updated_at"=> "2019-08-28 03:12:33"
            ],
            [
                'user_id' => 2,
                'total_money' => 40000,
                "created_at"=> "2019-08-28 03:12:34",
                "updated_at"=> "2019-08-28 03:12:34"

            ],
            [
                'user_id' => 4,
                'total_money' => 105000,
                "created_at"=> "2019-08-28 03:12:35",
                "updated_at"=> "2019-08-28 03:12:35"
            ],
        ];
        
        foreach ($topUsers as $key => $topUser) {
            TopUsers::create($topUser);
        }
    }
}

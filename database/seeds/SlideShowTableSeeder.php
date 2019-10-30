<?php

use Illuminate\Database\Seeder;
use App\SlideShow;

class SlideShowTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $slideShows = [
            [
                'image' => 'https://i.ibb.co/d5FhQqw/gmdn2019.jpg',
                'title' => 'gmdn2019',
                "created_at"=> "2019-08-28 03:12:33",
                "updated_at"=> "2019-08-28 03:12:33"
            ],
            [
                'image' => 'https://i.ibb.co/fnBGVTN/camon.jpg',
                'title' => 'camon',
                "created_at"=> "2019-08-28 03:12:34",
                "updated_at"=> "2019-08-28 03:12:34"

            ],
            [
                'image' => 'https://i.ibb.co/qm74xM4/tuyenthanhvien.jpg',
                'title' => 'tuyenthanhvien',
                "created_at"=> "2019-08-28 03:12:35",
                "updated_at"=> "2019-08-28 03:12:35"
            ],
            [
                'image' => 'https://i.ibb.co/K9ZT5r5/tramkyuc.jpg',
                'title' => 'tramkyuc',
                "created_at"=> "2019-08-28 03:12:36",
                "updated_at"=> "2019-08-28 03:12:36"
            ],
            [
                'image' => 'https://i.ibb.co/GWHmFbv/quengopsach.png',
                'title' => 'quyengopsach',
                "created_at"=> "2019-08-28 03:12:37",
                "updated_at"=> "2019-08-28 03:12:37"
            ],
            [
                'image' => 'https://i.ibb.co/fDHKPHM/cfs.jpg',
                'title' => 'cfs',
                "created_at"=> "2019-08-28 03:12:37",
                "updated_at"=> "2019-08-28 03:12:37"
            ]
        ];
        
        foreach ($slideShows as $key => $slideShow) {
            SlideShow::create($slideShow);
        }
    }
}

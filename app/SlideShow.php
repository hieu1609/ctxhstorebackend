<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SlideShow extends BaseModel
{
    protected $table = 'slide_show';
    protected $fillable = [
        'image', 'title',
    ];

    public static $rules = array(
        'Get_Slide_Show_Admin' => [
            'page' => 'required|integer'
        ],
        'Add_Slide_Show' => [
            'image' => 'required|string',
            'title' => 'required|string',
        ],
        'Edit_Slide_Show' => [
            'slideShowId' => 'required|integer',
            'image' => 'required|string',
            'title' => 'required|string',
        ],
        'Delete_Slide_Show' => [
            'slideShowId' => 'required|integer'
        ],
    );

    public static function getSlideShow() {
        return SlideShow::orderBy('id', 'desc')
        ->limit(5)
        ->get();
    }

    public static function getSlideShowAdmin($page) {
        $limit = 10;
        $space = ($page - 1) * $limit;
        return SlideShow::orderBy('id', 'desc')
        ->limit($limit)
        ->offset($space)
        ->get();
    }
}

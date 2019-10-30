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

    );
    public static function getSlideShow() {
        return SlideShow::orderBy('id', 'desc')
        ->limit(5)
        ->get();
    }
}

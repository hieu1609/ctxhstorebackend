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
}

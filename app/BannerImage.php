<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BannerImage extends Model
{
    protected $table = 'banner__images';
    protected $fillable = [
        'img', 'sort'
    ];
    protected $hidden = ['id'];
    
}

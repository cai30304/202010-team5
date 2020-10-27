<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\News;
class NewsImage extends Model
{
    protected $table = 'news_images';
    protected $fillable = [
        'news_image', 'news_id','sort'
    ];
    protected $hidden = ['id'];

    public function news(){
        return $this->belongsTo('App\News','news_id');
    }
}

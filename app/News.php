<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\NewsImage;
class News extends Model
{
    protected $table = 'news';
    protected $fillable = ['title', 'subtitle','inner_text','info_img','preview_img'];
    protected $hidden = ['id'];
    
    public function news(){
        return $this->hasMany('App\NewsImage','news_id');
    }
}

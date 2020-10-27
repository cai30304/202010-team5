<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProuductImage extends Model
{
    protected $table = 'product_images';
    protected $fillable = ['product_id','img','sort'];
    protected $hidden = ['id'];
    
    public function product(){
        return $this->belongsTo('App\Products','product_id');
    }
}

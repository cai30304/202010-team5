<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\ProductTypes;

class Products extends Model
{
    protected $table = 'products';
    protected $fillable = ['product_name','info','info_img','preview_img','sort','material_id','type_id'];
    protected $hidden = ['id'];

    public function prodcutTypes(){
        return $this->belongsTo('App\ProductTypes','type_id');
    }

    public function productImages(){
        return $this->hasMany('App\ProuductImage','product_id');
    }
}

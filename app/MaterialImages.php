<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MaterialImages extends Model
{
    protected $table = 'material_images';
    protected $fillable = ['material_image', 'materail_id','sort'];
    protected $hidden = ['id'];
    
    public function material(){
        return $this->belongsTo('App\Material','materail_id');
    }
}

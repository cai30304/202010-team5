<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Material extends Model
{
    protected $table = 'materials';
    protected $fillable = ['material_name', 'sort'];
    protected $hidden = ['id'];
    
    public function products(){
        return $this->hasMany('App\Products','material_id');
    }
}

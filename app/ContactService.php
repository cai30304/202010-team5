<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ContactService extends Model
{
    protected $table = 'contact_service';
    protected $fillable = [
        'service_name', 'sort'
    ];
    protected $hidden = ['id'];
    
    public function contactMessage(){
        return $this->hasMany("App\ContactMessage",'serverce_id');
    }
}

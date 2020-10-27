<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ContactMessage extends Model
{
    protected $table = 'contact_messages';
    protected $fillable = [
        'user_name', 'telephone_number','phone_number','email','serverce_id','subject','inner_text','inquire_id'
    ];
    protected $hidden = ['id'];
    
    public function contactService(){
        return $this->belongsTo('App\ContactService','serverce_id');    
    }
}

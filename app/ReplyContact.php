<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ReplyContact extends Model
{
    protected $table = 'reply_contacts';

    protected $fillable = ['content', 'id_contact', 'id_admin', ];

    public function contact() {
    	return $this->belongTo('App/Contact');
    }

    public function admin() {
    	return $this->belongTo('App/Admin');
    }
}

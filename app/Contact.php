<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $table = 'contacts';

    protected $fillable = ['title', 'content', 'email', 'id_user',];

    public function user() {
    	return $this->belongTo('App/User');
    }

    public function reply_contact() {
    	return $this->belongTo('App/ReplyContact');
    }
}

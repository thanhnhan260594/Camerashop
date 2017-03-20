<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
	protected $table = 'admins';

    protected $fillable = ['name', 'email', 'password', 'address', 'phone', 'level'];

    public function topic() {
        return $this->hasMany('App/Topic');
    }

    public function replecontact() {
        return $this->hasMany('App/ReplyContact');
    }
}

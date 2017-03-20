<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;
    protected $table = 'users';

    protected $fillable = ['name', 'email', 'password','address','phone',];

    public function order() {
        return $this->hasMany('App/Order');
    }
    public function contact() {
        return $this->hasMany('App/Contact');
    }


    protected $hidden = ['password', 'remember_token',];
}

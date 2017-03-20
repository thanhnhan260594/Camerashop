<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $table = 'orders';

    protected $fillable = ['status', 'total', 'id_user',];

    public function user() {
    	return $this->belongTo('App/User');
    }

    public function order_detail() {
    	return $this->hasMany('App/OrderDetail');
    }

}

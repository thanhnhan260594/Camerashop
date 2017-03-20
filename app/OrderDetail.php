<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrderDetail extends Model
{
    protected $table = 'order_details';

    protected $fillable = ['id_order', 'id_product', 'quatity', 'total',];

    public $timestamps = false;

    public function order() {
    	return $this->belongTo('App/order');
    }

    public function product() {
    	return $this->hasMany('App/Product');
    }

}

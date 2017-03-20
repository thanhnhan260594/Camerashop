<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'products';

    protected $fillable = ['name', 'description', 'price', 'quantity', 'image', 'id_cate', 'id_brand', 'slug', 'status',];

    public function cate() {
    	return $this->belongTo('App/Cate');
    }
    public function brand() {
    	return $this->belongTo('App/Brand');
    }
    public function list_image() {
    	return $this->hasMany('App/ListImage');
    }
    public function order_detail() {
    	return $this->hasMany('App/OrderDetail');
    }
}

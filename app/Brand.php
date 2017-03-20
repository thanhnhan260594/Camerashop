<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    protected $table = 'brands';

    protected $fillable = ['name','description','slug','logo',];

    public $timestamps = false;

    public function product() {
    	return $this->hasMany('App/Product');
    }}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ListImage extends Model
{
    protected $table = 'list_images';

    protected $fillable = ['id_product', 'image',];

    public $timestamps = false;
    
    public function product() {
    	return $this->belongTo('App/Product');
    }

}

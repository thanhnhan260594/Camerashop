<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Topic extends Model
{
    protected $table = 'topics';

    protected $fillable = ['title', 'content','slug', 'id_admin', ];

    public function admin() {
    	return $this->belongTo('App/Admin');
    }

}

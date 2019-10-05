<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class hoadon extends Model
{
    protected $table = "hoadon";
    public $timestamps = false;

    public function ve()
    {
    	return $this->hasMany('App\ve','idHD','id');
    }
}

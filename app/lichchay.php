<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class lichchay extends Model
{
    protected $table = "lichchay";
    public $timestamps = false;

    public function ve()
    {
    	return $this->hasMany('App\ve','idVe','id');
    }
    public function tuyen()
    {
    	return $this->hasMany('App\tuyen','idTuyen','id');
    }
}

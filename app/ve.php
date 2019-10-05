<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ve extends Model
{
    protected $table = "ve";

    public $timestamps = false;

    public function lichsuve()
    {
    	return $this->hasMany('App\lichsuve','idVe','id');
    }

    public function chitietve()
    {
    	return $this->hasMany('App\chitietve','idVe','id');
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class lichsuve extends Model
{
    protected $table = "lichsuve";
    public $timestamps = false;

    public function ve()
    {
    	return $this->hasMany('App\ve','idLC','id');
    }
    public function nhanvien()
    {
    	return $this->hasMany('App\nhanvien','idNV','id');
    }
}

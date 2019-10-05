<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class nhanvien extends Model
{
    protected $table = "nhanvien";
    public $timestamps = false;

    public function nv_tuyen()
    {
    	return $this->belongsTo('App\nv_tuyen','idNV','id');
    }

     public function lichsuve()
    {
    	return $this->hasMany('App\lichsuve','idNV','id');
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class nhanvien extends Model
{
    protected $table = "nhanvien";
    public $timestamps = false;

    public function chucvu()
    {
    	return $this->belongsTo('App\chucvu','idCV','id');
    }

     public function chitiettuyen()
    {
    	return $this->hasMany('App\chitiettuyen','idNV','id');
    }
}

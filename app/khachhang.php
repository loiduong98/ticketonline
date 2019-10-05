<?php

namespace App;
use App\ve;
use App\hoadon;

use Illuminate\Database\Eloquent\Model;

class khachhang extends Model
{
    protected $table = "khachhang";
    public $timestamps = false;

    public function ve()
    {
    	return $this->hasMany('App\ve','idKH','id');
    }

    public function hoadon()
    {
    	return $this->hasMany('App\hoadon','idKH','id');
    }
}

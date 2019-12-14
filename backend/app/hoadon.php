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
    public function khachhang()
    {
    	return $this->belongsTo('App\khachhang','idKH','id');
    }
    public function hinhthucthanhtoan()
    {
    	return $this->belongsTo('App\hinhthucthanhtoan','idHTTT','id');
    }
}

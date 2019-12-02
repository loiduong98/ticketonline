<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ve extends Model
{
    protected $table = "ve";

    public $timestamps = false;

    public function khachhang()
    {
    	return $this->belongsTo('App\khachhang','idKH','id');
    }

    public function lichchay()
    {
    	return $this->belongsTo('App\lichchay','idLC','id');
    }
    public function hoadon()
    {
    	return $this->belongsTo('App\hoadon','idHD','id');
    }
    
}

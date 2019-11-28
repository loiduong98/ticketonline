<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ct_hoadon extends Model
{
    protected $table = "ct_hoadon";
    public $timestamps = false;

    public function hoadon()
    {
    	return $this->belongsTo('App\hoadon','idHD','id');
    }
    public function ve()
    {
    	return $this->belongsTo('App\ve','idVe','id');
    }
}

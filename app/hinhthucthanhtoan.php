<?php

namespace App;
use App\hoadon;

use Illuminate\Database\Eloquent\Model;

class hinhthucthanhtoan extends Model
{
    protected $table = "hinhthucthanhtoan";
    public $timestamps = false;

    public function hoadon()
    {
    	return $this->belongsTo('App\hoadon','idHTTT','id');
    }
}

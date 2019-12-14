<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class chitietve extends Model
{
    protected $table = "chitietve";
    public $timestamps = false;
    
    public function chitietghe()
    {
    	return $this->belongsTo('App\chitietghe','idGhe','id');
    }
    public function ve()
    {
    	return $this->belongsTo('App\ve','idVe','id');
    }
}

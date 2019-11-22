<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class nhanvien extends Model
{
    protected $table = "nhanvien";
    public $timestamps = false;

    public function users()
    {
    	return $this->belongsTo('App\User','idUsers','id');
    }

     public function chucvu()
    {
    	return $this->belongsTo('App\chucvu','idCV','id');
    }
    
}

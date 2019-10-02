<?php

namespace App;
use App\nhanvien;

use Illuminate\Database\Eloquent\Model;

class chucvu extends Model
{
    protected $table = "chucvu";
    public $timestamps = false;

    public function nhanvien()
    {
    	return $this->belongsTo('App\nhanvien','idNV','id');
    }
}

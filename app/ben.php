<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ben extends Model
{
    protected $table = "ben";
    public $timestamps = false;

    public function tuyen()
    {
        return $this->hasMany('App\tuyen','idDiemDi','id');
    }

    public function tuyen1()
    {
        return $this->hasMany('App\tuyen','idDiemDen','id');
    }
}

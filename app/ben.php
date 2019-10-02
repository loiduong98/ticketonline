<?php

namespace App;
use App\tuyen;

use Illuminate\Database\Eloquent\Model;

class ben extends Model
{
    protected $table = "ben";
    public $timestamps = false;

    public function tuyen()
    {
        return $this->hasMany('App\tuyen','idDiemDi','id');
    }
}

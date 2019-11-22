<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tuyen extends Model
{
    protected $table = "tuyen";
    public $timestamps = false;

    public function ben()
    {
        return $this->belongsTo('App\ben','idBenDi','id');
    }

    public function ben1()
        {
            return $this->belongsTo('App\ben','idBenDen','id');
        }
}


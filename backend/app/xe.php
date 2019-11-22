<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class xe extends Model
{
    protected $table = "xe";

    public $timestamps = false;

    public function sodoghe()
    {
    	return $this->belongsTo('App\sodoghe','idSoDoGhe','id');
    }
}

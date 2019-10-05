<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class chitietve extends Model
{
    protected $table = "chitietve";
    public $timestamps = false;
    public function sodoghe()
    {
    	return $this->belongsTo('App\sodoghe','idSoDoGhe','id');
    }
}

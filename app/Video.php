<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    public function film(){
    	return $this->belongsTo('App\Film');
    }
}

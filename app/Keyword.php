<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Keyword extends Model
{
     public function film(){
    	return $this->belongsTo('App\Film');
    }
}

<?php

namespace App;
use DB;
use Illuminate\Database\Eloquent\Model;

class Film_info extends Model
{
    public function film(){
    	return $this->belongsTo('App\Film');
    }

     public static function xeminfo($id,$name){

        $thongtinphim=DB::table('film_infos')
        ->join('films','films.id','=','film_infos.film_id')
        ->join('countries','countries.id','films.country_id')
        ->select('imdb' ,'films.id','films.alias','name_country','films.name_film','films.title','films.name_english','films.image','time','resolution','year','directory','type','film_infos.film_id','content','quality')->where('films.id','=',$id)->get();
     return $thongtinphim;
    }

  
}

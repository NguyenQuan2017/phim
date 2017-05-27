<?php

namespace App;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Model;
use DB;
class Film extends Model
{
     public function category(){
    	return $this->belongsTo('App\Category');
    }

    public function filminfo(){
    	return $this->hasOne('App\Film_info');
    }

    public function types(){
    	return $this->belongsToMany('App\Type');    	
    }

    public function keywords(){
    	return $this->hasmany('App\Keyword');
    }

    public function tags(){
    	return $this->belongsToMany('App\Tag');
    }
    public function videos(){
    	return $this->hasMany('App\Video');
    }
    public function film_type(){
        return $this->hasMany('App\Film_type');
    }

    public function country(){
    	return $this->belongsTo('App\Country');
    }

    public static function xemphim($id,$name){   
     $phim=DB::table('films')->join('film_infos','film_infos.film_id','=','films.id')
     ->join('categories','categories.id','=','films.category_id')
     ->select('content','films.id','films.name_film','films.alias','name_english','films.image','title','name_category')->where('films.id','=',$id)->get();
     return $phim;
    }

}

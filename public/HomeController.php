<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Tag;
use App\Category;	
class HomeController extends Controller
{
    public function homeadmin(){
		return view('admin/home');
	}
	public function home()
	{
    //Phim đề cử
		$phimdecu=DB::table('film_infos')->join('films','films.id','=','film_infos.film_id')
		->join('film_type','films.id','=','film_type.film_id')
		->join('types','types.id','=','film_type.type_id')
		->select('films.name_film','films.title','films.name_english','films.image','resolution','films.id')->where('types.id','=',4)->get();


  	// Phim lẻ mới
		$phimlemoi=DB::table('film_infos')->join('films','films.id','=','film_infos.film_id')
		->join('film_type','films.id','=','film_type.film_id')
		->join('types','types.id','=','film_type.type_id')
		->select('films.name_film','films.title','films.name_english','films.image','time','resolution','films.id')->where('types.id','=',1)->where('status','=',2)->take(8)->get();
    // Phim lẻ hot
		$phimlehot=DB::table('film_infos')->join('films','films.id','=','film_infos.film_id')
		->join('film_type','films.id','=','film_type.film_id')
		->join('types','types.id','=','film_type.type_id')
		->select('films.name_film','films.title','films.name_english','films.image','time','resolution','films.id')->where('types.id','=',1)->where('status','=',1)->take(8)->get();
  	//Phim chiếu rạp
		$phimchieurap=DB::table('film_infos')->join('films','films.id','=','film_infos.film_id')
		->join('film_type','films.id','=','film_type.film_id')
		->join('types','types.id','=','film_type.type_id')
		->select('films.name_film','films.title','films.name_english','films.image','time','resolution','films.id')->where('types.id','=',5)->where('status',2)->take(8)->get();
  	//Phim bộ mới
		$phimbomoi=DB::table('film_infos')->join('films','films.id','=','film_infos.film_id')
		->join('film_type','films.id','=','film_type.film_id')
		->join('types','types.id','=','film_type.type_id')
		->select('films.name_film','films.title','films.name_english','films.image','time','resolution','films.id')->where('types.id','=',2)->where('status','=',2)->take(8)->get();

    //Phim bộ hot
		$phimbohot=DB::table('film_infos')->join('films','films.id','=','film_infos.film_id')
		->join('film_type','films.id','=','film_type.film_id')
		->join('types','types.id','=','film_type.type_id')
		->select('films.name_film','films.title','films.name_english','films.image','time','resolution','films.id')->where('types.id','=',2)->where('status','=',1)->take(8)->get();
	//Phim hoạt hình
		$phimhoathinh=DB::table('film_infos')->join('films','films.id','=','film_infos.film_id')
		->join('film_type','films.id','=','film_type.film_id')
		->join('types','types.id','=','film_type.type_id')
		->select('films.name_film','films.title','films.name_english','films.image','time','resolution','films.id')->where('status','=',2)->where('types.id','=',6)->take(8)->get();
  	//Phim trailer
		$phimtrailer=DB::table('film_infos')->join('films','films.id','=','film_infos.film_id')
		->join('film_type','films.id','=','film_type.film_id')
		->join('types','types.id','=','film_type.type_id')
		->select('films.name_film','films.title','films.name_english','films.image','time','resolution','films.id')->where('types.id','=',7)->get();

		$tag=Tag::all();
		$menu_level_1=Category::all()->where('parent_category_id',0);
		$menu_level_2=Category::all();
		return view('movies/home',compact('phimdecu','phimlemoi','phimlehot','phimchieurap','phimbomoi','phimbohot','phimhoathinh','phimtrailer','tag','menu_level_1','menu_level_2'));
	}
}

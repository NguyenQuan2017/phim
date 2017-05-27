<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Film;
use Validator;
use App\Video;
use App\Tag;
use DB;
use Illuminate\Support\Facades\Auth;

use App\Country;
class FilmController extends Controller
{
     public function getthem(){
    $danhmuc=Category::all();
    $country=Country::all();
    return view('admin/phim/them',compact('danhmuc','country'));
  }

  public function postthem(Request $request){
   $rules=
   [
   'tendanhmuc'=>'required',
   'tenphim'=>'required|unique:films,name_film',
   'tentienganh'=>'required|unique:films,name_english',
   'tieude'=>'required',
   'trangthai'=>'required',
   'quocgia'=>'required',


   ];
   $message=
   [
   'tendanhmuc.required'=>'Vui lòng chọn danh mục',
   'tenphim.required'=>'Vui lòng nhập tên phim',
   'tenphim.unique'=>'Tên Phim Đã Tồn Tại',
   'tentienganh.required'=>'Vui lòng nhập tên tiếng anh',
   'tieude.required'=>'Vui lòng nhập title',
   'trangthai.required'=>'Vui lòng nhập trạng thái',
   'quocgia.required'=>'Vui lòng chọn quốc gia',

   ];
   $validator=Validator::make($request->all(),$rules,$message);
   if($validator->fails()){
    return redirect()->back()->withErrors($validator);
  }
  else{
    $filename=$request->file('hinhanh')->getClientOriginalName();
    $phim=new Film;
    $phim->name_film=$request->tenphim;
    $phim->alias=changetitle($request->tenphim);
    $phim->title=$request->tieude;
    $phim->name_english=$request->tentienganh;
    $phim->status=$request->trangthai;
    $phim->category_id=$request->tendanhmuc;
    $phim->country_id=$request->quocgia;
    $phim->image=$filename;
    $request->file('hinhanh')->move('public/upload/images/250x360',$filename);
    $phim->save();
    return redirect('admin/phim/danhsach')->with('thongbao','Thêm Thành Công');
  }
}
public function getsua($id){
 $phim=Film::find($id);
 $danhmuc=Category::all();
 $country=Country::all();
 return view('admin/phim/sua',compact('phim','danhmuc','country'));
}

public function postsua(Request $request){
 
   $rules=
   [
   'tendanhmuc'=>'required',
   'tenphim'=>'required',
   'tentienganh'=>'required',
   'tieude'=>'required',
   'trangthai'=>'required',
   'quocgia'=>'required',
   
   ];
   $message=
   [
   'tendanhmuc.required'=>'Vui lòng chọn tên danh mục',
   'tenphim.required'=>'Vui lòng nhập tên phim',
   'tentienganh.required'=>'Vui lòng nhập tên tiếng anh',
   'tieude.required'=>'Vui lòng nhập title',
   'trangthai.required'=>'Vui lòng nhập trạng thái',
   'quocgia.required'=>'Vui lòng chọn quốc gia'
   ];
   $validator=Validator::make($request->all(),$rules,$message);
   if($validator->fails()){
    return redirect()->back()->withErrors($validator);
  }
  else{
   $filename=$request->file('hinhanh')->getClientOriginalName();
   $phim=Film::where('id',$request->phim_id)->first();
   $phim->name_film=$request->tenphim;
   $phim->alias=changetitle($request->tenphim);
   $phim->title=$request->tieude;  
   $phim->name_english=$request->tentienganh; 
   $phim->status=$request->trangthai;
   $phim->category_id=$request->tendanhmuc;
   $phim->country_id=$request->quocgia;
   $phim->image=$filename;
   $request->file('hinhanh')->move('public/upload/images/250x360',$filename);
   $phim->save();
   return redirect('admin/phim/danhsach')->with('thongbao','Sửa Thành Công');
 }
}
public function getxoa($id){
  $phim=Film::find($id);
  $phim->delete($id);
  return redirect('admin/phim/danhsach')->with('thongbao','Xóa Thành Công');
  
}
public function getdanhsach(){
  $phim=Film::with('category','country')->get();


  return view('admin/phim/danhsach',compact('phim'));
}




public function xemphim($id,$name){

  // Phim lẻ hot
    $phimlehot=DB::table('film_infos')->join('films','films.id','=','film_infos.film_id')
    ->join('film_type','films.id','=','film_type.film_id')
    ->join('types','types.id','=','film_type.type_id')
    ->select('films.name_film','films.alias','films.title','films.name_english','films.image','time','resolution','films.id')->where('types.id','=',1)->where('status','=',1)->take(8)->get();
 
   //Phim bộ hot
    $phimbohot=DB::table('film_infos')->join('films','films.id','=','film_infos.film_id')
    ->join('film_type','films.id','=','film_type.film_id')
    ->join('types','types.id','=','film_type.type_id')
    ->select('films.name_film','films.alias','films.title','films.name_english','films.image','time','resolution','films.id')->where('types.id','=',2)->where('status','=',1)->take(8)->get();
   //Phim trailer
    $phimtrailer=DB::table('film_infos')->join('films','films.id','=','film_infos.film_id')
    ->join('film_type','films.id','=','film_type.film_id')
    ->join('types','types.id','=','film_type.type_id')
    ->select('films.name_film','films.alias','films.title','films.name_english','films.image','time','resolution','films.id')->where('types.id','=',7)->get();
  $tag=Tag::all();
  $phim=Film::xemphim($id,$name);
  $video=Video::where('film_id','=',$id)->get();
  $menu_level_1=Category::all()->where('parent_category_id',0);
    $menu_level_2=Category::all();
  return view('movies/film.xemphim',compact('phimtrailer','phimlehot','phimbohot','phim','video','tag','menu_level_1','menu_level_2'),['user'=>Auth::user()]);
}
public function timkiem(Request $request){
  // Phim lẻ hot
    $phimlehot=DB::table('film_infos')->join('films','films.id','=','film_infos.film_id')
    ->join('film_type','films.id','=','film_type.film_id')
    ->join('types','types.id','=','film_type.type_id')
    ->select('films.name_film','films.alias','films.title','films.name_english','films.image','time','resolution','films.id')->where('types.id','=',1)->where('status','=',1)->take(8)->get();
 //Phim bộ hot
    $phimbohot=DB::table('film_infos')->join('films','films.id','=','film_infos.film_id')
    ->join('film_type','films.id','=','film_type.film_id')
    ->join('types','types.id','=','film_type.type_id')
    ->select('films.name_film','films.alias','films.title','films.name_english','films.image','time','resolution','films.id')->where('types.id','=',2)->where('status','=',1)->take(8)->get();
 //Phim trailer
    $phimtrailer=DB::table('film_infos')->join('films','films.id','=','film_infos.film_id')
    ->join('film_type','films.id','=','film_type.film_id')
    ->join('types','types.id','=','film_type.type_id')
    ->select('films.name_film','films.alias','films.title','films.name_english','films.image','time','resolution','films.id')->where('types.id','=',7)->get();

  $search=$request->keyword;
  $phim=DB::table('films')->where('name_film','like',"%$search%")->orwhere('name_english','like',"%$search%")
  ->get();
  $tag=Tag::all();
  $menu_level_1=Category::all()->where('parent_category_id',0);
  $menu_level_2=Category::all();

  return view('movies/timkiem/timkiem',compact('phim','phimtrailer','phimlehot','phimbohot','tag','menu_level_1','menu_level_2'),['user'=>Auth::user()]);
}

}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Tag;
use App\Category;
use Hash;
use App\User;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
   
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
   
     public function home()
    {
    //Phim đề cử
        $phimdecu=DB::table('film_infos')->join('films','films.id','=','film_infos.film_id')
        ->join('film_type','films.id','=','film_type.film_id')
        ->join('types','types.id','=','film_type.type_id')
        ->select('films.name_film','films.alias','films.title','films.name_english','films.image','resolution','films.id')->where('types.id','=',4)->get();


    // Phim lẻ mới
        $phimlemoi=DB::table('film_infos')->join('films','films.id','=','film_infos.film_id')
        ->join('film_type','films.id','=','film_type.film_id')
        ->join('types','types.id','=','film_type.type_id')
        ->select('films.name_film','films.alias','films.title','films.name_english','films.image','time','resolution','films.id')->where('types.id','=',1)->where('status','=',2)->take(8)->get();
    // Phim lẻ hot
        $phimlehot=DB::table('film_infos')->join('films','films.id','=','film_infos.film_id')
        ->join('film_type','films.id','=','film_type.film_id')
        ->join('types','types.id','=','film_type.type_id')
        ->select('films.name_film','films.alias','films.title','films.name_english','films.image','time','resolution','films.id')->where('types.id','=',1)->where('status','=',1)->take(8)->get();
    //Phim chiếu rạp
        $phimchieurap=DB::table('film_infos')->join('films','films.id','=','film_infos.film_id')
        ->join('film_type','films.id','=','film_type.film_id')
        ->join('types','types.id','=','film_type.type_id')
        ->select('films.name_film','films.alias','films.title','films.name_english','films.image','time','resolution','films.id')->where('types.id','=',3)->where('status',2)->take(8)->get();
    //Phim bộ mới
        $phimbomoi=DB::table('film_infos')->join('films','films.id','=','film_infos.film_id')
        ->join('film_type','films.id','=','film_type.film_id')
        ->join('types','types.id','=','film_type.type_id')
        ->select('films.name_film','films.alias','films.title','films.name_english','films.image','time','resolution','films.id')->where('types.id','=',2)->where('status','=',2)->take(8)->get();

    //Phim bộ hot
        $phimbohot=DB::table('film_infos')->join('films','films.id','=','film_infos.film_id')
        ->join('film_type','films.id','=','film_type.film_id')
        ->join('types','types.id','=','film_type.type_id')
        ->select('films.name_film','films.alias','films.title','films.name_english','films.image','time','resolution','films.id')->where('types.id','=',2)->where('status','=',1)->take(8)->get();
    //Phim hoạt hình
        $phimhoathinh=DB::table('film_infos')->join('films','films.id','=','film_infos.film_id')
        ->join('film_type','films.id','=','film_type.film_id')
        ->join('types','types.id','=','film_type.type_id')
        ->select('films.name_film','films.alias','films.title','films.name_english','films.image','time','resolution','films.id')->where('status','=',2)->where('types.id','=',5)->take(8)->get();
    //Phim trailer
        $phimtrailer=DB::table('film_infos')->join('films','films.id','=','film_infos.film_id')
        ->join('film_type','films.id','=','film_type.film_id')
        ->join('types','types.id','=','film_type.type_id')
        ->select('films.name_film','films.alias','films.title','films.name_english','films.image','time','resolution','films.id')->where('types.id','=',14)->get();

        $tag=Tag::all();
        $menu_level_1=Category::all()->where('parent_category_id',0);
        $menu_level_2=Category::all();
        return view('movies/home',compact('phimdecu','phimlemoi','phimlehot','phimchieurap','phimbomoi','phimbohot','phimhoathinh','phimtrailer','tag','menu_level_1','menu_level_2'),['user'=>Auth::user()]);
    }

    /*
* Hàm trả về giao diện Register Trang chủ
* Author: Quân Nguyễn
* Create Date: 11/05/2017
 */    
 public function getregister(){

    return view('movies/master/header/register');
   }

/*
* Hàm Xử lý dữ liệu để đăng ký 
* Author: Nguyễn Quân
* Create Date: 16/05/2017
 */
   public function postregister(Request $request){
    
    $user=New User;
    $user->name=$request->name;
    $user->email=$request->email;
    $user->password=Hash::make($request->password);
    $user->save();
    return redirect('/')->with('thongbao','Dang ky thanh cong');

}
/*
* Hàm trả về giao diện Login trang chủ
* Author: Nguyễn Quân
* Create Date: 16/05/2017
 */
public function getlogin(){
    return view('movies/master/header/login');
}

/*
* Hàm Xử lý login
* Author: Nguyễn Quân
* Create Date: 16/05/2017
 */
public function postlogin(Request $request){
   $user=$request['user_input'];
   $pass=$request['password'];
   if(Auth::attempt(['email' => $user, 'password' => $pass,'level'=>0])){
    return redirect('/')->with('thongbao','Đăng nhập thành công');
   }
   else if (Auth::attempt(['email' => $user, 'password' => $pass,'level'=>1])){
    return redirect('/');
   }
   else{
    return redirect('/')->with('thongbao','Đăng nhập không thành công');
   }
}

public function getlogout(){
    Auth::logout();
    return redirect('/');
}

}

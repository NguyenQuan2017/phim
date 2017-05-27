<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Film;
use App\Type;
use App\Film_type;
use Validator;
use Input;
class FilmTypeController extends Controller
{
   public function getthem(){
		$phim=Film::all();
		$theloai=Type::all();
		return view('admin/filmtheloai/them',compact('phim','theloai'));
	}
	public function postthem(Request $request){
		
		$film_theloai=New Film_type;
		$film_theloai->film_id=$request->phim_id;
		$film_theloai->type_id=$request->theloai_id;
		$film_theloai->save();
		return redirect('admin/filmtheloai/danhsach')->with('thongbao','Thêm thành công');  
		
	}

	public function getsua($id){
		$phim=Film::all();
		$theloai=Type::all();
		$film_theloai=Film_type::find($id);
		return view('admin/filmtheloai/sua',compact('phim','theloai','film_theloai')); 
	}

	public function postsua(Request $request){
		$this->validate($request,
			[
			'phim_id'=>'required',
			'theloai_id'=>'required'
			],
			
			[
			'phim_id.required'=>'Vui lòng chọn tên phim',
			'theloai_id.required'=>'Vui lòng chọn thể loại'
			]);
		$film_theloai=Film_type::where('id',$request->film_tl_id)->first();
		$film_theloai->film_id=$request->phim_id;
		$film_theloai->type_id=$request->theloai_id;
		$film_theloai->save();
		return redirect('admin/filmtheloai/danhsach')->with('thongbao','Sửa thành công');  

	}
	public function getdanhsach(){

		$filmtheloai=Film::with('types')->get();

		return view('admin/filmtheloai/danhsach',compact('filmtheloai'));
	}
	public function getxoa($id){
		$filmtheloai=Film_type::find($id);
		$filmtheloai->delete($id);
		return redirect('admin/filmtheloai/danhsach')->with('thongbao','Xóa thành công');  

	}
}

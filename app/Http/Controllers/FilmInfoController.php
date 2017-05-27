<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Film;
use App\Film_info;
use App\Actor;
use App\Tag;
use DB;
use App\Category;
use Validator;
use Illuminate\Support\Facades\Auth;
use Input;
class FilmInfoController extends Controller
{
   public function getthem(){
		$phim=Film::all();
		$thongtinphim=Film_info::all();
		// $theloai=DB::table('films')
		// ->join('film_type','film_type.film_id','=','films.id')
		// ->join('types','types.id','film_type.type_id')->select( DB::raw("group_concat(types.name_type SEPARATOR ',') as name_type" ),'films.id as id_film')->where('films.id',Input::get('film_id'))->groupBy('films.id')->get();
		// dd($theloai);
		return view('admin/thongtinphim/them',compact('phim','thongtinphim'));
	}

	public function postthem(Request $request){
		$rules=
		[
		'phim_id'=>'required|unique:film_infos,film_id',
		'imdb'=>'required',
		'noidung'=>'required',
		'thoiluong'=>'required',
		'daodien'=>'required',
		'nam'=>'required',
		'hinhanh'=>'required',
		'tap'=>'required',
		'dophangiai'=>'required',
		'chatluong'=>'required'
		];
		$message=
		[
		'phim_id.required'=>'Vui lòng chọn tên phim',
		'phim_id.unique'=>'Tên phim đã tồn tại',
		'imdb.required'=>'Vui lòng nhập imdb',
		'noidung.required'=>'Vui lòng nhập nội dung',
		'nam.required'=>'Vui lòng nhập năm',
		'thoiluong.required'=>'Vui lòng nhập thời lượng',
		'daodien.required'=>'Vui lòng nhập tên đạo diễn',
		'hinhanh.required'=>'Vui lòng chọn hình ảnh',
		'dophangiai.required'=>'Vui lòng nhập độ phân giải',
		'chatluong.required'=>'Vui lòng nhập chất lượng'
		];
		$validator=Validator::make($request->all(),$rules,$message);
		if($validator->fails()){
			return redirect()->back()->withErrors($validator)->withInput();
		}
		else{
			$filename=$request->file('hinhanh')->getClientOriginalName();
			$thongtinphim=new Film_info;
			$thongtinphim->imdb=$request->imdb;
			$thongtinphim->year=$request->nam;
			$thongtinphim->content=$request->noidung;
			$thongtinphim->time=$request->thoiluong;
			$thongtinphim->directory=$request->daodien;
			$thongtinphim->episode=$request->tap;
			$thongtinphim->type=$request->theloai;
			$thongtinphim->quality=$request->chatluong;
			$thongtinphim->resolution=$request->dophangiai;
			$thongtinphim->image=$filename;
			$request->file('hinhanh')->move('public/upload/images/450x600',$filename);
			$thongtinphim->film_id=$request->phim_id;
			$thongtinphim->save();
			return redirect('admin/thongtinphim/danhsach')->with('thongbao','Thêm Thành Công');
		}
	}
	public function getsua($id){
		$phim=Film::all();
		$thongtinphim=Film_info::find($id);
		$theloai=DB::table('films')
		->join('film_type','film_type.film_id','=','films.id')
		->join('types','types.id','film_type.type_id')->select( DB::raw("group_concat(types.name_type SEPARATOR ',') as name_type" ))->where('films.id',$id)->groupBy('films.id')->get();
		return view('admin/thongtinphim/sua',compact('phim','thongtinphim','quocgia','theloai'));

	}

	public function postsua(Request $request){
		$rules=
		[
		'phim_id'=>'required',
		'imdb'=>'required',
		'noidung'=>'required',
		'thoiluong'=>'required',
		'daodien'=>'required',
		'nam'=>'required',
		'hinhanh'=>'required',
		'tap'=>'required',
		'dophangiai'=>'required',
		'chatluong'=>'required'
		];
		$message=
		[
		'phim_id.required'=>'Vui lòng chọn tên phim',
		'imdb.required'=>'Vui lòng nhập imdb',
		'noidung.required'=>'Vui lòng nhập nội dung',
		'nam.required'=>'Vui lòng nhập năm',
		'thoiluong.required'=>'Vui lòng nhập thời lượng',
		'daodien.required'=>'Vui lòng nhập tên đạo diễn',
		'hinhanh.required'=>'Vui lòng chọn hình ảnh',
		'dophangiai.required'=>'Vui lòng nhập độ phân giải',
		'chatluong.required'=>'Vui lòng nhập chất lượng'
		];
		$validator=Validator::make($request->all(),$rules,$message);
		if($validator->fails()){
			return redirect()->back()->withErrors($validator)->withInput();
		}
		else{
			$filename=$request->file('hinhanh')->getClientOriginalName();
			$thongtinphim=Film_info::where('id',$request->ttp_id)->first();
			$thongtinphim->imdb=$request->imdb;
			$thongtinphim->year=$request->nam;
			$thongtinphim->content=$request->noidung;
			$thongtinphim->time=$request->thoiluong;
			$thongtinphim->directory=$request->daodien;
			$thongtinphim->episode=$request->tap;
			$thongtinphim->type=$request->theloai;
			$thongtinphim->quality=$request->chatluong;
			$thongtinphim->resolution=$request->dophangiai;
			$thongtinphim->image=$filename;
			$request->file('hinhanh')->move('public/upload/images/450x600',$filename);
			$thongtinphim->film_id=$request->phim_id;
			$thongtinphim->save();
			return redirect('admin/thongtinphim/danhsach')->with('thongbao','Cập Nhật Thành Công');
		}
	}

	public function getxoa($id){
		$thongtinphim=Film_info::find($id);
		$thongtinphim->delete($id);
		return redirect('admin/thongtinphim/danhsach')->with('thongbao','Xóa Thành Công');

	}
	public function getdanhsach(){
		$thongtinphim=Film_info::with('film')->get();
		
		return view('admin/thongtinphim/danhsach',compact('thongtinphim'));
	}


	public function xeminfo($id,$name){
	 //Phim lẻ hot
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


		$thongtinphim=Film_info::xeminfo($id,$name);
		
		$dienvien=Actor::where('film_id','=',$id)->get();
		$tag=Tag::all();
		$menu_level_1=Category::all()->where('parent_category_id',0);
    $menu_level_2=Category::all();
		return view('movies/film/thongtinphim',compact('thongtinphim','phimchieurap','phim','phimlehot','phimbohot','phimtrailer','dienvien','tag','menu_level_1','menu_level_2'),['user'=>Auth::user()]);
	}
}

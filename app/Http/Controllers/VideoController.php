<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Film;
use App\Video;
class VideoController extends Controller
{
    public function getthem(){
		$phim=Film::all();
		return view('admin/video/them',compact('phim'));
	}

	public function postthem(Request $request){
		$this->validate($request,
			[
			'tenphim'=>'required',
			'video'=>'required',
			],
			[
			'tenphim.required'=>'Vui lòng nhập tên phim',
			'tap.unique'=>'Vui lòng nhập tập số',
			]);
		$video=new Video;
		$video->film_id=$request->tenphim;
		$video->link=$request->video;
		$video->episode=$request->tap;
		$video->save();
		return redirect('admin/video/danhsach')->with('thongbao','Thêm Thành Công');

	}

	public function getsua($id){
		$phim=Film::all();
		$video=Video::find($id);
		return view('admin/video/sua',compact('video','phim'));

	}

	public function postsua(Request $request){
		$this->validate($request,
			[
			'tenphim'=>'required',
			'link'=>'required',
			'tap'=>'required'
			],
			[
			'tenvideo.required'=>'Vui lòng nhập tên video',
			'tap.required'=>'Vui lòng nhập tập số',
			'link.required'=>'Vui lòng chọn video'
			]);
		$video=Video::where('id',$request->video_id)->first();
		$video->film_id=$request->tenphim;
		$video->link=$request->link;
		$video->episode=$request->tap;
		$video->save();
		return redirect('admin/video/danhsach')->with('thongbao','Sửa Thành Công');
	}
	public function getdanhsach(){
		$video=Video::with('film')->get();
		return view('admin/video/danhsach',compact('video'));
	}
}

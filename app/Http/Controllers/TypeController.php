<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Type;
use Validator;
class TypeController extends Controller
{
    public function getthem(){
		return view('admin/theloai/them');
	}
	public function postthem(Request $request){
		$rules=
			[	
			'tentheloai'=>'required|unique:types,name_type',

			];
		$message=	
			[
			'tentheloai.required'=>'Vui lòng nhập tên thể loại',
			'tentheloai.unique'=>'Tên thể loại đã tồn tại',

			];
		$validator=Validator::make($request->all(),$rules,$message);
		if($validator->fails()){
			 return redirect()->back()->withErrors($validator)->withInput();
		}
		else{
		$theloai=New Type;
		$theloai->name_type=$request->tentheloai;
		$theloai->alias=changeTitle($request->tentheloai);
		$theloai->save();
		return redirect('admin/theloai/danhsach')->with('thongbao','Thêm Thành Công');
		}
	}
	public function getsua($id){
		$theloai=Type::find($id);
		return view('admin/theloai/sua',compact('theloai'));
	}
	public function postsua(Request $request){
		$rules=
			[	
			'tentheloai'=>'required',

			];
		$message=	
			[
			'tentheloai.required'=>'Vui lòng nhập tên thể loại',
			'tentheloai.unique'=>'Tên thể loại đã tồn tại',

			];
		$validator=Validator::make($requies->all,$rules,$message);
		if($validator->fails()){
			 return redirect()->back()->withErrors($validator)->withInput();
		}
		else{
		$theloai=Type::where('id',$request->theloai_id)->first();
		$theloai->name_type=$request->tentheloai;
		$theloai->alias=changeTitle($request->tentheloai);
		$theloai->save();
		return redirect('admin/theloai/danhsach')->with('thongbao','Sửa Thành Công');
		}
	}
	public function getxoa($id){
		$theloai=Type::find($id);
		$theloai->delete($id);
		return redirect('admin/theloai/danhsach')->with('thongbao','Xóa Thành Công');

	}

	public function getdanhsach(){
		$theloai=Type::all();
		return view('admin/theloai/danhsach',compact('theloai'));
	}
}

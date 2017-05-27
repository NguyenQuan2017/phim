<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tag;

class TagController extends Controller
{
    public function getthem(){

    	return view('admin/tag/them');
    }

    public function postthem(Request $request){
    	$rules=
    	[
    		'tentag'=>'required|unique:tags,name_tag'
    	];
    	$message=
    	[
			'tentag.required'=>'Vui lòng nhập tên tag',
			'tentag.unique'=>'Tên tag đã tồn tại'	
    	];
    	$tag=New Tag;
    	$tag->name_tag=$request->tentag;
    	$tag->alias=changeTitle($request->tentag);
    	$tag->save();
    	return redirect('admin/tag/danhsach')->with('thongbao','Thêm thành công');
    }

    public function getsua($id){

    	$tag=Tag::find($id);
    	return view('admin/tag/sua',compact('tag'));
    }

    public function postsua(Request $request){

    	$tag=Tag::where('id',$request->tag_id)->first();
    	$tag->name_tag=$request->tentag;
    	$tag->alias=$request->tentag;
    	$tag->save();
    	return redirect('admin/tag/danhsach')->with('thongbao','Cập Nhật thành công');
    }

    public function getdanhsach(){
    	$tag=Tag::all();
    	return view('admin/tag/danhsach',compact('tag'));
    }

    public function getxoa(){

    }
}

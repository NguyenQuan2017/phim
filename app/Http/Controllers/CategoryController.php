<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use Validator;
class CategoryController extends Controller
{
     public function getthem(){
    $parent=Category::all();
    return view('admin/danhmuc/them',compact('parent'));
  }

  public function postthem(Request $request){
    $rules=
    [

    'tendanhmuc'=>'required|unique:categories,name_category',
    ];

    $message=
    [
    'tendanhmuc.required'=>'Vui lòng nhập tên danh mục',
    'tendanhmuc.unique'=>'Tên danh mục đã tồn tại'
    ];
    $validator=Validator::make($request->all(),$rules,$message);
    if($validator->fails()){
      return redirect()->back()->withErrors($validator)->withInput();
    }
    else{
      $danhmuc=new Category;
      $danhmuc->name_category=$request->tendanhmuc;
      $danhmuc->alias=changeTitle($request->tendanhmuc);
      $danhmuc->parent_category_id=$request->parent_id;
      $danhmuc->save();
      return redirect('admin/danhmuc/danhsach')->with('thongbao','Thêm Thành Công');
    }
  }

  public function getsua($id){
    $data=Category::all();
    
    $parent=Category::find($id);
    return view('admin/danhmuc/sua',compact('parent','data'));
  }

  public function postsua(Request $request){
    $rules=
    [

    'tendanhmuc'=>'required',
    ];

    $message=
    [
    'tendanhmuc.required'=>'Vui lòng nhập tên danh mục',
    ];
    $validator=Validator::make($request->all(),$rules,$message);
    if($validator->fails()){
      return redirect()->back()->withErrors($validator)->withInput();
    }
    else{
      $danhmuc=Category::where('id',$request->dm_id)->first();   
      $danhmuc->name_category=$request->tendanhmuc;
      $danhmuc->alias=changeTitle($request->tendanhmuc);
      $danhmuc->parent_category_id=$request->parent_id;
      $danhmuc->save(); 
      return redirect('admin/danhmuc/danhsach')->with('thongbao','Sửa Thành Công');
    }

  }
  public function getxoa($id){
    $danhmuc=Category::find($id);
    $danhmuc->delete($id);
    return redirect('admin/danhmuc/danhsach')->with('thongbao','Xóa Thành Công');
  }

  public function getdanhsach(){
    $danhmuc=Category::all();
    return view('admin/danhmuc/danhsach',compact('danhmuc'));
  }	
}

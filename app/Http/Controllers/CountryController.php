<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Country;
use Validator;
class CountryController extends Controller
{
    public function getthem(){
        return view('admin/quocgia/them');
    }

    public function postthem(Request $request){
        $rules=
        [
            'quocgia'=>'required|unique:countries,name_country'
        ];
        $message=
        [
            'quocgia.required'=>'Vui lòng nhập quốc gia',
            'quocgia.unique'=>'Quốc gia đã tồn tại'
        ];
        $validator=Validator::make($request->all(),$rules,$message);
        if($validator->fails()){
             return redirect()->back()->withErrors($validator);
        }
        else{
            $quocgia=new Country;
            $quocgia->name_country=$request->quocgia;
            $quocgia->alias=changeTitle($request->quocgia);
            $quocgia->save();
         return redirect('admin/quocgia/danhsach')->with('thongbao','Thêm Thành Công');

        }
    }
    public function getsua(){
        $quocgia=Country::all();
        return view('admin/quocgia/sua',compact('country'));
    }

    public function postsua(Request $request){
        $quocgia=Country::where('id',$request->quocgia_id)->first();
        $quocgia->name_country=$request->quocgia;
        $quocgia->alias=changeTitle($requiest->quocgia);
        $quocgia->save();
        return redirect('admin/quocgia/danhsach')->with('thongbao','Sửa Thành Công');
    }

    public function getxoa($id){
        $quocgia=Country::find($id);
        $quocgia=delete($id);
        return redirect('admin/quocgia/danhsach')->with('thongbao','Xóa Thành Công');
    }

    public function getdanhsach(){
        $quocgia=Country::all();
        return view('admin/quocgia/danhsach',compact('quocgia'));
    }
    
}

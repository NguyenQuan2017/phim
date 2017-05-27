<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Actor;
use App\Film;
class ActorController extends Controller
{
     public function getthem()
    {
        $phim = Film::all();
        return view('admin/dienvien/them', compact('dienvien', 'phim'));
        
    }
    public function postthem(Request $request)
    {
        $filename             = $request->file('hinhanh')->getClientOriginalName();
        $dienvien             = New Actor;
        $dienvien->name_actor = $request->tendienvien;
        $dienvien->alias= $request->tendienvien;
        $dienvien->role_name  = $request->tenvaidien;
        $dienvien->film_id    = $request->phim_id;
        $dienvien->image      = $filename;
        $request->file('hinhanh')->move('public/upload/images/dienvien', $filename);
        $dienvien->save();
        return redirect('admin/dienvien/danhsach')->with('thongbao','Thêm thành công');
        
    }
    public function getsua($id)
    {
        $phim     = Film::all();
        $dienvien = Actor::find($id);
        return view('admin/dienvien/sua', compact('phim', 'dienvien'));
    }

    public function postsua(Request $request){
        $filename             = $request->file('hinhanh')->getClientOriginalName();
        $dienvien=Actor::where('id',$request->actor_id)->first();
          $dienvien->name_actor = $request->tendienvien;
        $dienvien->alias= $request->tendienvien;
        $dienvien->role_name  = $request->tenvaidien;
        $dienvien->film_id    = $request->phim_id;
        $dienvien->image      = $filename;
        $request->file('hinhanh')->move('public/upload/images/dienvien', $filename);
        $dienvien->save();
        return redirect('admin/dienvien/danhsach')->with('thongbao','Cập nhật thành công');

    }
    public function getdanhsach(){
        $dienvien=Actor::with('film')->get();
        return view('admin/dienvien/danhsach',compact('dienvien'));
    }
}

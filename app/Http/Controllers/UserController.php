<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    
 
    public function getlogin(){
        return view('admin/login/login');
    }
 public function homeadmin(){

    return view('admin/home/home',['user'=>Auth::user()]);
  }
    public function postlogin(Request $request){
       $username=$request['email'];
       $password=$request['password'];
       if(Auth::attempt(['email'=>$username,'password'=>$password,'level'=>1])){
       	return redirect('admin/home');
       }
       else{
       	return redirect()->back();
       }
    }
    public function getlogout(){
      Auth::logout();
        return redirect('admin/login');
    }
}

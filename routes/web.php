<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/','HomeController@home');


Route::get('/phim/{id}/{name}',['as'=>'/phim','uses'=>'FilmInfoController@xeminfo']);
Route::get('/phim/xemphim/{id}/{name}',['as'=>'/phim/xemphim','uses'=>'FilmController@xemphim']);


Route::get('admin/login','UserController@getlogin');
Route::post('admin/login','UserController@postlogin');
Route::get('admin/logout','UserController@getlogout');

Route::get('facebook', 'Auth\LoginFacebookController@redirectToProvider');
Route::get('facebook/callback', 'Auth\LoginFacebookController@handleProviderCallback');
/*
* Tìm kiếm
* Author: Quân Nguyễn
* Create Date:05/11/2017
 */
Route::post('/timkiem','FilmController@timkiem');

Route::group(['prefix'=>'admin','middleware'=>'admin'],function(){
	Route::group(['prefix'=>'danhmuc'],function(){
		Route::get('/them','CategoryController@getthem');
		Route::post('/them','CategoryController@postthem');	
		Route::get('/danhsach','CategoryController@getdanhsach');
		Route::get('/sua/{id}','CategoryController@getsua');
		Route::post('/sua','CategoryController@postsua');
		Route::get('/xoa/{id}','CategoryController@getxoa');
	});
	Route::group(['prefix'=>'theloai'],function(){
		Route::get('/them','TypeController@getthem');
		Route::post('/them','TypeController@postthem');	
		Route::get('/danhsach','TypeController@getdanhsach');
		Route::get('/sua/{id}','TypeController@getsua');
		Route::post('/sua','TypeController@postsua');
		Route::get('/xoa/{id}','TypeController@getxoa');
	});

	Route::group(['prefix'=>'phim'],function(){
		Route::get('them','FilmController@getthem');
		Route::post('them','FilmController@postthem');	
		Route::get('danhsach','FilmController@getdanhsach');
		Route::get('sua/{id}','FilmController@getsua');
		Route::post('sua','FilmController@postsua');
		Route::get('xoa/{id}','FilmController@getxoa');
	});
	Route::group(['prefix'=>'thongtinphim'],function(){
		Route::get('them','FilmInfoController@getthem');
		Route::post('them','FilmInfoController@postthem');	
		Route::get('danhsach','FilmInfoController@getdanhsach');
		Route::get('sua/{id}','FilmInfoController@getsua');
		Route::post('sua','FilmInfoController@postsua');
		Route::get('xoa/{id}','FilmInfoController@getxoa');
	});

	Route::group(['prefix'=>'dienvien'],function(){
		Route::get('them','ActorController@getthem');
		Route::post('them','ActorController@postthem');	
		Route::get('danhsach','ActorController@getdanhsach');
		Route::get('sua/{id}','ActorController@getsua');
		Route::post('sua/{id}','ActorController@postsua');
		Route::get('xoa/{id}','ActorController@getxoa');
	});
	Route::group(['prefix'=>'video'],function(){
		Route::get('them','VideoController@getthem');
		Route::post('them','VideoController@postthem');	
		Route::get('danhsach','VideoController@getdanhsach');
		Route::get('sua/{id}','VideoController@getsua');
		Route::post('/sua','VideoController@postsua');
	});
		Route::group(['prefix'=>'user'],function(){
		Route::get('them','UserController@getthem');
		Route::post('them','UserController@postthem');	
		Route::get('danhsach','UserController@getdanhsach');
		Route::get('sua','UserController@getsua');
	});
		Route::group(['prefix'=>'filmtheloai'],function(){
		Route::get('them','FilmTypeController@getthem');
		Route::post('them','FilmTypeController@postthem');	
		Route::get('danhsach','FilmTypeController@getdanhsach');
		Route::get('sua/{id}','FilmTypeController@getsua');
		Route::post('sua','FilmTypeController@postsua');
		Route::get('xoa/{id}','FilmTypeController@getxoa');
	});
		Route::group(['prefix'=>'quocgia'],function(){
		Route::get('them','CountryController@getthem');
		Route::post('them','CountryController@postthem');	
		Route::get('danhsach','CountryController@getdanhsach');
		Route::get('sua/{id}','CountryController@getsua');
		Route::post('sua','CountryController@postsua');
	});	
		Route::group(['prefix'=>'tag'],function(){
		Route::get('them','TagController@getthem');
		Route::post('them','TagController@postthem');	
		Route::get('danhsach','TagController@getdanhsach');
		Route::get('sua/{id}','TagController@getsua');
		Route::post('sua','TagController@postsua');
	});	
		Route::get('home','UserController@homeadmin');


});

Route::get('/register','HomeController@getregister');
Route::post('/register','HomeController@postregister');
Route::get('/login','HomeController@getlogin');
Route::post('login','HomeController@postlogin');
Route::get('logout','HomeController@getlogout');


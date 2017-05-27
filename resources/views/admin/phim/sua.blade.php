@extends('admin/layout/index')
@section('action','PHIM MỚI / THÊM')
@section('content')
<style>
.img{
width:200px;
height: 200px;
}
</style>
<div id="page-wrapper">
    <div class="graphs">
        <h3 class="blank1">SỬA PHIM  </h3>
        <div class="tab-content">
            <div class="tab-pane active" id="horizontal-form">
                
                <form class="form-horizontal" method="post" action="{{ url('admin/phim/sua') }}" enctype="multipart/form-data">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <input type="hidden" name="phim_id" value="{{$phim->id}}">
                    <div class="form-group">
                        <label for="selector1" class="col-sm-2 control-label">DANH MỤC PHIM</label>
                        <div class="col-sm-4"><select name="tendanhmuc" id="selector1" class="form-control1">
                            @foreach($danhmuc as $dm)
                            <option  value="{{ $dm->id }}">{{$dm->name_category}}</option>
                            @endforeach
                        </select></div>
                    </div>
                    <div class="form-group">
                        <label for="focusedinput" class="col-sm-2 control-label">NAME FILM</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control1" name="tenphim" id="focusedinput" value="{{ $phim->name_film }}">
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label for="focusedinput" class="col-sm-2 control-label">NAME ENGLISH</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control1" name="tentienganh" id="focusedinput" value="{{ $phim->name_english }}">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="focusedinput" class="col-sm-2 control-label">TITLE</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control1" name="tieude" id="focusedinput" value="{{ $phim->title }}">
                        </div>
                    </div>
                    <div class="form-group">
                        
                        <div class="col-sm-4 col-sm-offset-2">
                            <img  class="img" src="{{ url('public/upload/images/250x360/'.$phim->image) }}" alt="">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="focusedinput" class="col-sm-2 control-label">IMAGE</label>
                        <div class="col-sm-4">
                            <input type="file" class="form-control1" name="hinhanh" id="focusedinput">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="focusedinput" class="col-sm-2 control-label">STATUS</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control1" name="trangthai" id="focusedinput" value="{{ $phim->status }}" >
                        </div>
                    </div>
                     <div class="form-group">
                        <label for="selector1" class="col-sm-2 control-label">NAME COUNTRY</label>
                        <div class="col-sm-4"><select name="quocgia" id="selector1" class="form-control1">
                          @foreach($country as $item)
                          <option  value="{{ $item->id }}">{{$item->name_country}}</option>
                          @endforeach
                        </select></div>
                        
                      </div>
                    
                    <div class="form-group">
                        <div class="col-sm-1  col-sm-offset-2">
                            <input type="submit" class="form-control1 btn-success" value="SỬA" id="focusedinput">
                        </div>
                    </div>
                    
                </form>
            </div>
        </div>
    </div>
</div>
@stop
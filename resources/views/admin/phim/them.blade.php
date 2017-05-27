@extends('admin/layout/index')
@section('action','PHIM MỚI / THÊM')
@section('content')
<div id="page-wrapper">
  <div class="graphs">
    <h3 class="blank1">THÊM PHIM  </h3>
    <div class="tab-content">
      <div class="tab-pane active" id="horizontal-form">
        <form class="form-horizontal" method="post" enctype="multipart/form-data">
          <input type="hidden" name="_token" value="{{ csrf_token() }}">
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
              <input type="text" class="form-control1" name="tenphim" id="focusedinput" placeholder=" Tên Phim">
            </div>
            <div class="alert alert-danger col-sm-4" >
              @if($errors->has('tenphim'))
              <p style="color:red">{{ $errors->first('tenphim') }}</p>
              @endif
              
            </div>
          </div>
          
          <div class="form-group">
            <label for="focusedinput" class="col-sm-2 control-label">NAME ENGLISH</label>
            <div class="col-sm-4">
              <input type="text" class="form-control1" name="tentienganh" id="focusedinput" placeholder="Tên Tiếng Anh">
            </div>
            <div class="alert alert-danger col-sm-4" >
              @if($errors->has('tentienganh'))
              <p style="color:red">{{ $errors->first('tentienganh') }}</p>
              @endif
              
            </div>
          </div>
          <div class="form-group">
            <label for="focusedinput" class="col-sm-2 control-label">TITLE</label>
            <div class="col-sm-4">
              <input type="text" class="form-control1" name="tieude" id="focusedinput" placeholder=" Tiêu đề">
            </div>
            <div class="alert alert-danger col-sm-4" >
              @if($errors->has('tieude'))
              <p style="color:red">{{ $errors->first('tieude') }}</p>
              @endif
              
            </div>
          </div>
          <div class="form-group">
            <label for="focusedinput" class="col-sm-2 control-label">IMAGE</label>
            <div class="col-sm-4">
              <input type="file" class="form-control1" name="hinhanh" id="focusedinput">
            </div>
            <div class="alert alert-danger col-sm-4" >
              @if($errors->has('hinhanh'))
              <p style="color:red">{{ $errors->first('hinhanh') }}</p>
              @endif
              
            </div>
          </div>
          <div class="form-group">
            <label for="focusedinput" class="col-sm-2 control-label">STATUS</label>
            <div class="col-sm-4">
              <input type="text" class="form-control1" name="trangthai" id="focusedinput" placeholder=" Nhập trạng thái">
            </div>
            <div class="alert alert-danger col-sm-4" >
              @if($errors->has('trangthai'))
              <p style="color:red">{{ $errors->first('trangthai') }}</p>
              @endif
              
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
              <input type="submit" class="form-control1 btn-success" value="Thêm" id="focusedinput">
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
@stop
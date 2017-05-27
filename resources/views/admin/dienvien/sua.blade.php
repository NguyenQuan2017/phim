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
    <h3 class="blank1">SỬA DIỄN VIÊN</h3>
    <div class="tab-content">
        <div class="tab-pane active" id="horizontal-form">
            <form class="form-horizontal" method="post" enctype="multipart/form-data">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <input type="hidden" name="actor_id" value="{{ $dienvien->id }}">
                <div class="form-group">
                    <label for="selector1" class="col-sm-2 control-label">TÊN PHIM</label>
                    <div class="col-sm-4"><select name="phim_id" id="selector1" class="form-control1">
                        @foreach($phim as $ph)
                        <option  value="{{ $ph->id }}">{{$ph->name_film}}</option>
                        @endforeach
                    </select></div>
                </div>
                <div class="form-group">
                    <label for="focusedinput" class="col-sm-2 control-label">TÊN DIỄN VIÊN</label>
                    <div class="col-sm-4">
                        <input type="text" class="form-control1" name="tendienvien" id="focusedinput" value="{{ $dienvien->name_actor }}">
                    </div>

                </div>
                <div class="form-group">
                    <label for="focusedinput" class="col-sm-2 control-label">TÊN VAI DIỄN</label>
                    <div class="col-sm-4">
                        <input type="text" class="form-control1" name="tenvaidien" id="focusedinput" value="{{ $dienvien->role_name }}">
                    </div>

                </div>
                 <div class="form-group">
                        <div class="col-sm-4 col-sm-offset-2">
                            <img  class="img" src="{{ url('public/upload/images/dienvien/'.$dienvien->image) }}" alt="">
                        </div>
                    </div>
                <div class="form-group">
                    <label for="focusedinput" class="col-sm-2 control-label">HÌNH ẢNH</label>
                    <div class="col-sm-4">
                        <input type="file" class="form-control1" name="hinhanh" id="focusedinput" >
                    </div>

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

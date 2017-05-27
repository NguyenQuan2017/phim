@extends('admin/layout/index')
@section('action','PHIM MỚI / THÊM')
@section('content')
<div id="page-wrapper">
  <div class="graphs">
    <h3 class="blank1">SỬA DIỄN VIÊN</h3>
    <div class="tab-content">
        <div class="tab-pane active" id="horizontal-form">
            <form class="form-horizontal" method="post" action="{{url('admin/tag/sua')}}"  enctype="multipart/form-data">
                <input type="hidden" name="_token" value="{{ csrf_token()}}">
                <input type="hidden" name="tag_id" value="{{$tag->id}}">
                 <div class="form-group">
                    <label for="focusedinput" class="col-sm-2 control-label">TÊN TAG</label>
                    <div class="col-sm-4">
                        <input type="text" class="form-control1" name="tentag" id="focusedinput" value="{{ $tag->name_tag }}">
                    </div>
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
    
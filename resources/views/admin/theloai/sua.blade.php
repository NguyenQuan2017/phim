@extends('admin/layout/index')
@section('action','PHIM MỚI / THÊM')
@section('content')
@extends('admin/layout/index')
@section('action','PHIM MỚI / SỬA')
@section('content')
<div id="page-wrapper">
    <div class="graphs">
        <h3 class="blank1">SỬA THỂ LOẠI</h3>
        <div class="tab-content">
            <div class="tab-pane active" id="horizontal-form">
                <form class="form-horizontal" method="post" action="{{ url('admin/theloai/sua') }}">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <input type="hidden" name="theloai_id" value="{{ $theloai->id }}"> 
                    
                    <div class="form-group">
                        <label for="focusedinput" class="col-sm-2 control-label">NAME TYPE</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control1" name="tentheloai" id="focusedinput" value="{{ $theloai['name_type'] }}">
                        </div>
                        <div class="alert alert-danger col-sm-4" >
                         @if($errors->has('tentheloai'))
                         <p style="color:red">{{ $errors->first('tentheloai') }}</p>
                         @endif 
                         
                     </div>
                 </div>
                 <div class="form-group">
                    <div class="col-sm-1  col-sm-offset-2">
                        <input type="submit" class="form-control1 btn-success" value="Sửa" id="focusedinput">
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
</div>
@stop

@stop

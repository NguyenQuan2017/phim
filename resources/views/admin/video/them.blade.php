@extends('admin/layout/index')
@section('action','PHIM MỚI / THÊM')
@section('content')
<div id="page-wrapper">
  <div class="graphs">
    <h3 class="blank1">THÊM VIDEO</h3>
    <div class="tab-content">
      <div class="tab-pane active" id="horizontal-form">
       <form class="form-horizontal" method="post" enctype="multipart/form-data">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <div class="form-group">
          <label for="selector1" class="col-sm-2 control-label">TÊN PHIM</label>
          <div class="col-sm-4"><select name="tenphim" id="selector1" class="form-control1">
            @foreach($phim as $ph)
            <option value="{{ $ph->id }}">{{ $ph->name_film }}</option>
            @endforeach
          </select></div>
        </div>

       
       <div class="form-group">
        <label for="focusedinput" class="col-sm-2 control-label"> LINK</label>
        <div class="col-sm-4">
         <input type="text" class="form-control1" name="video" id="focusedinput" placeholder="Tên">
       </div>

     </div> 
     <div class="form-group">
      <label for="focusedinput" class="col-sm-2 control-label">TẬP</label>
      <div class="col-sm-4">
       <input type="text" class="form-control1" name="tap" id="focusedinput" placeholder="Tập">
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

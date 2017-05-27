@extends('admin/layout/index')
@section('action','PHIM MỚI / THÊM')
@section('content')
<div id="page-wrapper">
   <div class="graphs">
      <h3 class="blank1">THÊM THÔNG TIN PHIM  </h3>
      <div class="tab-content">
         <div class="tab-pane active" id="horizontal-form">
            <form class="form-horizontal" method="post" enctype="multipart/form-data">
               <input type="hidden" name="_token" value="{{ csrf_token() }}">
               <div class="form-group">
                  <label for="selector1" class="col-sm-2 control-label">NAME FILM ID</label>
                  <div class="col-sm-4">
                     <select name="phim_id" id="selector1" class="form-control1">
                        @foreach($phim as $ph)
                        <option value="{{ $ph->id }}">{{ $ph->name_film }}</option>
                        @endforeach
                     </select>
                  </div>
                  <div class="alert alert-danger col-sm-4" >
                     @if($errors->has('phim_id'))
                     <p style="color:red">{{ $errors->first('phim_id') }}</p>
                     @endif 
                  </div>
               </div>
               <div class="form-group">
                  <label for="focusedinput" class="col-sm-2 control-label">IMDB</label>
                  <div class="col-sm-4">
                     <input type="text" class="form-control1" name="imdb" id="focusedinput" placeholder="Nhập imdb">
                  </div>
                  <div class="alert alert-danger col-sm-4" >
                     @if($errors->has('imdb'))
                     <p style="color:red">{{ $errors->first('imdb') }}</p>
                     @endif 
                  </div>
               </div>
               <div class="form-group">
                  <label for="focusedinput" class="col-sm-2 control-label">YEAR</label>
                  <div class="col-sm-4">
                     <input type="text" class="form-control1" name="nam" id="focusedinput" placeholder="Nhập Năm">
                  </div>
                  <div class="alert alert-danger col-sm-4" >
                     @if($errors->has('nam'))
                     <p style="color:red">{{ $errors->first('nam') }}</p>
                     @endif 
                  </div>
               </div>
               <div class="form-group">
                  <label for="focusedinput" class="col-sm-2 control-label">CONTENT</label>
                  <div class="col-sm-4">
                     <textarea style="width:100%;height:200px" name="noidung"></textarea>
                  </div>
                  <div class="alert alert-danger col-sm-4" >
                     @if($errors->has('noidung'))
                     <p style="color:red">{{ $errors->first('noidung') }}</p>
                     @endif 
                  </div>
               </div>
               <div class="form-group">
                  <label for="focusedinput" class="col-sm-2 control-label">TIME</label>
                  <div class="col-sm-4">
                     <input type="text" class="form-control1" name="thoiluong" id="focusedinput" placeholder=" Nhập thời lượng">
                  </div>
                  <div class="alert alert-danger col-sm-4" >
                     @if($errors->has('thoiluong'))
                     <p style="color:red">{{ $errors->first('thoiluong') }}</p>
                     @endif 
                  </div>
               </div>
               <div class="form-group">
                  <label for="focusedinput" class="col-sm-2 control-label">IMAGE</label>
                  <div class="col-sm-4">
                     <input type="file" class="form-control1" name="hinhanh" id="focusedinput" value="">
                  </div>
                  <div class="alert alert-danger col-sm-4" >
                     @if($errors->has('hinhanh'))
                     <p style="color:red">{{ $errors->first('hinhanh') }}</p>
                     @endif 
                  </div>
               </div>
               <div class="form-group">
                  <label for="focusedinput" class="col-sm-2 control-label">EPISODE</label>
                  <div class="col-sm-4">
                     <input type="text" class="form-control1" name="tap" id="focusedinput" placeholder=" Nhập số tập">
                  </div>
                  <div class="alert alert-danger col-sm-4" >
                     @if($errors->has('tap'))
                     <p style="color:red">{{ $errors->first('tap') }}</p>
                     @endif 
                  </div>
               </div>
               <div class="form-group">
                  <label for="focusedinput" class="col-sm-2 control-label">QUALITY</label>
                  <div class="col-sm-4">
                     <input type="text" class="form-control1" name="chatluong" id="focusedinput" placeholder=" Nhập chất lượng">
                  </div>
                  <div class="alert alert-danger col-sm-4" >
                     @if($errors->has('chatluong'))
                     <p style="color:red">{{ $errors->first('chatluong') }}</p>
                     @endif 
                  </div>
               </div>
               <div class="form-group">
                  <label for="focusedinput" class="col-sm-2 control-label">RESOLUTION</label>
                  <div class="col-sm-4">
                     <input type="text" class="form-control1" name="dophangiai" id="focusedinput" placeholder=" Nhập Độ phân giải">
                  </div>
                  <div class="alert alert-danger col-sm-4" >
                     @if($errors->has('dophangiai'))
                     <p style="color:red">{{ $errors->first('dophangiai') }}</p>
                     @endif 
                  </div>
               </div>
               <div class="form-group">
                  <label for="focusedinput" class="col-sm-2 control-label">DIRECTORY</label>
                  <div class="col-sm-4">
                     <input type="text" class="form-control1" name="daodien" id="focusedinput" placeholder="Nhập Đạo Diễn">
                  </div>
                  <div class="alert alert-danger col-sm-4" >
                     @if($errors->has('daodien'))
                     <p style="color:red">{{ $errors->first('daodien') }}</p>
                     @endif 
                  </div>
                </div>
                  <div class="form-group">
                          <label for="focusedinput" class="col-sm-2 control-label">TYPE</label>
                          <div class="col-sm-4">
                             <input type="text" class="form-control1" name="theloai" id="focusedinput" value="Chưa rõ">
                         </div>
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
@extends('admin/layout/index')
@section('content')
<style>
   .img{
   width: 200px;
   height: 200px;
   } 
</style>
<div id="page-wrapper">
   <div class="graphs">
      <h3 class="blank1">SỬA THÔNG TIN PHIM  </h3>
      <div class="tab-content">
         <div class="tab-pane active" id="horizontal-form">
            <form class="form-horizontal" method="post" action="{{ url('admin/thongtinphim/sua') }}" enctype="multipart/form-data">
               <input type="hidden" name="_token" value="{{ csrf_token() }}">
               <input type="hidden" name="ttp_id" value="{{ $thongtinphim->id }}">
               <div class="form-group">
                  <label for="selector1" class="col-sm-2 control-label">NAME FILM ID</label>
                  <div class="col-sm-4">
                     <select name="phim_id" id="selector1" class="form-control1">
                        @foreach($phim as $ph)
                        <option value="{{ $ph->id }}">{{ $ph->name_film }}</option>
                        @endforeach
                     </select>
                  </div>
               </div>
               <div class="form-group">
                  <label for="focusedinput" class="col-sm-2 control-label">IMDB</label>
                  <div class="col-sm-4">
                     <input type="text" class="form-control1" name="imdb" id="focusedinput" value="{{ $thongtinphim->imdb }}">
                  </div>
               </div>
               <div class="form-group">
                  <label for="focusedinput" class="col-sm-2 control-label">YEAR</label>
                  <div class="col-sm-4">
                     <input type="text" class="form-control1" name="nam" id="focusedinput" value="{{ $thongtinphim->year }}">
                  </div>
               </div>
               <div class="form-group">
                  <label for="focusedinput" class="col-sm-2 control-label">CONTENT</label>
                  <div class="col-sm-4">
                     <textarea style="width:100%;height:200px" name="noidung">{{  $thongtinphim->content }}</textarea>
                  </div>
               </div>
               <div class="form-group">
                  <label for="focusedinput" class="col-sm-2 control-label">TIME</label>
                  <div class="col-sm-4">
                     <input type="text" class="form-control1" name="thoiluong" id="focusedinput" value="{{ $thongtinphim->time }}">
                  </div>
               </div>
               <div class="form-group">
                  <label for="focusedinput" class="col-sm-2 control-label">EPISODE</label>
                  <div class="col-sm-4">
                     <input type="text" class="form-control1" name="tap" id="focusedinput" value="{{ $thongtinphim->episode }}" >
                  </div>
               </div>
               <div class="form-group">
                  <label for="focusedinput" class="col-sm-2 control-label">QUALITY</label>
                  <div class="col-sm-4">
                     <input type="text" class="form-control1" name="chatluong" id="focusedinput" value="{{ $thongtinphim->quality }}">
                  </div>
               </div>
               <div class="form-group">
                  <label for="focusedinput" class="col-sm-2 control-label">RESOLUTION</label>
                  <div class="col-sm-4">
                     <input type="text" class="form-control1" name="dophangiai" id="focusedinput" value="{{ $thongtinphim->resolution }}">
                  </div>
               </div>
               <div class="form-group">
                  <label for="focusedinput" class="col-sm-2 control-label">DIRECTOR</label>
                  <div class="col-sm-4">
                     <input type="text" class="form-control1" name="daodien" id="focusedinput" value="{{ $thongtinphim->directory }}">
                  </div>
               </div>
               <div class="form-group">
                  <label for="focusedinput" class="col-sm-2 control-label">TYPE</label>
                  <div class="col-sm-4">
                     @foreach($theloai as $tl)
                     <input type="text" class="form-control1" name="theloai" id="focusedinput" value="{{ $tl->name_type }}">
                     @endforeach
                  </div>
               </div>
               <div class="form-group">
                  <div class="col-sm-4 col-sm-offset-2">
                     <img  class="img" src="{{ url('public/upload/images/450x600/'.$thongtinphim->image) }}" alt="">
                  </div>
               </div>
               <div class="form-group">
                  <label for="focusedinput" class="col-sm-2 control-label">IMAGE</label>
                  <div class="col-sm-4">
                     <input type="file" class="form-control1" name="hinhanh" id="focusedinput" >
                  </div>
               </div>
               <div class="form-group">
                  <div class="col-sm-1  col-sm-offset-2">
                     <input type="submit" class="form-control1 btn-success" value="CẬP NHẬT" id="focusedinput">
                  </div>
               </div>
            </form>
         </div>
      </div>
   </div>
</div>
@stop
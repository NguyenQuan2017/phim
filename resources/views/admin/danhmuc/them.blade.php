@extends('admin/layout/index')
@section('content')
<div id="page-wrapper">
   <div class="graphs">
      <h3 class="blank1">THÊM DANH MỤC</h3>
      <div class="tab-content">
         <div class="tab-pane active" id="horizontal-form">
            <form class="form-horizontal" method="post">
               <input type="hidden" name="_token" value="{{ csrf_token() }}">
               <div class="form-group">
                  <label for="selector1" class="col-sm-2 control-label">NAME PARENT CATOGERY</label>
                  <div class="col-sm-4">
                     <select name="parent_id" id="selector1" class="form-control1">
                        <option value="0">Vui lòng chọn catogery</option>
                        <?php cate_parent($parent); ?>  
                     </select>
                  </div>
                  <div class="alert alert-danger col-sm-4" >
                     @if($errors->has('parent_id'))
                     <p style="color:red">{{ $errors->first('parent_id') }}</p>
                     @endif 
                  </div>
               </div>
               <div class="form-group" >
                  <label for="focusedinput" class="col-sm-2 control-label">NAME CATOGERY</label>
                  <div class="col-sm-4">
                     <input type="text" class="form-control1" name="tendanhmuc" id="focusedinput" placeholder="Điền parent id">
                  </div>
                  <div class="alert alert-danger col-sm-4" >
                     @if($errors->has('tendanhmuc'))
                     <p style="color:red">{{ $errors->first('tendanhmuc') }}</p>
                     @endif 
                  </div>
               </div>
               <div class="form-group">
                  <div class="col-sm-1  col-sm-offset-2">
                     <input type="submit" class="form-control1 btn-success" value="Thêm" id="focusedinput"   >
                  </div>
               </div>
            </form>
         </div>
      </div>
   </div>
</div>
@stop
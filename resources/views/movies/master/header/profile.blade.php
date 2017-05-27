<div id="slide2" class="well ">

	<form action="profile_submit" method="get" accept-charset="utf-8">
      <input type="hidden" name="_token" value="{{ csrf_token() }}">
      <div class="text-center">
         <a class="btn btn-block " style="font-weight: bold; size: 30px"><i ></i> THÔNG TIN CÁ NHÂN</a>
      </div>
      <br/>
      <div class="form-group">
         <input type="text" class="form-control" id="user_input" name="user_input" placeholder="Username or Email " style="width: 300px;">
         <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
      </div>
      <div class="form-group ">
         <input type="password" class="form-control" name="password" placeholder="Password">
         <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
      <div class="row">
         <!-- /.col -->
         <div class="col-xs-4" style="padding-left: 102px">
            <button type="submit" class="btn btn-red " style="text-align: center;width: 100px" ><i class="fa fa-user" aria-hidden="true"> Đăng Nhập</i></button>
         </div>
         <!-- /.col -->
      </div>

	</form>
</div>

<style>

    #slide2_background {
        -webkit-transition: all 0.3s 0.3s;
        -moz-transition: all 0.3s 0.3s;
        transition: all 0.3s 0.3s;
    }

    #slide2,
    #slide2_wrapper {
        -webkit-transition: all 0.4s;
        -moz-transition: all 0.4s;
        transition: all 0.4s;
    }

    #slide2 {
        -webkit-transform: translateX(0) translateY(-40%);
        -moz-transform: translateX(0) translateY(-40%);
        -ms-transform: translateX(0) translateY(-40%);
        transform: translateX(0) translateY(-40%);
    }

    .popup_visible #slide2 {
        -webkit-transform: translateX(0) translateY(0);
        -moz-transform: translateX(0) translateY(0);
        -ms-transform: translateX(0) translateY(0);
        transform: translateX(0) translateY(0);
    }

    .well {
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
        display: none;
        margin: 1em;
    } 

</style>
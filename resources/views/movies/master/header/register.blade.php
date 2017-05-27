    <div id="slide1" class="well  ">
     <form action="/register" method="post" id="form-register">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
    
        <div class="text-center">

            <a  class="btn btn-block "><i class=""></i> ĐĂNG KÝ THÀNH VIÊN</a>
        </div>
        <br/>
        <div class="form-group ">
            <input type="text" class="form-control" name="name" id="name"  placeholder="Full name" style="width: 300px;">
            <span class="fa fa-user-o"></span>
        </div>
        <div class="form-group">
            <input type="email" class="form-control" id="email"  name="email" placeholder="Email">
            <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
        </div>
        <div class="form-group ">
            <input type="password" class="form-control" id="password" name="password" placeholder="Password">
            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
        </div>
        <div class="form-group ">
            <input type="password" class="form-control" id="re_password" name="re_password" placeholder="Retype password">
            <span class="glyphicon glyphicon-log-in form-control-feedback"></span>
        </div>
        <div class="row">
           
            <!-- /.col -->
            <div class="col-xs-4" style="padding-left: 100px">
                <button type="submit" class="btn btn-red " style="text-align: center;width: 100px" ><i class="fa fa-key" aria-hidden="true"> Đăng Ký</i></button>
                
            </div>
            <!-- /.col -->
        </div>
    </form>
   
    
    <div class="social-auth-links text-center">
        <p>- OR -</p>
        <a href="facebook" class="btn btn-block btn-social btn-facebook btn-flat"><i class="fa fa-facebook"></i> Sign up using
    Facebook</a>
        <a href="#" class="btn btn-block btn-social btn-google btn-flat"><i class="fa fa-google-plus"></i> Sign up using
      Google+</a>
    </div>
</div>



<style>
    #slide1_background {
        -webkit-transition: all 0.3s 0.3s;
        -moz-transition: all 0.3s 0.3s;
        transition: all 0.3s 0.3s;
    }

    #slide1,
    #slide1_wrapper {
        -webkit-transition: all 0.4s;
        -moz-transition: all 0.4s;
        transition: all 0.4s;
    }

    #slide1 {
        -webkit-transform: translateX(0) translateY(-40%);
        -moz-transform: translateX(0) translateY(-40%);
        -ms-transform: translateX(0) translateY(-40%);
        transform: translateX(0) translateY(-40%);
    }

    .popup_visible #slide1 {
        -webkit-transform: translateX(0) translateY(0);
        -moz-transform: translateX(0) translateY(0);
        -ms-transform: translateX(0) translateY(0);
        transform: translateX(0) translateY(0);
    }

    .well {
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
        display: none;
        margin: 1em;
    } ///
</style>

<div class="header col-sm-12">
<div class="container">
   <nav class="navbar navbar-default nav-menu">
      <div class="navbar-header">
         <!-- header logo -->
         <div class="header-logo  col-sm-4 col-md-12 "><a class="logo " href="{{ url('/') }}" title="Xem phim mới chất lượng HD"><span>PHIMMOI.NET</span></a></div>
         <div class="widget_search col-md-4  col-sm-3 ">
            <form method="post" id="form-search" action="{{ url('/timkiem') }}">
               <input type="hidden" name="_token" value="{{ csrf_token() }}">
               <input type="text" name="keyword" id="search-input" placeholder="Tìm: tên phim, đạo diễn, diễn viên" >
            </form>
         </div>
      </div>
      @if(isset($user))
      @if($user->level==1)
      <div class=" widget_user_header col-md-4 col-sm-4  " >
         <ul class="nav nav-profile " style="float: right;">
            <li >
               <a href="#" class="dropdown-toggle" data-toggle="dropdown" style="color:#1e1e1e">
               <span class="fa fa-user"></span> 
               <strong>{{$user->name }}</strong>
               <span class="fa fa-chevron-down"></span>
               </a>
               <ul class="dropdown-menu">
                  <li>
                     <div class="navbar-login">
                        <div class="row">
                           <div class="col-lg-4">
                              <p class="text-center">
                                 <span class="icon-size"><img src="" alt=""></span>
                              </p>
                           </div>
                           <div class="col-lg-8">
                              <p class="text-left"><strong>{{$user->name}}</strong></p>
                              <p class="text-left small">{{ $user->email}}</p>
                              <p class="text-left">
                                 <a href="{{ url('logout') }}" class="btn btn-primary  btn-sm">Logout</a>
                              </p>
                           </div>
                        </div>
                     </div>
                  </li>
                  <li class="divider"></li>
                  <li>
                     <div class="navbar-login navbar-login-session">
                        <div class="row">
                           <div class="col-lg-12">
                              <p>
                                 <a href="" class="btn btn-primary  slide2_open" data-toggle="modal">My Profile</a>
                                 <a href="#" class="btn btn-danger ">Change Password</a>
                              </p>
                           </div>
                        </div>
                     </div>
                  </li>
               </ul>
            </li>
         </ul>
         <button class="btn btn-red col-sm-4 col-md-2    "><a href="{{url('admin/phim/them')}}" title=""> <i class="fa fa-film" aria-hidden="true"></i> Add Film</a></button>    
      </div>
      @else
      <div class=" widget_user_header col-md-4 col-sm-4 " >
         <ul class="nav nav-profile " style="float: right;">
            <li >
               <a href="#" class="dropdown-toggle" data-toggle="dropdown" style="color:#1e1e1e">
               <span class="fa fa-user"></span> 
               <strong>{{$user->name }}</strong>
               <span class="fa fa-chevron-down"></span>
               </a>
               <ul class="dropdown-menu">
                  <li>
                     <div class="navbar-login">
                        <div class="row">
                           <div class="col-lg-4">
                              <p class="text-center">
                                 <span class="icon-size"><img src="" alt=""></span>
                              </p>
                           </div>
                           <div class="col-lg-8">
                              <p class="text-left"><strong>{{$user->name}}</strong></p>
                              <p class="text-left small">{{ $user->email}}</p>
                              <p class="text-left">
                                 <a href="{{ url('logout') }}" class="btn btn-primary  btn-sm">Logout</a>
                              </p>
                           </div>
                        </div>
                     </div>
                  </li>
                  <li class="divider"></li>
                  <li>
                     <div class="navbar-login navbar-login-session">
                        <div class="row">
                           <div class="col-lg-12">
                              <p>
                                 <a href="" class="btn btn-primary  slide2_open" data-toggle="modal">My Profile</a>
                                 <a href="#" class="btn btn-danger ">Change Password</a>
                              </p>
                           </div>
                        </div>
                     </div>
                  </li>
               </ul>
            </li>
         </ul>
      </div>
      @endif
      @else
      <div class="widget_user_header col-md-4 col-sm-4 " style="float: right;">
         <button class="btn btn-red  slide1_open "  data-toggle="modal" > <i class="fa fa-key" aria-hidden="true"></i> Đăng ký thành viên</button>
         <button class="btn btn-info slide_open " data-toggle="modal" ><a href="" title="" style="color:white"><i class="fa fa-user" aria-hidden="true"></i> Đăng nhập</a></button>
       </div> 
      @endif  
   </nav>
   </div>
</div>
@include('movies/master/header/register')
@include('movies/master/header/login')
@include('movies/master/header/profile')
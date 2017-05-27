<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PHIM HOT</title>

    <link rel="stylesheet" href="{!! url('public/movies/css/style.css') !!}">
    <link rel="stylesheet" href="{!! url('public/movies/css/new-homepage.css') !!}">
    <link rel="stylesheet" href="{!! url('public/movies/css/vtlai.css') !!}">
    <link rel="stylesheet" href="{!! url('public/movies/css/bootstrap.css') !!}">
    <link rel="stylesheet" href="{!! url('public/movies/css/icon-font.min.css') !!}">
    <link rel="stylesheet" href="{!! url('public/movies/css/font-awesome.css') !!}">
    <link rel="stylesheet" href="{!! url('public/movies/css/bootstrap-social.css') !!}">
    <link rel="stylesheet" href="{!! url('public/movies/font/utm_cafeta-webfont.woff') !!}">
    <link rel="stylesheet" href="{!! url('public/movies/css/registry.css') !!}">
    <link rel="stylesheet" href="{!! url('public/movies/css/animate.css') !!}">
    <link rel="stylesheet" href="{!! url('public/movies/css/scoll.css') !!}">
    <link rel="stylesheet" href="{!! url('public/movies/css/default.css') !!}">
    <link rel="stylesheet" href="{!! url('public/movies/css/component.css') !!}">
    <link rel="stylesheet" href="{!! url('public/movies/css/scoll.css') !!}">
    <link rel="stylesheet" href="{!! url('public/movies/css/nav.css') !!}">
    <script  src="{{ url('public/movies/js/jquery-1.10.2.min.js') }}"></script>
</head>

<body >
<a href="#scoll" class="go-top"><i class="fa fa-angle-up"></i></a>
@if(Session::has('thongbao'))
    <script> alert("{{ Session::get('thongbao') }}")</script>
@endif
    <header  id="scoll">
        <!-- Content -->
        @include('movies/master/header/header')
        <!-- End Content -->
    </header>
    <div class="clear"></div>
    <!-- navigation -->
    @include('movies/master/nav/navgation')

    <!-- End Navigation  -->
    <div class="clear"></div>
    <div class="container" >

        {{-- ScriptcarouFredSel --}}
        <script type="text/javascript" language="javascript">
            $(function() {
                $('#movie-carousel-top').carouFredSel({
                    auto: {
                        pauseOnHover: 'resume'
                    }
                }, {
                    transition: true
                });
            })
        </script>
        {{-- EndscriptcarouFredSel --}}
        <!-- Film de cu -->

        @include('movies/master/phim_moi/film-de-cu');
        <!-- End film de cu -->
        <div class="row">
            <!-- slider -->
            <div class="col-lg-8">

                <!-- New update film box -->
                <div class="row movie-update">
                    {{-- Col-left --}} 
                    @include('movies/master/col/col-left')
                    <!-- Col -right -->
                    @include('movies/master/col/col-right')

                    <!-- End col-right -->
                </div>

                <!-- Phim chiếu rạp -->

                <div class="movie-list-index home-v2">

                    <h2 class="header-list-index"><span class="title-list-index">Phim chiếu rạp mới</span><a class="more-list-index" href="phim-chieu-rap/" title="Phim chiếu rạp mới nhất">Xem tất cả</a></h2>
                    <!-- Content -->
                    @include('movies/master/phim_moi/film-chieu-rap')
                    <!-- Endcontent -->

                </div>

                <!-- Phim lẻ mới -->
                <div class="movie-list-index home-v2">

                    <h2 class="header-list-index"><span class="title-list-index">Phim lẻ mới</span><a class="more-list-index" href="phim-chieu-rap/" title="Phim chiếu rạp mới nhất">Xem tất cả</a></h2>
                    <!-- Content -->
                    @include('movies/master/phim_moi/film-le')
                    <!-- End Content -->
                </div>
                <!-- /Phim lẻ mới -->

                <!-- Phim bộ mới -->
                <div class="movie-list-index home-v2">

                    <h2 class="header-list-index"><span class="title-list-index">Phim bộ mới</span><a class="more-list-index" href="phim-chieu-rap/" title="Phim chiếu rạp mới nhất">Xem tất cả</a></h2>
                    <!-- Content -->
                    @include('movies/master/phim_moi/film-bo')
                    <!-- End Content -->

                </div>
                <!-- /Phim bộ mới -->
                <!-- Phim hoạt hình mới -->
                <div class="movie-list-index home-v2">

                    <h2 class="header-list-index"><span class="title-list-index">Phim hoạt hình mới</span><a class="more-list-index" href="phim-chieu-rap/" title="Phim chiếu rạp mới nhất">Xem tất cả</a></h2>
                    <!--Content  -->
                    @include('movies/master/phim_moi/film-hoat-hinh')

                    <!-- End Content -->

                </div>
                <!-- /Phim hoạt hình mới -->
                <div class="clear"></div>
            </div>
            <!-- Sidebar -->

            <div class="col-lg-4 sidebar" id="sidebar">

                <!-- Box: Facebook like -->
               
                
                <!-- Box: Trailer phim mới -->
                <!-- Content  -->
                @include('movies/master/phim_moi/film-trailer')
                <!-- End Content -->
                <div class="clear"></div>
                <!-- /Box: Trailer phim mới -->
                <!-- Box: Top phim lẻ -->
                
                    <!-- Content -->
                    @include('movies/master/phim_hot/film-le-hot-week')
                    <!-- End Content -->
                
                <div class="clear"></div>
                <!-- /Box: Top phim lẻ -->

                <div class="clear"></div>
                <!-- /Ad: Sidebanner -->
                <!-- Box: Top phim bộ -->
              
                    <!-- Content -->
                    @include('movies/master/phim_hot/film-bo-hot-week')
                    <!-- EndContent -->
            
                <div class="clear"></div>
                <!-- /Box: Top phim bộ -->
                <!-- Box: Top Tag -->
            
                    <!-- Content -->
                    @include('movies/master/keyword/keywords')

                    <!-- End Content -->
          

                <div class="clear"></div>

                   <div class="fb-page" data-href="https://www.facebook.com/phimhotcom/" data-tabs="timeline" data-width="300" data-height="180" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true">
                   </div>
            </div>
            <div class="clear"></div>

        </div>
        <!-- /Footer banner -->
    </div>
    <!-- /Main content -->
    </div>
    <footer>
        <!-- Content -->
        @include('movies/master/footer/footer')
        <!-- End Content -->
    </footer>
<!-- Go to www.addthis.com/dashboard to customize your tools --> <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-591301d92cd51754"></script> 
</body>
<script type="text/javascript" language="javascript" src="{{ url('public/movies/js/jquery.validate.min.js') }}"></script>
<script type="text/javascript" language="javascript" src="{{ url('public/movies/js/jquery.validate.js') }}"></script>
<script type="text/javascript" language="javascript" src="{{ url('public/movies/js/jquery.carouFredSel-6.2.1-packed.js') }}"></script>
<script type="text/javascript" language="javascript" src="{{ url('public/movies/js/jquery.popupoverlay.js') }}"></script>
<script type="text/javascript" language="javascript" src="{{ url('public/movies/js/bootstrap.min.js') }}"></script>
<script type="text/javascript" language="javascript" src="{{ url('public/movies/js/popup.js') }}"></script>
<script type="text/javascript" language="javascript" src="{{ url('public/movies/js/validator.js') }}"></script>
<script type="text/javascript" language="javascript" src="{{ url('public/movies/js/scoll.js') }}"></script>
<script type="text/javascript" language="javascript" src="{{ url('public/movies/js/nav.js') }}"></script>
<!-- <script type="text/javascript" language="javascript" src="{{ url('public/movies/js/toucheffects.js') }}"></script>
<script type="text/javascript" language="javascript" src="{{ url('public/movies/js/modernizr.custom.js') }}"></script>
 -->
<script>
  window.fbAsyncInit = function() {
    FB.init({
      appId      : '1681260538847771',
      xfbml      : true,
      version    : 'v2.9'
    });
    FB.AppEvents.logPageView();
  };

  (function(d, s, id){
     var js, fjs = d.getElementsByTagName(s)[0];
     if (d.getElementById(id)) {return;}
     js = d.createElement(s); js.id = id;
     js.src = "//connect.facebook.net/en_US/sdk.js";
     fjs.parentNode.insertBefore(js, fjs);
   }(document, 'script', 'facebook-jssdk'));
</script>
 <script src="{{ url('public/movies/js/wow.min.js') }}"></script>
            <script>
             new WOW().init();
            </script>


<div id="fb-root"></div>
  <script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v2.5";
  fjs.parentNode.insertBefore(js, fjs);
  }(document, 'script', 'facebook-jssdk'));</script>
  <style>#cfacebook{position:fixed;bottom:0px;right:100px;z-index:999999999999999;width:250px;height:auto;box-shadow:6px 6px 6px 10px rgba(0,0,0,0.2);border-top-left-radius:5px;border-top-right-radius:5px;overflow:hidden;}#cfacebook .fchat{float:left;width:100%;height:270px;overflow:hidden;display:none;background-color:#fff;}#cfacebook .fchat .fb-page{margin-top:-130px;float:left;}#cfacebook a.chat_fb{float:left;padding:0 25px;width:250px;color:#fff;text-decoration:none;height:40px;line-height:40px;text-shadow:0 1px 0 rgba(0,0,0,0.1);background-image:url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAAqCAMAAABFoMFOAAAAWlBMV…8/UxBxQDQuFwlpqgBZBq6+P+unVY1GnDgwqbD2zGz5e1lBdwvGGPE6OgAAAABJRU5ErkJggg==);background-repeat:repeat-x;background-size:auto;background-position:0 0;background-color:#3a5795;border:0;border-bottom:1px solid #133783;z-index:9999999;margin-right:12px;font-size:18px;}#cfacebook a.chat_fb:hover{color:yellow;text-decoration:none;}</style>
  <script>
  jQuery(document).ready(function () {
  jQuery(".chat_fb").click(function() {
jQuery('.fchat').toggle('slow');
  });
  });
  </script>
  <div id="cfacebook">
  <a href="javascript:;" class="chat_fb" onclick="return:false;"><i class="fa fa-facebook-square"></i> Phản hồi của bạn</a>
  <div class="fchat">
  <div class="fb-page" data-tabs="messages" data-href="https://www.facebook.com/phimhotcom" data-width="250" data-height="400" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true" data-show-posts="false"></div>
  </div>
  </div>
</html>
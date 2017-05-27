<!-- 
<nav >
	<div class="container">
        <ul class="mega-menu-1">
            <li><a href="/movies">Phim Mới</a></li>
            <li class=""><a class="dc-mega">Quốc gia<span class="dc-mega-icon"></span></a>
                <div class="sub-container" style="top: 45px; z-index: 1000;">
                    <ul class="sub" >
                        <li><a href="quoc-gia/vn/">Việt Nam</a></li>
                        <li><a href="quoc-gia/cn/">Trung Quốc</a></li>
                        <li><a href="quoc-gia/us/">Mỹ</a></li>
                        <li><a href="quoc-gia/kr/">Hàn Quốc</a></li>
                        <li><a href="quoc-gia/jp/">Nhật Bản</a></li>
                        <li><a href="quoc-gia/hk/">Hồng Kông</a></li>
                        <li><a href="quoc-gia/in/">Ấn Độ</a></li>
                        <li><a href="quoc-gia/th/">Thái Lan</a></li>
                        <li><a href="quoc-gia/fr/">Pháp</a></li>
                        <li><a href="quoc-gia/tw/">Đài Loan</a></li>
                        <li><a href="quoc-gia/au/">Úc</a></li>
                        <li><a href="quoc-gia/uk/">Anh</a></li>
                        <li><a href="quoc-gia/ca/">Canada</a></li>
                        <li><a href="quoc-gia//">Quốc gia khác</a></li>
                    </ul>
                </div>
            </li>
            <li class=""><a class="dc-mega">Phim lẻ<span class="dc-mega-icon"></span></a>
                <div class="sub-container" style="top: 45px; z-index: 1000;">
                    <ul class="sub" >
                        <li><a href="phim-le/2017/">Phim lẻ 2017</a></li>
                        <li><a href="phim-le/2016/">Phim lẻ 2016</a></li>
                        <li><a href="phim-le/2015/">Phim lẻ 2015</a></li>
                        <li><a href="phim-le/2014/">Phim lẻ 2014</a></li>
                        <li><a href="phim-le/2013/">Phim lẻ 2013</a></li>
                        <li><a href="phim-le/2012/">Phim lẻ 2012</a></li>
                        <li><a href="phim-le/2011/">Phim lẻ 2011</a></li>
                        <li><a href="phim-le/-2011/">Phim lẻ trước 2011</a></li>
                    </ul>
                </div>
            </li>
            <li class=""><a class="dc-mega">Phim bộ<span class="dc-mega-icon"></span></a>
                <div class="sub-container" style="top: 45px; z-index: 1000;">
                    <ul class="sub" >
                        <li><a href="phim-bo/kr/">Phim bộ Hàn Quốc</a></li>
                        <li><a href="phim-bo/cn/">Phim bộ Trung Quốc</a></li>
                        <li><a href="phim-bo/th/">Phim bộ Thái Lan</a></li>
                        <li><a href="phim-bo/hk/">Phim bộ Hồng Kông</a></li>
                        <li><a href="phim-bo/tw/">Phim bộ Đài Loan</a></li>
                        <li><a href="phim-bo/us/">Phim bộ Mỹ</a></li>
                    </ul>
                </div>
            </li>
            <li><a href="phim-kinh-dien/">Phim kinh điển</a></li>
            <li><a href="phim-chieu-rap/">Phim chiếu rạp</a></li>
            <li><a href="trailer/">Trailer</a></li>
            <li><a href="">Top 10 IMDb 2016</a></li>
        </ul>
    </div>
</nav>
 -->
 <nav id='cssmenu' >
<div id="head-mobile"></div>
<div class="button"></div>
<ul>
<li class='active'><a href='/'><i class="fa fa-home" aria-hidden="true"></i></a></li>
@foreach($menu_level_1 as $cat)
<li><a href='#'>{{ $cat->name_category }}</a>
    
   <ul style="position: absolute; z-index: 1000">
   <?php $menu_level_2=DB::table('categories')->where('parent_category_id',$cat->id)->get(); ?>
   @foreach($menu_level_2 as $cat2)
      <li  ><a href='#'>{{$cat2->name_category}}</a></li>
   @endforeach   
     
   </ul>

</li>
@endforeach
<!-- <li><a href='#'>PHIM LẺ</a>
    <ul>
          <li><a href='#'>VIỆT NAM</a></li>
          <li><a href='#'>MỸ</a></li>
          <li><a href='#'>VIỆT NAM</a></li>
          <li><a href='#'>VIỆT NAM</a></li>
    </ul>
</li>
<li><a href='#'>PHIM BỘ</a>
    <ul>
          <li><a href='#'>VIỆT NAM</a></li>
          <li><a href='#'>MỸ</a></li>
          <li><a href='#'>VIỆT NAM</a></li>
          <li><a href='#'>VIỆT NAM</a></li>
    </ul></li>
<li><a href='#'>PHIM KINH ĐIỂN</a></li>
<li><a href='#'>PHIM CHIẾU RẠP</a></li>
<li><a href='#'>PHIM TRAILER</a></li> -->
</ul>
</nav>

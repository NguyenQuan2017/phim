@extends('movies/master.index')
@section('list-film')
@section('action','Phim hành động')

<ol class="breadcrumb" itemscope="" itemtype="http://schema.org/BreadcrumbList">
  <li itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem"><a itemprop="item" title="Phim Mới" href="./"><span itemprop="name">Phim Mới</span></a></li>
  <li itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem"><a itemprop="item" title="Phim hành động" href="the-loai/phim-hanh-dong/"><span itemprop="name">@yield('action')</span></a></li>
</ol>
@include('movies/master.filter')
<div class="col-lg-8">     
 <div class="movie-list-index">
  <h1 class="header-list-index">
    <span class="title-list-index">@yield('action')</span>
  </h1>
  <!-- Film List -->         
  @include('movies/movie-type.movie-list')
  <!-- End Film List -->
</div>
<div class="clear"></div>

<ul class="pagination pagination-lg">

  <li><a href="the-loai/phim-hanh-dong/page-2.html">Trang kế →</a></li>

</ul>
</div>
@stop
@extends('movies/master.index')

@section('movie')
<div class="col-lg-8">
  @foreach($thongtinphim as $ttp)
  <ol class="breadcrumb" itemscope="" itemtype="http://schema.org/BreadcrumbList">
    <li itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem"><a itemprop="item" title="Phim Mới" href="./"><span itemprop="name">Phim Mới</span></a></li>

    <li itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem"><a itemprop="item" title="" href=""><span itemprop="name">{{ $ttp->TEN_DANH_MUC }}</span></a></li>
    <li itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem"><a itemprop="item" title="Phim bộ Nhật Bản" href="phim-bo/jp/"><span itemprop="name">{{ $ttp->QUOC_GIA }}</span></a></li>
    <li class="active">{{ $ttp->TEN_PHIM }}</li>
    
</ol>
@endforeach

<div class="block-wrapper page-single">
    <div class="movie-info">
        
        <!-- Movie info -->
        @include('movies/movie/layout.movie-info-dat')
        
        <!-- End Movie info -->
        
        <!-- Subcribe -->
        @include('movies/movie/layout.subcribe')
        <!-- End Sbucribe -->

        <!-- Actor -->
        @include('movies/movie/layout.actor')
        <!-- End Actor -->
        <article class="block-movie-content wow fadeInUp" id="film-content-wrapper">
            <h2 class="movie-detail-h2">Nội dung phim</h2>
            <div class="fb-like like-at-content" data-href="http://www.phimmoi.net/phim/naruto-shippuden-2297/" data-width="140" data-layout="button_count" data-action="like" data-show-faces="false" data-share="true"></div>
            @foreach($thongtinphim as $ttp)
            <div class="content" id="film-content">
                {{ $ttp->NOI_DUNG }}
            </div>  
            @endforeach
        </article>
        <!-- Keywords -->
        @include('movies/movie/layout.keywords')
        <!-- End Keywords -->
        <div class="clear"></div>
    </div>

</div>


<div class="block-wrapper page-single block-comments">
    <h4>Bình luận về phim</h4>
    <div class="fb-comments" data-href="http://www.phimmoi.net/phim/naruto-shippuden-2297/" data-colorscheme="dark" data-width="650" data-order-by="reverse_time"></div>
</div>
<div class="clear"></div>
@include('movies/movie/layout.list-movie')

</div>
@stop
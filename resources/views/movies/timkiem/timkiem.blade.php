@extends('movies/master.index')
@section('timkiem')
<div class="col-lg-8">
    <ol class="breadcrumb" itemscope="" itemtype="http://schema.org/BreadcrumbList">

        <li itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem"><a itemprop="item" title="Phim Mới" href="./"><span itemprop="name">Phim Mới</span></a></li>
        <li itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem"><a itemprop="item" title="" href=""><span itemprop="name"></span></a></li>
        
    </ol>
    <div class="movie-list-index related-box ">
        <h2 class="header-list-index"><span class="title-list-index">Tìm kiếm: </span></h2>
        <ul class="list-movie">
               @foreach($phim as $ph)
                    <li class="movie-item wow fadeInUp">
                        <a class="block-wrapper" title="" href="{{ URL::Route('/phim',[$ph->id,$ph->alias])}}">
                            <div class="movie-thumbnail" style="background:url('{{ url('public/upload/images/250x360/'.$ph->image)  }}'); background-size: cover;"></div>
                            <div class="movie-meta"><span class="movie-title-1">{{ $ph->name_film }}</span><span class="movie-title-2">{{ $ph->name_english }}</span></div>
                        </a>
                    </li>
           @endforeach
          
        </ul>
    </div>
</div>
@stop
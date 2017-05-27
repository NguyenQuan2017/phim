@extends('movies/master.index')
@section('xemphim')
<!-- Main content -->
<div class="col-lg-8">
    @foreach($phim as $ph)
    <ol class="breadcrumb" itemscope itemtype="http://schema.org/BreadcrumbList">
        <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><a itemprop="item" title="Phim Mới" href="./" itemprop="url"><span itemprop="name">Phim Mới</span></a></li>
        <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><a itemprop="item" title="Phim bộ" href="phim-bo/" itemprop="url"><span itemprop="name">{{ $ph->name_category }}</span></a></li>
        <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><a itemprop="item" title="Cưỡng đoạt (Phần 1) - Taken (Season 1)" href="phim/cuong-doat-phan-1-4977/" itemprop="url"><span itemprop="name">{{ $ph->name_film }}</span></a></li>
        <li class="active">Xem phim</li>
    </ol>
    @endforeach
    <div class="block-wrapper page-single" id="block-player">
        <!-- Thông tin phim -->
        <div class="movie-info movie-info-watch watch-info-box wow bounceInLeft">
            <div class="block-movie-info">
                <div class="row">
                    @foreach($phim as $ph)
                    <div class="col-9 movie-detail">
                        <h1 class="movie-title"><span class="title-1">{{ $ph->name_film }}</span><span class="title-2">{{ $ph->name_english }}</span></h1>
                        <div class="film-description-box">
                            <article id="content">
                                {{ $ph->content }}
                            </article>
                            <div class="clear"></div>
                        </div>
                    </div>
                    <div class="col-3 movie-image">
                        <div class="movie-l-img"><img alt="Cưỡng đoạt (Phần 1) - Taken (Season 1)" src="{{ url('public/upload/images/250x360/'.$ph->image) }}" />
                            <div class="movie-watch-link-box"><a class="movie-watch-link" href="phim/cuong-doat-phan-1-4977/trailer.html" title="Trailer Cưỡng đoạt (Phần 1) - Taken (Season 1)">Xem Trailer</a></div>
                            <div class="hidden"><a class="movie-watch-link" href="phim/cuong-doat-phan-1-4977/download.html" title="Download phim Cưỡng đoạt (Phần 1) - Taken (Season 1)">Download</a></div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
        <!-- /Thông tin phim -->
        
        <div id="watch-block" class="small-player" style="padding-top: 20px     ">
            <div id="my-video" >  
               @foreach($video as $ph)
               
               <script src="{{ $ph->link }}"></script>
               
               @endforeach
               
           </div>
           
           
           <div class="user-action">
            <div id="btn-light" class="btn-cs light-off"><i class="btn-cs-icon icon-light-sm"></i><span id="light-status">Tắt đèn</span></div><a id="btn-add-favorite" class="btn-cs add-favorite" rel="nofollow" href="phim/cuong-doat-phan-1-4977/add.html"><i class="btn-cs-icon icon-add-sm"></i><span class="btn-text">Thêm vào tủ phim</span></a>
            <!--<div id="btn-resize-player" class="btn-cs expand-player"><i class="btn-cs-icon icon-expand-sm"></i><span id="resize-status">Phóng to</span></div>-->
            <div id="btn-autonext" class="btn-cs autonext"><i class="btn-cs-icon icon-autonext-sm"></i><span>Tự chuyển tập: <span id="autonext-status">Bật</span></span>
            </div><a id="btn-download" class="btn-cs download-player" target="_blank" title="Download Cưỡng đoạt (Phần 1)-Taken (Season 1) về máy" href="phim/cuong-doat-phan-1-4977/download.html"><i class="btn-cs-icon icon-download-sm"></i><span>Download</span></a>
            <div id="btn-capture-frame" class="btn-cs capture-frame" title="Lưu khung hình hiện tại trên Video"><i class="btn-cs-icon icon-capture-frame"></i><span>Lưu ảnh</span></div>
            <div id="btn-remove-ad" class="btn-cs remove-ad"><i class="btn-cs-icon icon-removead-sm"></i><span>Tắt QC</span></div>
            <div class="box-rating" itemscope itemtype="http://data-vocabulary.org/Review-aggregate"><input id="hint_current" type="hidden" value=""><input id="score_current" type="hidden" value="9.4">
                <p>Đánh giá phim <span class="num-rating">(15 lượt)</span></p>
                <div id="star" data-score="9.4" style="cursor: pointer;"></div><span id="hint"></span>
                <!-- <span class="hidden" itemprop="count">15</span> --><span class="hidden" itemprop="votes">15</span> <span class="hidden" itemprop="rating" itemscope itemtype="http://data-vocabulary.org/Rating"> <span itemprop="average">9.4</span>
                <meta itemprop="best" content="10" />
                <meta itemprop="worst" content="1" /> </span>
            </div>
        </div>
    </div >
    <div class="fb-like" data-href="http://www.phimmoi.net/phim/cuong-doat-phan-1-4977/" data-width="300" data-colorscheme="dark" data-show-faces="true" data-send="true"></div>
    <div class="clear"></div>
    
    <!-- List tập phim bộ -->
    <div class="list-server wow bounceInLeft    ">
        <div class="server clearfix server-group" data-serverid="drive" data-servername="Server Quốc Tế" data-language="subtitle" data-backuporder="0" data-lastepisode="8">
            <h3 class="server-name">Chọn tập phim </h3>
            <ul class="list-episode">
                @foreach($video as $ph)
                <li class="episode"><a data-episodeid="113436"  id="btn-episode-113436" title="Tập 1" class="btn-episode episode-link btn3d black active" href="phim/cuong-doat-phan-1-4977/tap-1-113436.html">{{$ph->episode}}
                </a>
            </li>
            @endforeach
        </ul>
    </div>
</div>
<!-- /List tập phim bộ -->
<div class="clear"></div>
<div class="block-tags">
    <h3 class="movie-detail-h3">Từ khóa:</h3>
    <ul class="tag-list">
        <li class="tag-item"><a class="tag-link" href="tags/taken/" title="taken">taken</a></li>
        <li class="tag-item"><a class="tag-link" href="tags/cưỡng+đoạt/" title="cưỡng đoạt">cưỡng đoạt</a></li>
        <li class="tag-item"><a class="tag-link" href="tags/phẫn+nộ/" title="phẫn nộ">phẫn nộ</a></li>
    </ul>
</div>
</div>

<div class="block-wrapper page-single block-comments">
    <h4>Bình luận về phim</h4>
    @foreach($phim as $ph)
   <div class="fb-comments" data-href="{{ URL::route('/phim',[$ph->id,$ph->alias]) }}" data-colorscheme="dark" data-width="100%" data-numposts="5"></div>
    @endforeach
</div>
<div class="clear"></div>
<div class="movie-list-index related-box">
    <h2 class="header-list-index"><span class="title-list-index">Có thể bạn cũng muốn xem</span></h2>
    <ul class="list-movie">
        @foreach($phim as $ph)
        <li class="movie-item wow fadeInDown">
            <a class="block-wrapper" title="{{ $ph->title}}" href="phim/gia-dinh-so-1-phan-1-1656/">
                <div class="movie-thumbnail" style="background:url('{{  url('public/upload/images/250x360/'.$ph->image) }}'); background-size: cover;"></div>
                <div class="movie-meta"><span class="movie-title-1">{{ $ph->name_film }}</span><span class="movie-title-2">{{ $ph->name_english }}</span><span class="movie-title-chap">2006</span></div>
            </a>
        </li>
        @endforeach
    </ul>
</div>
<div class="clear"></div>
<div id="light-overlay" style="position: fixed; z-index: 999; background-color: rgb(0, 0, 0); opacity: 0.98; top: 0px; left: 0px; width: 100%; height: 100%; display: none;"></div>



<div class="clear"></div>
</div>


@stop